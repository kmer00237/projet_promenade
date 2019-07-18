<?php

// Import de la databse
require_once("database.php");

// Création de la connexion
$database = new Database();

// Récupération de la liste de promenade
// $id, $auteur, $date, $pays, $ville, $case_postale, $titre, $image, depart ,arrivée ,description 
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
            <html>
            <div class="container-fluid barre text-white">
            <div class="row">
                <div class="col-sm-4">
                    <li>
                        <?php   echo "<a href=afficher.php?id="
                        .$listePromenade->getId().">";
                        echo " image ".$listePromenade->getImage().
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