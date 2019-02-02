<?php

include 'class_utilisateur.php';
include 'class_profil.php';
/*include 'class_chien.php';
include 'class_article.php';
include 'class_commentaire.php';
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

  $utilisateur = $requete_prepare->fetchObject("Profil");

  return $utilisateur;
}




///Get Chien////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function getListeChien($utilisateurId){
  $requete_prepare =$connexion->prepare(
    "SELECT * FROM Chien WHERE utilisateurId = :id");

    $requete_prepare->execute(array("id"=>$utilisateurId));

    $listeChien = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Chien');

    return $listeChien;
}


///Get Article/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function getListeArticleChien($chienId){
  $requete_prepare =$connexion->prepare(
    "SELECT * FROM Article WHERE chienId = :id");

    $requete_prepare->execute(array("id"=>$chienId));

    $listeArticle = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Article');

    return   $listeArticle;
}


////Insert Chien///////////////////////////////////////////////////////////////////////////////////////////////////////////////////77

  /*  public function insertChien($surnom, $nomElevage, $age, $sexe, $race, $utilisateurId){

      $requete_prepare = $this->connexion->prepare("
      INSERT INTO Chien (surnom, nomElevage, age,  sexe, race, utilisateurId) values (:surnom, :nomElevage,:age,:sexe,:race, :utilisateurId)");
      $requete_prepare->execute(
        array(
              'surnom'=> $surnom,
              'nomElevage'=> $nomElevage,
              'age' => $age,
              'sexe' => $sexe,
              'race' => $race,
              'utilisateurId' => $utilisateurId

            )
        );

    }*/


///Insert Article///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  /*  public function insertArticle($image, $texte, $datePublication, $chienId){

      $requete_prepare = $this->connexion->prepare("
      INSERT INTO Article (image, texte, datePublication, chienId) values (:image, :texte, :datePublication, :chienId)");
      $requete_prepare->execute(
        array(
              'image'=> $image,
              'texte'=> $texte,
              'datePublication' => $datePublication,
              'sexe' => $sexe,
              'chienId' => $chienId


            )
        );
         $idArticle = $this->article->lastInsertId();
         return $idArticle;

    }

///Insert Commentaire/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        public function insertCommentaire($texte, $dateCommentaire, $utilisateurId, $articleId){

          $requete_prepare = $this->connexion->prepare("
          INSERT INTO Article (texte, dateCommentaire, utilisateurId, articleId) values (:texte, :dateCommentaire, :utilisateurId, :articleId)");
          $requete_prepare->execute(
            array(
                  'texte'=> $texte,
                  'dateCommentaire'=> $dateCommentaire,
                  'utilisateurId' => $utilisateurId,
                  'articleId' => $articleId



                )
            );
             $idCommentaire = $this->article->lastInsertId();
             return $idCommentaire;

        }*/









}// Fin de la class Connexion

?>
