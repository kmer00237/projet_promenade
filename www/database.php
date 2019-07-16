<?php
require_once('classPromenade.php');

class Database{
    private $connexion;

    //Le constructeur
    public function __construct(){
        $PARAM_hote="mariadb";                  //Le chemin vers le serveur
        $PARAM_port="3306";                     //Le port de connexion à la base de données
        $PARAM_nom_bd="Promensuisse";         //Le nom de ma base de données
        $PARAM_utilisateur="root";            //Nom d'utilisateur pour se connecter
        $PARAM_mot_passe="digital2019";      //Mot de passe de l'utilisateur pour se connecter

      
        try{        //Le code qu'on essaye de faire
            $this->connexion = new PDO("mysql:dbname=" .$PARAM_nom_bd.";host=".$PARAM_hote,
                                $PARAM_utilisateur, 
                                $PARAM_mot_passe);
        }catch (Exception $monException){
            echo "Erreur : ".$monException->getMessage()."<br/>"; 
            echo "Code : ".$monException->getCode();
        }
    }

    //Les fonctions (Le comportement)
    public function getConnexion(){
        return $this->connexion;
    }

    //Fonction pour insérer une promenade
    public function insertRandonnee($nomAuteur, $datePromenade, $paysPromenade, $villePromenade,
     $case_postalePromenade, $titrePromenade,$imagePromenade, $departPromenade, $arrivéePromenade, $descriptionPromenade)
            
    {

        //Je prépare la requête
        $pdoStatement = $this->connexion->prepare(
            "INSERT INTO Promenades (auteur, date, pays, ville, case_postale, titre, image, depart, arrivée, description) VALUES (:paramAuteur, :paramDate, :paramPays, :paramCase_postale, :paramTitre, :paramImage, :paramDepart, :paramArrivee, :paramDescription)");
           
        //J'exécute la requête
        //En lui passant les valeurs en paramètres
        $pdoStatement->execute(array(
            "paramAuteur"=>$nomAuteur,
            "paramDate"=>$datePromenade,
            "paramPays"=>$paysPromenade,
            "paramVille"=>$villePromenade,
            "paramCase_postale"=>$case_postalePromenade,
            "paramTitre"=>$titrePromenade,
            "paramDepart"=>$departPromenade,
            "paramArrivée"=>$arrivéePromenade,
            "paramDescription"=>$descriptionPromenade
        ));           
        //Je récupère l'id qui a été crée par la base de données
        $id = $this->connexion->lastInsertId();
        return $id;
    }//Fin fonction insertRandonnee

    //Fonction pour lister toutes les promenades
    public function getAllPromenade(){
        // On prépare la requete
        $pdoStatement = $this->connexion->prepare(
            "SELECT image, titre, auteur, pays, ville FROM Promenades"
        );
        
        // On exécute la requete
        $pdoStatement->execute();

        // On stocke en php le résultat de la requete
        $Promenade = $pdoStatement->fetchAll(PDO::FETCH_CLASS, "Promenades");

        // Je retourne la liste des promenades
        return $Promenade;
    }   //Fin fonction pour lister toutes les promenades

        //Fonction qui recupre une promenade en fonction de son id
    
     public function getPromenadeById($id){
-
        // Je prépare ma requête
        $pdoStatement = $this->connexion->prepare(
            "SELECT  id, auteur, date, pays, ville, case_postale, titre, image, depart, 'arrivée', description
            FROM Promenades            
            WHERE id = :id"
        );

        // J'exécute ma requête
        $pdoStatement->execute([
            "id" => $id
        ]);

        var_dump($pdoStatement->errorInfo());
         // Je recupere et je stocke le resultat
         $idPromenade = $pdoStatement->fetchObject("Promenades");
           //var_dump($idPromenade);
         return $idPromenade;              
    
    }//Fin fonction pour lister toutes les promenades   
    }


?>
