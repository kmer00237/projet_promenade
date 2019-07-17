<?php

$auteurPromenade = $_POST["auteur"];
$datePromenade = $_POST_["date"];
$paysPromenade = $_POST["pays"];
$villePromenade = $_POST["ville"];
$case_postalePromenade= $_POST["case_postale"];
$titrePromenade = $_POST["titre"];
$imagetPromenade = $_POST["image"];
$departPromenade = $_POST["depart"];
$arriveePromenade = $_POST["arrivee"];
$descriptionPromenade = $_POST["description"];


// Importer et mettre une valeur (instancier) une database
require_once("database.php");
$database = new DataBase();

$nouvelId = $database->insertRandonnee($auteurPromenade, 
$datePromenade, $paysPromenade, $villePromenade, 
$case_postalePromenade, $titrePromenade, $imagetPromenade, 
$departPromenade, $arriveePromenade, $descriptionPromenade);

header('Location: index.php');
?> 