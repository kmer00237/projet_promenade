<html>
    <head>
        <title>Afficher tous les chiens</title>
		<meta charset="UTF-8">
    </head>
</html>
<?php
// Import de la databse
require_once("database.php");
// Création de la connexion
$database = new Database();
// Récupération de la liste de chiens
// $id, $auteur, $date, $pays, $ville, $case_postale, $titre, $image 	depart 	arrivée 	description 
$listePromenade = $database->getAllPromenade();
?>
<html>
    <header>
        <link rel="stylesheet" href="style.css"> 
    </header>
    <body>
    
    <br>
    <h1>Liste des promenades</h1>
        <h2></h2>

        <ul>
        <?php foreach($listePromenade as $listePromenade){ ?>
            <li>
            <?php   echo "<a href=afficher.php?id=".$listePromenade->getId().">";
            echo " image ".$listePromenade->getImage().
            " : Le titre :".$listePromenade->getTitre().
            " : Nom de l'auteur :".$listePromenade->getAuteur().
            " Pays :".$listePromenade->getPays().
            " Ville :".$listePromenade->getVille().
            "</a>";
            ?>
            </li>
            <?php } ?>
        </ul>
    </body>
</html>