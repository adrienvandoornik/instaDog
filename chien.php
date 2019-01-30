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

    // Liste des getters
    public function getIdChien()
    {
         return $this->idChien;
    }

    public function getSurnomChien()
    {
         return $this->surnomChien;
    }

    public function getNomElevageChien()
    {
        return $this->nomElevageChienn;
    }

    public function getAgeChien()
    {
        return $this->ageChien;
    }

    public function getSexeChien()
    {
        return $this->sexeChien;
    }

    public function getRaceChien()
    {
        return $this->raceChien;
    }

    public function getListeArticleChien()
    {
        return $this->listeArticleChien;
    }

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
$chien->getIdChien();
$chien->getSurnomChien();
$chien->getNomElevageChien();
$chien->getAgeChien();
$chien->getSexeChien();
$chien->getRaceChien();
$chien->getListeArticleChien();

$chien->getArticle();
$chien->insertArticle();

?>