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
        private $arrivée;
        private $description;
        
        // Constructeur par defaut

        public function _set($id, $value){}
        public function getId(){
        return $this->id;
        }
    }
?>