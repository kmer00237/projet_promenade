<?php
    class Promenades{
        //Attributs specifiques à la promenade
        private $id;
        private $auteur;
        private $date;
        private $pays;
        private $ville;
        private $case_postale; 
        private $titre;
        private $image;
        private $depart;
        private $arrivee;
        private $description;
        
        // Constructeur par defaut
        //Fonctions
        public function _set($id, $value){}
        public function getId(){
        return $this->id;
        }
        public function getAuteur(){
            return $this->auteur;
        }
        public function getDate(){
            return $this->date;
        }
        public function getPays(){
            return $this->pays;
        }
        public function getVille(){
            return $this->ville;
        }
        public function getCase_postale(){
            return $this->case_postale;
        }
        public function getTitre(){
            return $this->titre;
        }
        public function getImage(){
            return $this->image;
        }
        public function getDepart(){
            return $this->depart;
        }
        public function getArrivee(){
            return $this->arrivee;
        }
        public function getDescription(){
            return $this->description;
        }
    }
?>