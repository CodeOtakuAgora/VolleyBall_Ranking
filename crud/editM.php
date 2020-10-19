<?php

// on définit notre balise title
$titleAdminCrud = "Edition du CRUD Matchs";

// on inclut notre package (librairie) qui s'occupe de charger toutes les pages dont on a besoin
require_once("../include/require.php");

$get_year = htmlspecialchars(Util::getGetParam('year'));
$get_year = (int)$get_year;

// on vérifie si le formulaire à été validé
if (!empty($_POST)) {
    // on apelle la fonction updateUser qui appartient à la classe User
    // en lui passant en paramettre les valeurs de ce qui a été rentré dans les inputs
    $user = Matchs::updateMatchs($_POST["id_equipe1"], $_POST["id_equipe2"], 
    	$_POST["resultat"], $_POST["sets"], $_POST["scores"],
    	$_POST["points"], $_POST["penalites"], $_POST["annee"], $_GET['id']);

    // puis on affiche le message de succès
    $message = "Nouveau Matchs Modifié Avec Succès";

}

// on apelle la fonction getUser qui appartient à la classe User
// en lui passant l'id du user afin de mettre à jour uniquement le user selectionné
$user = Matchs::getMatchs($_GET["id"], $get_year);


// on inclut la vue (partie visible => front) de la page
require_once("views/editM.view.php");

// on inclut le footer du site tout à la fin car le but est de le charger en dernier
require_once('../include/footer.php');

?>