<?php
require_once("database.php");
require_once("classPromenade.php");
//creation de la nouvelle connexion
$database = new Database();
//$promenade = new Promenades();
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
        <meta name="author" content="Olivier Dupré, Abert Omgba">
        <title>Promensuisse</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <header>
        <!--Bandeau-->
        <div class="container-fluid barre">
            <div class="row">
                <div class="col-xs-12 col-sm-6 d-flex justify-content-center colMenu">
                    <h3>Promensuisse</h3>
                </div>
                <div class="col-xs-12 col-sm-6 d-flex justify-content-center colMenu">
                    <a href="ajouterPromenade.php">
                        <button type="button" class="btn btn-outline-succes">Ajouter Promenade</button></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!--Main-->
        <div class="container-fluid">
            <div class="row">
                <?php foreach($listePromenade as $Promenade){ ?>
                <div class="col-sm-3 vignette">
                    <a href="afficherPromenade.php?id=<?php echo $Promenade->getId();?> ">
                     <div>
                        <?php echo '<img src="'.$Promenade->getImage().'" class="imageIcon"/>'; ?>
                    </div>
                    <div class="textVignette">
                        <?php echo $Promenade->getTitre();?>
                        <br>
                        <?php echo $Promenade->getAuteur();?>
                        <br>
                        <?php echo $Promenade->getPays();?>
                        <br>
                        <?php echo $Promenade->getVille();?>
                        <br>
                    </div> 
                </div>
                </a> 
                <?php } ?>
            </div>
        </div>
    </main>
    <footer>
        <!--Bas de page-->
        <div class="container-fluid barre text-white">
            <div class="row footer">
                <div class="col-sm-12 d-flex justify-content-center" style="margin-top: 1%;">
                    <h6>Promensuisse une marque déposer par Olivier Dupré et Abert Omgba</h6>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>