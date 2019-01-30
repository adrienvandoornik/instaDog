<?php

require 'connexion.php';
$appliBD = new Connexion();

class Profil {
    private $nom;
    private $prenom;
    private $listeChien;



    public function __set($name, $value){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->listeChien =$listeChien;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
        
    }

    public function getPrenom($prenom){
        return $this->prenom;
    }


    public function setPrenom($prenom){
        $this->prenom = $prenom;
       
    }

    public function getListeChien(){
        return $this->listeChien;
    }


    function insertChien($chien){
              
            $requete_prepare=$this->connexion->prepare(
                "INSERT INTO Chien (surnom, nomElevage, age, sexe, race, listeArticle) 
                    
                ) values (:musique)");

            $requete_prepare->execute(
                array('musique' => $musique));
         
            return $musique;
    }

}



?>