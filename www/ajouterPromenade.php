<?php

    // import du fichier database
    require_once("database.php");

    //Instanciation de la class Database
    $database = new Database();
    
    //Recuperation de la liste des promenades
    $nomPromenades = $database->getAllPromenade();    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire promenade</title>

</head>

   
  
        <h1>Ajout d'une promenade</h1>

        <form action="process-AjoutPromenade.php" method="POST">

           <div class="container">

                <div class="row ">                
                <input class="col-xs-12 col-md-6 mb-1 mr-1" type="text" name="Auteur" placeholder="Votre nom: "> <br>
             
                    <input class="col-xs-12 col-md-3 mb-1 " type="text" name="Pays" placeholder="Pays:">
                    <input class="col-xs-12 col-md-3 mb-1 " type="text" name="Pays" placeholder="Code Postale: ">
              
                </div>  

                <div class="row">        
                    <input class="col-xs-12 col-md-6 mb-1 " type="text" name="Titre de la promenade:" placeholder="Titre de la promenade:  " >
                    <input class="col-xs-12 col-md-6 mb-1 " type="text" name="Ville:" placeholder="Ville:  " >
                </div>   
                    
          

                <div class="row">
                   <input type="text" class="form-control col-xs-12 col-md-6" placeholder="Auteur:" name="auteur">
                    <input type="text" class="form-control col-xs-12 col-md-6" placeholder="Pays:" name="pays">
                    <input type="text" class="form-control col-xs-12 col-md-6" placeholder="Case postale:" name="case_postale">
                </div>
          
                <div class="row">
                    <input type="number" class="form-control" placeholder="Titre de la promenade:" name="titre">
                    <input type="text" class="form-control" placeholder="Ville:" name="ville"> <br><br>
                    
                    

                    <input type="file" name="image"><br><br>

                    <input type="text" class="form-control" placeholder="Départ:" name="depart">
                    <input type="text" class="form-control" placeholder="Arrivee:" name="arrivee">

                    <input type="text" class="form-control" placeholder="Description:" name="description">
            
                    
                </div>
            
                <button type="submit" class="btn btn-dark">Ajouter !</button>
   

            </div>                 
            
         
        </form>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    </body>
</html>