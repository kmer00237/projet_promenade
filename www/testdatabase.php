<?php
require_once("database.php");

$database = new Database();

if($database->getConnexion()== null){
    echo "Connexion ratée";
}else{
    echo "Connexion réussie";
}
?>