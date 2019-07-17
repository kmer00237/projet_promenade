<?php
require_once("database.php");
require_once("classPromenade.php");
//creation de la nouvelle connexion
$database = new Database();
//fonction GET permet de recupérer ce que nous avons dans la base de donnés par l'url
$id = $_GET["id"];
// Recupere une promenade en fonction de son id
$Promenade = $database->getPromenadeById($id);
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Olivier Dupré, Abert Omgba">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promenade</title>
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
    </header>
    <main>
        <!--Maintest-->
        <div class="container-fluid" style="margin-top: 1%; margin-bottom: 1%;">
            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center text-center">
                    <h6><p>Pays : <?php echo $Promenade->getPays();?>   
                     | Ville : <?php echo $Promenade->getVille();?>   
                     | Case Postal : <?php echo $Promenade->getCase_postale();?></p></h6>
                </div>    
                <div class="col-sm-6 d-flex justify-content-centerr">
                    <p><?php echo $Promenade->getTitre();?></p>   
                </div>
            </div>
        <div class="container-fluid ">
        
            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center text-center">
                    <div clas="imageProm">
                        <img class="img-responsive imageProm" src="
                        <?php echo $Promenade->getImage();?>"
                         style="align-content: center;" alt="">
                    </div>     
                </div>    
                <div class="col-sm-6">
                    <p><?php echo $Promenade->getAuteur();?>  le : 
                       <?php echo $Promenade->getDate();?></p>
                    <p></p>
                   <p><?php echo $Promenade->getDepart();?>  à  
                        <?php echo $Promenade->getArrivee();?></p>
                    <div class="Description">
                        <?php echo $Promenade->getDescription();?>
                    </div>
                </div>
            </div>        
        </div>
    </main>
    <footer>
    <!--Bas de page-->
        <div class="container-fluid barre text-white">
            <div class="row footer">
                <div class="col-sm-12 d-flex justify-content-center" style="font-size: 10%;margin-top: 1%;">
                    <h6>Promensuisse une marque déposer par Olivier Dupré et Abert Omgba</h6>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
