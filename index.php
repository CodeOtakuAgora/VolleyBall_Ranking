<?php

// on définit notre balise title

$title = "Page d'Accueil";

// on inclut notre package (librairie) qui s'occupe de charger toutes les pages dont on a besoin

require_once('include/require.php');



$classementList = Resultats::getFilterResultats();



// on inclut la vue (partie visible => front) de la page

require_once('views/index.view.php');



?>



