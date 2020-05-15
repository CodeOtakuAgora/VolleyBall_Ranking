 <?php

// class User qui définit toute les charactéristiques d'un user avec pleins de fonctions 
// qui le définissent et qui lui sont propres
// récupère et donc à accès à toutes les fonction de sa class mère (Db)
class Teams extends Bdd
{
	// fonction publique (visible et utilisable partout dans le projet) 
    // statique (qui garde la meme signature partout dans le projet)
    // qui retourne tous les users trier par id
    public static function getAllTeams()
    {
        return Bdd::getInstance()->conn->query('SELECT * FROM `volley_equipes`');
    }
}

?>