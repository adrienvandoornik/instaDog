<?php

include 'class_utilisateur.php';
include 'class_profil.php';
include 'class_chien.php';
include 'class_article.php';
include 'class_commentaire.php';

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
  $requete_prepare =$this->connexion->prepare(
    "SELECT * FROM Chien WHERE utilisateurId = :id");

    $requete_prepare->execute(array("id"=>$utilisateurId));

    $listeChien = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Chien');

    return $listeChien;
}

///Get Article/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function getListeArticle($chienId){
  $requete_prepare =$this->connexion->prepare(
    "SELECT * FROM Article WHERE chienId = :id");

    $requete_prepare->execute(array("id"=>$chienId));

    $listeArticle = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Article');

    return   $listeArticle;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function getListeCommentaire($articleId){
  $requete_prepare =$this->connexion->prepare(
    "SELECT * FROM Commentaire WHERE articleId = :id");

    $requete_prepare->execute(array("id"=>$articleId));

    $listeCommentaire = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Commentaire');

    return $listeCommentaire;
}

///Function Insert Utilisateur/////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
        $id= $this->connexion->lastInsertId();
        return $id;
    }

////Insert Chien///////////////////////////////////////////////////////////////////////////////////////////////////////////////////77

    public function insertChien($surnom, $nomElevage, $age, $sexe, $race, $image, $utilisateurId){

      $requete_prepare = $this->connexion->prepare("
       INSERT INTO Chien (surnom, nomElevage, dateAge,  sexe, race, image, utilisateurId) values (:surnom, :nomElevage,:dateAge,:sexe,:race, :image, :utilisateurId)");
      $requete_prepare->execute(
        array(
              'surnom'=> $surnom,
              'nomElevage'=> $nomElevage,
              'dateAge' => $age,
              'sexe' => $sexe,
              'race' => $race,
              'image'=> $image,
              'utilisateurId' => $utilisateurId
            )
        );
        $idChien = $this->connexion->lastInsertId();
        return $idChien;
    }

///Insert Article///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function insertArticle($image, $texte, $datePublication, $chienId){

      $requete_prepare = $this->connexion->prepare("
      INSERT INTO Article (image, texte, datePublication, chienId) values (:image, :texte, :datePublication, :chienId)");
      $requete_prepare->execute(
        array(
              'image'=> $image,
              'texte'=> $texte,
              'datePublication' => $datePublication,
              'chienId' => $chienId
            )
        );
        $idArticle = $this->connexion->lastInsertId();
        return $idArticle;
    }

///Insert Commentaire/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        public function insertCommentaire($texte, $dateCommentaire, $utilisateurId, $articleId){

          $requete_prepare = $this->connexion->prepare("
          INSERT INTO Commentaire (texte, dateCommentaire, utilisateurId, articleId) values (:texte, :dateCommentaire, :utilisateurId, :articleId)");
          $requete_prepare->execute(
            array(
                  'texte'=> $texte,
                  'dateCommentaire'=> $dateCommentaire,
                  'utilisateurId' => $utilisateurId,
                  'articleId' => $articleId
                )
            );
             $idCommentaire = $this->connexion->lastInsertId();
             return $idCommentaire;
        }

///Get chienById///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function getChienById($id){
  $requete_prepare = $this->connexion->prepare(
    "SELECT *
    FROM Chien
    WHERE id = :id"
  );
  $requete_prepare->execute(array("id"=>$id));

  $chien = $requete_prepare->fetchObject("Chien");

  return $chien;
}

///Get Article by id/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7

public function getArticleById($id){
 $requete_prepare = $this->connexion->prepare(
  "SELECT *
   FROM Article
   WHERE id = :id"
  );
  $requete_prepare->execute(array("id"=>$id));

  $article = $requete_prepare->fetchObject("Article");

  return $article;
}

///Get Commentaire///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function getCommentaire($id){
  $requete_prepare = $this->connexion->prepare(
    "SELECT *
    FROM Commentaire
    WHERE id = :id"
  );
  $requete_prepare->execute(array("id"=>$id));

  $commentaire = $requete_prepare->fetchObject("Commentaire");

  return $commentaire;
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7

public function rechercheByRace($pattern) {
  $requete_prepare=$this->connexion->prepare(
    "SELECT * FROM Chien WHERE race LIKE :race");

    $requete_prepare->execute(array("race"=>"%$pattern%"));

    $resultat=$requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Chien');
    return $resultat;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function getAllChien(){
  $requete_prepare =$this->connexion->prepare(
    "SELECT * FROM Chien");

    $requete_prepare->execute();

    $allChien = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Chien');
    return $allChien;
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7

public function getUtilisateurEmail($email){
   $requete_prepare = $this->connexion->prepare(
   "SELECT *
    FROM Utilisateur where email = :email");
     $requete_prepare->execute(array("email"=>$email));

     $resultat = $requete_prepare->fetchObject("Utilisateur");
     return $resultat;

}

}// Fin de la class Connexion

?>
