<?php
// Import de la database
require_once("database.php");

//Création de la connexion
$database = new Database();



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



if (isset($_POST["submit"])){                         //création de paramettre de vérification
    $file = $_FILES["files"];                         //fichier de variable superglobal avec le name de l'input image 
    //print_r($file);
    $fileName = $_FILES["files"]["name"];              //instentie le fichier nom superglobal
    $fileTmpName = $_FILES["files"]["tmp_name"];
    $fileSize = $_FILES["files"]["size"];
    $fileError = $_FILES["files"]["error"];
    $fileType = $_FILES["files"]["type"];

    $fileExt = explode(".", $fileName);               //expolse l'URL par le .jpg
    $fileActualExt = strtolower(end($fileExt));         //met l'extention jpg en minuscule pour eviter la casse
    
    $allowed = array("jpg", "jpeg", "png"); 

    $fileDestination = "";
    //fichier autorisé
    //si l'extention est vraie
    if(in_array($fileActualExt, $allowed)){
         //si il n'y a pas d'erreur            
        if($fileError === 0){     
             //si la taille est de la bonne taille                    
            if($fileSize < 5000000){                   
                //créer un nom unique
                $fileNameNew = uniqid("", true).".".$fileActualExt; 
                //l'image renommée dansdossier de destination
                $fileDestination = "uploads/".$fileNameNew; 
                //prendre dans le fichier temporaire et le pousser dans la destination 
                move_uploaded_file($fileTmpName, $fileDestination); 
                 //inscrit dans l'url uploadsuccess si le téléchargement à réussi 
                //header("Location: indexFiles.php?uploadsuccess");

            //si c'est + que la taille souhaitée
            } else {echo "votre image est trop lourde";} 
         //si l'image n'a pas pu être téléchargée
        } else {echo "erreur de téléchargement";} 
    //si l'extention est fausse       
    } else{echo "vous ne pouvez pas télécharger ce format";} 
}//fin de la première condition


$nouvelId = $database->updatePromenade($auteurPromenade, $datePromenade, $paysPromenade, $villePromenade, $case_postalePromenade, $titrePromenade, $imagePromenade, $departPromenade, $arriveePromenade, $descriptionPromenade);
var_dump($nouvelId);
header("Location: afficherPromenade.php?id=" .nouvelId);
?>