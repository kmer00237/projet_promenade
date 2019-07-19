<?php

    // import du fichier database
    require_once("database.php");

    //Instanciation de la class Database
    $database = new Database();
    
    //Recuperation de la liste des promenades
    $Promenade = $database->getAllPromenade();    
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
    <title>Ajouter Promenade</title>
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
                
                </div>
            </div>
        </div>
    </header>
    <main>
        <!--Main-->
        <form action="process-AjouterPromenade.php" method="POST" enctype="multipart/form-data">
        <button type="submit" name="submit" value="submit" class="btn btn-dark">Poster Promenade</button>
            <div class="container-fluid" style="margin-top: 1%; margin-bottom: 1%;">
                <div class="row ">                
                    <input class="col-md-4" type="text" id="paramAuteur" name="auteur" 
                    placeholder="Votre nom : "> <br>
                    <input class="col-md-4" type="text" id="paramPays" name="pays" 
                    placeholder="Pays :">
                    <input class="col-md-4" type="text" id="paramCase_postale" name="case_postale" 
                    placeholder="Case Postale : ">
                   
                </div>  
                <div class="row">        
                    <input class="col-xs-12 col-md-6 mb-1 " type="text" id="paramTitre" 
                    name="titre" placeholder="Titre de la promenade :  " >
                    <input class="col-xs-12 col-md-6 mb-1 " type="text" id="paramTitre" 
                    name="ville" placeholder="Ville :" >
                </div>
                <div class="row">
                    <input type="file" name="files"><br><br>
                </div>
                <div class="row">
                    <input class="col-xs-12 col-md-6 mb-1 " type="text" id="paramDepart" 
                    class="form-control" placeholder="Départ:" name="depart">
                    <input class="col-xs-12 col-md-6 mb-1 " type="text" id="paramArrivee" 
                    class="form-control" placeholder="Arrivée:" name="arrivee">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <textarea rows="4" cols="50" input class="col-xs-12 col-md-12 mb-12 " 
                    type="text" id="paramDescription" class="form-control" placeholder="Description:" 
                    name="description"></textarea>
                </div>
            </div> 
        </form>


    </main>


    <footer>
        <div class="container-fluid barre text-white">
            <div class="row footer">
                <div class="col-sm-12 d-flex justify-content-center" style="font-size: 10%;margin-top: 1%;">
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