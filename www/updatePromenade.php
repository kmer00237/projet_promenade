<?php

    // import du fichier database
    require_once("database.php");

    //Instanciation de la class Database
    $database = new Database();
    //fonction GET permet de recupérer ce que nous avons dans la base de donnés par l'url
    $id = $_GET["id"];
    //Recuperation de la liste des promenades
    $Promenade = $database->getPromenadeById($id);    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Olivier Dupré, Abert Omgba">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Promenade</title>
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
                <a href="index.php">
                    <img src="assets/Home.png"></a>
                </div>
                
            </div>
        </div>
    </header>
    <main>
        <!--Main-->
        <form action="process-updatePromenade.php" method="POST" enctype="multipart/form-data">
        <button type="submit" class="btn btn-dark">Poster Promenade</button></a>
                    <div class="container-fluid" style="margin-top: 1%; margin-bottom: 1%;">
                <div class="row ">                
                    <input class="col-md-4" type="text" name="auteur" placeholder="Votre nom:" value="<?php echo $Promenade->getAuteur();?>"> <br>
                    <input class="col-md-4" type="text" name="pays" placeholder="Pays:" value="<?php echo $Promenade->getPays();?>">
                    <input class="col-md-4" type="text" name="case_postale" placeholder="Code Postale:" value="<?php echo $Promenade->getCase_postale();?>">
                   
                </div>  
                <div class="row">        
                    <input class="col-xs-12 col-md-6 mb-1 " type="text" name="titre" placeholder="Titre de la promenade: " value="<?php echo $Promenade->getTitre();?>">
                    <input class="col-xs-12 col-md-6 mb-1 " type="text" name="ville" placeholder="Ville: " value="<?php echo $Promenade->getVille();?>"> 
                </div>
                    <div class="row">
                        <input type="file" name="image" value="<?php echo $Promenade->getImage();?>"><br><br>
                    </div>
                <div class="row">
                    <input class="col-xs-12 col-md-6 mb-1 " type="text" name="depart" class="form-control" value= "<?php echo $Promenade->getDepart();?>" placeholder="Départ:" >
                    <input class="col-xs-12 col-md-6 mb-1 " type="text" name="arrivee" class="form-control" value= "<?php echo $Promenade->getArrivee();?>" placeholder="Arrivee:" >
                </div>
            </div>
            <div class="container">
                <div class="row textform">
                    <textarea rows="4" cols="50" input class="col-xs-12 col-md-12 mb-12 " 
                    type="text" id="paramDescription" class="form-control" 
                    value= "<?php echo $Promenade->getDescription();?>" 
                    placeholder="Description:" name="description"></textarea>
                </div>
            </div> 
           
        </form>


    </main>


    <footer>
        <div class="container-fluid barre text-white">
            <div class="row footer">
                <div class="col-sm-12 d-flex justify-content-center" style="font-size: 10%;margin-top: 1%;">
                    <h6>Promensuisse une marque déposée par Olivier Dupré et Abert Omgba</h6>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>