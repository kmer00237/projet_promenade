<?php
require_once("database.php");
//creation de la nouvelle connexion
$database = new Database();
//fonction GET permet de recupérer ce que nous avons dans la base de donnés par l'url
$id = $_GET["id"];
// Recupere une promenade en fonction de son id
$listePromenade = $database->getAllPromenade();
var_dump($listePromenade);
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
            <html>
            <div class="container-fluid barre text-white">
            <div class="row">
                <div class="col-sm-4">
                    <p>
                    <li>
                        <?php   echo "<a href=afficher.php?id=".$listePromenade->getId().">";
                        echo " image ".$listePromenade->getImage($image).
                        " : Le titre :".$listePromenade->getTitre().
                        " : Nom de l'auteur :".$listePromenade->getAuteur().
                        " Pays :".$listePromenade->getPays().
                        " Ville :".$listePromenade->getVille().
                        "</a>";
                        ?>
                    </li>
                </div>
            </div>
            </div>
        <?php } ?>
        </ul>
        </body>
</html>