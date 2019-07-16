<?php
require_once("database.php");
require_once("classPromenade.php");
//creation de la nouvelle connexion
$database = new Database();
//fonction GET permet de recupérer ce que nous avons dans la base de donnés par l'url
$id = $_GET["id"];
// Recupere une promenade en fonction de son id
$promenade = $database->getPromenadeById($id);
var_dump($promenade);
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promensuisse</title>
</head>
<body class="bg-1">
 
<div class=infoPromenade> 
<h1>Choisir une promenade</h1>
<p>Auteur : <?php echo $promenade->getAuteur();?></p>
<p>Date : <?php echo $promenade->getDate();?></p>
<p>Pays : <?php echo $promenade->getPays();?></p>
<p>Ville : <?php echo $promenade->getVille();?></p>
<p>Case-postale : <?php echo $promenade->getCase_postale();?></p>
<p>Titre : <?php echo $promenade->getTitre();?></p>
<p>Image : <?php echo $promenade->getImage();?></p>
<p>Depart : <?php echo $promenade->getDepart();?></p>
<p>Arrivée : <?php echo $promenade->getArrivée();?></p>
<p>Description : <?php echo $promenade->getDescription();?></p>
</div>
  
</body>
</html>
