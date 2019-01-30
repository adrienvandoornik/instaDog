<?php
require_once "class_article.php";

// class Objet Chien
class Chien extends Article
{
    private $idChien;
    private $surnomChien;
    private $nomElevageChien;
    private $ageChien;
    private $sexeChien;
    private $raceChien;
    private $listeArticleChien;

    // Récupérer Article
    public function getArticle(){
        return $this->article;
        echo "getArticle";
    }

    // Insérer Article
    public function insertArticle($idArticle){
        return $this->article;
        echo "insertArticle";
    }
}

?>