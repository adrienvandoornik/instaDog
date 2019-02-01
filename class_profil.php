<?php
require_once "class_utilisateur.php";



class Profil extends Utilisateur{
    private $nom;
    private $prenom;
    private $listeChien;


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

////Insert Chien///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function insertChien($chien){

            $requete_prepare=$this->connexion->prepare(
                "INSERT INTO Chien (surnom, nomElevage, age, sexe, race, listeArticle)

              ) values (:surnom, :nomElevage, :age, :sexe, :race, :listeChien)");


        $requete_prepare->execute(
            array(
                'surnom' => $surnom,
                'nomElevage' => $nomElevage,
                'age' => $age,
                'sexe' => $sexe,
                'listeChien' => $listeChien
            )
        );

            return $chien
    }





}



?>
