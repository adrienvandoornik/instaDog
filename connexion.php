<?php

include 'class_utilisateur.php';
/*include 'class_profil';
include 'class_chien';
include 'class_article';
include 'class_commentaire';
*/



class Connexion {
    private $connexion;


    public function __construct() {
        $PARAM_hote= 'localhost';
        $PARAM_port='3306';
        $PARAM_nom_bd='InstaDog';
        $PARAM_utilisateur='adminInstaDog';
        $PARAM_mot_passe='Inst@Dog';

        try{
            $this->connexion = new PDO(
                'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,
                $PARAM_utilisateur,
                $PARAM_mot_passe);

        }catch (Exception $e){
            echo 'Erreur : '.$e->getMessage().'<br>';
            echo 'N° :'.$e->getCode();
        }

    }

    public function getConnexion(){
        return $this->connexion;
    }
//////Function/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7


    public function insertUtilisateur($nom,$prenom,$dateConnexion, $email, $motDePasse, $login){

      $requete_prepare = $this->connexion->prepare("
      INSERT INTO Utilisateur (nom, prenom, dateConnexion,  email, motDePasse, login) values (:nom,:prenom,:dateConnexion,:email,:motDePasse, :login)");
      $requete_prepare->execute(
        array(
              'nom'=> $nom,
              'prenom'=> $prenom,
              'dateConnexion' => $dateConnexion,
              'email' => $email,
              'motDePasse' => $motDePasse,
              'login' => $login

            )
        );

    }

///////////Get Utilisateur/////////////////////////////////////////////////////////////////////////////////////////////////////////

public function getUtilisateur($id){
  $requete_prepare = $this->connexion->prepare(
    "SELECT *
    FROM Utilisateur
    WHERE id = :id"
  );
  $requete_prepare->execute(array("id"=>$id));

  $utilisateur = $requete_prepare->fetchObject("Utilisateur");

  return $utilisateur;
}




///Get Chien////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function getChienDuUtilisateur($utilisateurId){
  $requete_prepare =$connexion->prepare(
    "SELECT * FROM Chien WHERE utilisateurId = :id");

    $requete_prepare->execute(array("id"=>$utilisateurId));

    $listeChien = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Chien');

    return $listeChien;
}


///Get Article/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function getArticliDuChien($chienId){
  $requete_prepare =$connexion->prepare(
    "SELECT * FROM Article WHERE chienId = :id");

    $requete_prepare->execute(array("id"=>$chienId));

    $listeArticle = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Article');

    return   $listeArticle;
}













}// Fin de la class Connexion

?>
