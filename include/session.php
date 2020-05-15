<?php

// si l'utilisateur n'est pas connecté, on démarre sa session.
if (!isset($_SESSION['login'])) {

    // on Démarre une nouvelle session ou on reprend une session existante
    // puis on retourne TRUE si une session a pu être démarrée avec succès, et sinon FALSE
    session_start();
}

// si il n'est pas connecté et qu'il essaye d'accéder aux pages du crud (back office)
// qui sont propre à quelqu'un qui est connecté en tant que admin à travers l'url 
// alors on le redirige vers la page connection
if (isset($titleAdminCrud) && !isset($_SESSION['login'])) {
    echo '
        <script type="text/javascript">
            location.href = \'../login.php\';
        </script>';
}

if (isset($titleLogin) && isset($_SESSION['login'])) {
    echo '
        <script type="text/javascript">
            location.href = \'index.php\';
        </script>';
}




