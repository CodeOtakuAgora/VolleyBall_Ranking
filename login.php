<?php

// on définit notre balise title
$titleLogin = "Connection Admin";

// on inclut notre package (librairie) qui s'occupe de charger toutes les pages dont on a besoin
require_once('include/require.php');

$login = (!empty($_REQUEST['login'])) ? $_REQUEST['login'] : '';
$password = (!empty($_REQUEST['password'])) ? $_REQUEST['password'] : '';

// on check l'input pour le login,password
// si il y une erreur on affecte le problème dans la variable d'erreur
// qui s'occupe d'aficher dans une pop-up toutes les erreurs si il y en a
if (!isset($login) || trim($login) === '') {
    if (isset($erreur)) {
        $erreur = $erreur . " <br/> Le login est manquant";
    } else {
        $erreur = "Le login est manquant";
    }
}

if (!isset($password) || trim($password) === '') {
    if (isset($erreur)) {
        $erreur = $erreur . "<br/> Le password est manquant";
    } else {
        $erreur = "Le password est manquant";
    }
}

// si il n'y a pas d'erreur et que le formulaire à été validé
if (!isset($erreur) && isset($_POST['bouton'])) {
    // on récupère depuis la database le password uniquement de celui qui a le meme login
    // que le login qui vient d'être rentré par le visiteur
    $resultQuery = Bdd::getInstance()->conn->query('SELECT * FROM volley_admin WHERE login LIKE "' . $_REQUEST['login'] . '"');
    $res = "";

    foreach ($resultQuery as $value) {
        $res = $value['password'];
    }

    // on vérifie que le mot de passe qu'il à rentré correspond bien avec le mot de passe hashé qui à été récupéré
    // précedmemment depuis la database en utilisant la fonction password_verify de php
    $verify = password_verify($_REQUEST['password'], $res);

    // si la vérification ne correspond pas on lui génère une erreur
    if ($verify === false) {
        if (isset($erreur)) {
            $erreur = $erreur . " <br/> Couple adresse mail/mot de passe erroné";
        } else {
            $erreur = "Couple adresse mail/mot de passe erroné";
        }
    }


    // si la vérifiquation est correcte
    if ($verify === true) {
        // on vérifie en sql que le login et le password correpondent bien à ce qui a été rentré dans les inputs
        $result = Bdd::getInstance()->conn->query('SELECT * FROM `volley_admin` WHERE `login` LIKE "' . $_REQUEST['login'] . '" AND `password` LIKE "' . $res . '"');

        // Si c'est bon on crée une variable session pour l'admin
        foreach ($result as $row) {
            $_SESSION['login'] = $row['login'];
        }

        // on check que l'utilisateur à bien une session propre à lui
        if (isset($_SESSION['login'])) {
            ?>

            <!-- on lance l'animation de success puis on redirige sur la page principale -->
            <script type="text/javascript">
                Swal.fire({
                    title: "Succès!",
                    icon: "success",
                    text: "Connection Réussi",

                }).then(function () {
                    window.location.href = "index.php";
                });
            </script>

            <?php
        }
    }
}


// si il y a des erreur et que le formulaire à été validé
// on lance l'animation d'erreur affichant la liste de toute les erreurs
if (isset($erreur) && isset($_POST['bouton'])) {
    echo '
    <script type="text/javascript">
        Swal.fire({
          title: "Erreur",
          icon: "error",
          html: " ' . $erreur . ' ",
        })
    </script>';
}

// on inclut la vue (partie visible => front) de la page
require_once('views/login.view.php');

?>