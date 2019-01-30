<?php
require_once "class_commentaire.php";

// class Objet Article
class Article extends Commentaire
{
    private $idArticle;
    private $imageArticle;
    private $texteArticle;
    private $listeCommentaireArticle;
    private $datePublicationArticle;

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

    // récupérer commentaire
    public function getCommentaire(){
        return $this->commentaire;
        echo "getCommentaire";
    }
}

?>