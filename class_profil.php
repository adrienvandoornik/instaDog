<?php
require_once "class_utilisateur.php";

class Profil extends Utilisateur{
    protected $nom;
    protected $prenom;
    protected $listeChien;

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getListeChien(){
        return $this->listeChien;
    }
}
?>