<!-- on inclut notre package (librairie) qui s'occupe de charger -->
<!-- toutes les pages dont on a besoin-->
<?php require_once('require.php');
?>

<body <?php if (isset($title) && $title == "Page d'Accueil") { ?> class="maHome" <?php } ?> >

<nav style="justify-content: center;"
     class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- si cette variable à été défini celà signifie que l'on se trouve -->
    <!-- sur l'une des pages du dossier crud il faut donc par conséquent sortir avec ../ -->
    <!-- du dossier crud afin d'être à la racine du projet -->
    <?php if (isset($titleAdminCrud)) { ?>
    <a style="text-decoration: none; color: #000000; display: flex;
                    margin: 0" href="../index.php">
        <img width="617" height="768" src="../ressources/favicon-origin.jpg" class="d-inline-block align-top"
             style="width: 40px; height: 50px;" alt="">
        <?php } else { ?>
        <a style="text-decoration: none; color: #000000; display: flex;
                    margin: 0" href="index.php">
            <img width="617" height="768" src="ressources/favicon-origin.jpg" class="d-inline-block align-top"
                 style="width: 40px; height: 50px;" alt="logo fsgt 78">
            <?php } ?>
            <h1 style="display: flex; align-items: center; font-size: 20px; font-weight: bold;
			    margin-left: 10px; font-size: 1.5rem !important; text-align: center;
                ">Volley Équipes Loisir 78
            </h1>
        </a>
</nav>
