<?php

// on définit notre balise title
$title = "Page des Résultats";

// on inclut notre package (librairie) qui s'occupe de charger toutes les pages dont on a besoin
require_once('include/require.php');

$get_year = htmlspecialchars(Util::getGetParam('year'));
$get_year = (int)$get_year;
$classementList = Resultats::getFilterResultats($get_year);

// on inclut la vue (partie visible => front) de la page
require_once('views/resultats.view.php');

?>



