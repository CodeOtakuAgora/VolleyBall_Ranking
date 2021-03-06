<?php

// on définit notre balise title
$titleAdminCrud = "Edition du CRUD Résultats";

// on inclut notre package (librairie) qui s'occupe de charger toutes les pages dont on a besoin
require_once("../include/require.php");

$get_year = htmlspecialchars(Util::getGetParam('year'));
$get_year = (int)$get_year;

// on vérifie si le formulaire à été validé
if (!empty($_POST)) {
    // on apelle la fonction updateUser qui appartient à la classe User
    // en lui passant en paramettre les valeurs de ce qui a été rentré dans les inputs
    $user = Resultats::updateResultats($_POST["victoires"], $_POST["defaites"], 
    	$_POST["nb_sets_gagnes"], $_POST["nb_points_total"], $_POST['nb_matchs'], 
    	$_POST['annee'], $_POST['equipe_id'], $_GET['id']);

    // puis on affiche le message de succès
    $message = "Nouveau Résultats Modifié Avec Succès";

}

// on apelle la fonction getUser qui appartient à la classe User
// en lui passant l'id du user afin de mettre à jour uniquement le user selectionné
$user = Resultats::getResultats($_GET["id"], $get_year);


// on inclut la vue (partie visible => front) de la page
require_once("views/edit.view.php");

// on inclut le footer du site tout à la fin car le but est de le charger en dernier
require_once('../include/footer.php');

?>