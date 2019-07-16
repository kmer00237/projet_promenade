<?php

    // import du fichier database
    require_once("database.php");

    //Instanciation de la class Database
    $database = new Database();
    
    //Recuperation de la liste des maitres
    $nomMaitres = $database->getAllMaster();    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire promenade</title>
</head>

<body>
   //$id ,$nomAuteur, $datePromenade, $paysPromenade, $villePromenade,
     $case_postalePromenade, $titrePromenade,$imagePromenade, $departPromenade, $arrivéePromenade, $descriptionPromenade

    <h1>Ajout d'une nouvelle promenade</h1>

        <form action="process-create.php" method="POST">

            <label for="idPromenade">Id</label>
            <input type="number" id="idPromenade" name="id">


            <label for="nomAuteur">Auteur</label>
            <input type="text" id="nomAuteur" name="auteur">

            <label for="datePromenade">Date</label>
            <input type="number" id="datePromenade" name="date">

            <label for="paysPromenade">Pays</label>
            <input type="text" id="paysPromenade" name="pays">

            <label for="villePromenade">Ville</label>
            <input type="departPromenade" name="ville">

            <label for="case_postalePromenade">case_postale</label>
            <input type="departPromenade" name="case_postale">

            <label for="titrePromenade">Titre</label>
            <input type="titrePromenade" name="titre">



            


                  <?php
                foreach($nomMaitres as $maitre){
                    echo "<option value=" .$maitre->getId().">" .$maitre->getNom()."</options>";
                }
                ?>
            <select>

            <input type="submit">
        </form>
