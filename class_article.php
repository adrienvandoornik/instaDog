<?php

// inclure la page
require_once "class_commentaire.php";

// class Objet Article
class Article extends Commentaire
{
    // Déclaration des attributs et méthodes ici

    // attributs privés
    private $idArticle;
    private $imageArticle;
    private $texteArticle;
    private $listeCommentaireArticle;
    private $datePublicationArticle;

     // Liste des getters
     public function getIdArticle()
     {
         return $this->idArticle;
     }

     public function getImageArticle()
     {
         return $this->imageArticle;
     }

     public function getTexteArticle()
     {
         return $this->texteArticle;
     }

     public function getListeCommentaireArticle()
     {
         return $this->listeCommentaireArticle;
     }

     public function getDatePublicationArticle()
     {
         return $this->datePublicationArticle;
     }

     // insérer un commentaire
    function insertCommentaire($imageArticle, $texteArticle, $datePublicationArticle, $idChien)
    {
         try {
             // préparation de la requête SQL
             $requete_prepare = $this->connexion->prepare(
                 "INSERT INTO Commentaire (image, texte, datePublication, chienId) 
                            values (:image, :texte, :datePublication, :chienId)"
             );
             // Exécution de la requête SQL
             $requete_prepare->execute(
                 array('image' => $imageArticle, 'texte' => $texteArticle, 'datePublication' => $datePublicationArticle, 'chienId' => $idChien)
             );
             // Retourne le résultat
             return $this->connexion->lastInsertId(); // je retourne le dernière Id insérer
         } catch (Exception $e) {
             return 0;
         }
     }

    // // Renvoyer le contenu de l'attribut 
    public function getCommentaire(){
        return $this->commentaire;
        echo "getCommentaire";
    }
}

// création d'un objet Article
$article = new Article;

// Invocation des functions
$article->getIdArticle();
$article->getImageArticle();
$article->getTexteArticle();
$article->getListeCommentaireArticle();
$article->getDatePublicationArticle();

$article->getCommentaire();
$article->insertCommentaire();

?>