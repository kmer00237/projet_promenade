<?php
require_once("database.php");
//creation de la nouvelle connexion
$database = new Database();
//fonction GET permet de recupérer ce que nous avons dans la base de donnés par l'url
$id = $_GET["id"];
// Recupere une promenade en fonction de son id
$listePromenade = $database->getAllPromenade();
//var_dump($listePromenade);
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
            <div class="container-fluid text-white">
                <div class="row">
                    <div class="col-sm-3">
                        <?php  echo "<a href=afficher.php?id=".$listePromenade->getId().">"?></a>
                            <div clas="imageProm">
                                <img class="img-responsive imageProm" src="
                                <?php echo $Promenade->getImage();?>"
                                 style="align-content: center;">
                            </div>
                                <?php echo $Promenade->getTitre();?>
                                <?php echo $Promenade->getPays();?>
                                <?php echo $Promenade->getVille();?>
                            </div>     
<!--                            echo " image ".$listePromenade->getImage().
                            " : Le titre :".$listePromenade->getTitre().
                            " : Nom de l'auteur :".$listePromenade->getAuteur().
                            " Pays :".$listePromenade->getPays().
                            " Ville :".$listePromenade->getVille().
-->                        
                        </a>    
                    </div>
                </div>
            </div>
        <?php } ?>
        </ul>
    </body>
</html>