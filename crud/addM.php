<?php

// on définit notre balise title
$titleAdminCrud = "Ajout du CRUD Matchs";

// on inclut notre package (librairie) qui s'occupe de charger toutes les pages dont on a besoin
require_once("../include/require.php");

// on vérifie si le formulaire à été validé
if (!empty($_POST)) {	
	// on apelle la fonction setUser qui appartient à la classe User 
    // en lui passant en paramettre les valeurs de ce qui a été rentré dans les inputs
    $user = Matchs::setMatchs($_POST["id_equipe1"], $_POST["id_equipe2"], 
        $_POST["resultat"], $_POST["sets"], $_POST["score"],
    	$_POST["points"], $_POST["penalites"], $_POST["annee"]);

    // puis on affiche le message de succès
    $message = "Nouveau Matchs Ajouté Avec Succès";
}

// on inclut la vue (partie visible => front) de la page
require_once("views/addM.view.php");

// on inclut le footer du site tout à la fin car le but est de le charger en dernier
require_once('../include/footer.php');

?>
