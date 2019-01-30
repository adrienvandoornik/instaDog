<?php

// inclure la page
require_once "class_article.php";

// class Objet Chien
class Chien extends Article
{
    // Déclaration des attributs et méthodes ici.

    // attributs privés
    private $idChien;
    private $surnomChien;
    private $nomElevageChien;
    private $ageChien;
    private $sexeChien;
    private $raceChien;
    private $listeArticleChien;

    // Renvoyer le contenu de l'attribut 
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

// création d'un objet Chien
$chien = new Chien;

// Invocation des functions
$chien->getArticle();
$chien->insertArticle();

?>