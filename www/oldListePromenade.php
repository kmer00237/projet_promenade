<?php

// Import de la databse
require_once("database.php");
//creation de la nouvelle connexion
$database = new Database();
//fonction GET permet de recupérer ce que nous avons dans la base de donnés par l'url
$id = $_GET["id"];
// Recupere une promenade en fonction de son id
$listePromenade = $database->getAllPromenade();
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="author" content="Olivier Dupré, Abert Omgba">
    <title>Promensuisse</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<header>
        <!--Bandeau-->

        <div class="container-fluid barre text-white">
            <div class="row">
                <div class="col-sm-4 d-flex justify-content-center colMenu">
                    <h3>Promensuisse</h3>
                </div>
                <div class="col-sm-4 d-flex justify-content-center colMenu">
                <a href="index.html">
                    <img src="assets/Home.png"></a>
                </div>
                <div class="col-sm-4 d-flex justify-content-center colMenu">
                        <a href="ajouterPromenade.php">
                            <button type="button" class="btn btn-outline-succes">Modifier Promenade</button></a>
                </div>
            </div>
        </div>
       <a href=""></a>
    </header>
    <main>
        <!--Main-->
        
    <?php foreach($listePromenade as $vignette){ ?>
        <div class="container-fluid barre">
            <div class="row">
                <div class="col-sm-4">
                    <div class="imageProm">
                        
                        <?php  echo "<a href'=afficher.php?id=".$vignette->getId()."'>";

                      echo "   <img src='<?php $vignette->getImage()  ?> ' >";
                        .$vignette->getImage().">" 
                        .$vignette->getTitre();?>
                        <?php echo $vignette->getPays();?>
                        <?php echo $vignette->getVille();?>
                        <?php var_dump();?> 
                        "</a>";
                        ?>   
                    </div>           
                </div>
            </div>
        </div>
    <?php } ?>
    </main>
    <footer>
        <!--Bas de page-->
        <div class="container-fluid barre text-white">
            <div class="row footer">
                <div class="col-sm-12 d-flex justify-content-center" style="font-size: 10%;margin-top: 1%; ">
                    <h6>Promensuisse une marque déposer par Olivier Dupré et Abert Omgba</h6>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>