<?php

    // import du fichier database
    require_once("database.php");

    //Instanciation de la class Database
    $database = new Database();
    
    //Recuperation de la liste des promenade
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
   
    <h1>Ajout d'une nouvelle promenade</h1>

        <form action="process-create.php" method="POST">
            <label for="nomAuteur">Auteur</label>
            <input type="text" id="nomAuteur" name="nom">

            <label for="datePromenade">Date</label>
            <input type="number" id="datePromenade" name="age">
            <label for="raceChien">Pays</label>
            <input type="text" id="raceChien" name="race">
            <label for="choixMaitre">Ville</label>
            <select id="choixMaitre" name="idMaitre">
            <label for="choixMaitre">Case-postale</label>
            <select id="choixMaitre" name="idMaitre">


                  <?php
                foreach($nomMaitres as $maitre){
                    echo "<option value=" .$maitre->getId().">" .$maitre->getNom()."</options>";
                }
                ?>
            <select>

            <input type="submit">
        </form>



  


</body>

</html>
