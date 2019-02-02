<?php

// inclure la page
require_once "class_commentaire.php";

// class Objet Article
class Article extends Commentaire
{
    // Déclaration des attributs et méthodes ici

    // attributs privés
    protected $id;
    protected $image;
    protected $texte;
    protected $listeCommentaire;
    protected $datePublication;

     // Liste des getters
     public function getId()
     {
         return $this->id;
     }

     public function getImage()
     {
         return $this->image;
     }

     public function getTexte()
     {
         return $this->texte;
     }

     public function getlisteCommentaire()
     {
         return $this->$listeCommentaire;
     }

     public function getDatePublication()
     {
         return $this->datePublication;
     }

     // insérer un commentaire
    function insertArticle($image, $texte, $datePublication, $chienId)
    {
         try {
             // préparation de la requête SQL
             $requete_prepare = $this->article->prepare(
                 "INSERT INTO Commentaire (image, texte, datePublication, chienId)
                            values (:image, :texte, :datePublication, :chienId)"
             );
             // Exécution de la requête SQL
             $requete_prepare->execute(
                 array('image' => $image, 'texte' => $texte, 'datePublication' => $datePublication, 'chienId' => $idChien)
             );
             // Retourne le résultat
             return $this->article->lastInsertId(); // je retourne le dernière Id insérer
         } catch (Exception $e) {
             return 0;
         }
     }

    // Renvoyer le contenu de l'attribut
    public function getCommentaire(){
        return $this->commentaire;
        echo "getCommentaire";
    }
}

// création d'un objet Article
$article = new Article;

// Invocation des functions
$article->getId();
$article->getImage();
$article->getTexte();
$article->getListeCommentaire();
$article->getDatePublication();

$article->getCommentaire();
$article->insertCommentaire();

?>
