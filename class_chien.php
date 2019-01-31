<?php

// inclure la page
require_once "class_article.php";

// class Objet Chien
class Chien extends Article
{
    // Déclaration des attributs et méthodes ici.

    // Attributs privés
    private $id;
    private $surnom;
    private $nomElevage;
    private $age;
    private $sexe;
    private $race;
    private $listeArticle;

    // Liste des getters
    public function getId()
    {
         return $this->id;
    }

    public function getSurnom()
    {
         return $this->surnom;
    }

    public function getNomElevage()
    {
        return $this->nomElevage;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function getListeArticle()
    {
        return $this->listeArticle;
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

// Création d'un objet Chien
$chien = new Chien;

// Invocation des functions
$chien->getId();
$chien->getSurnom();
$chien->getNomElevage();
$chien->getAge();
$chien->getSexe();
$chien->getRace();
$chien->getListeArticle();

$chien->getArticle();
$chien->insertArticle();

?>