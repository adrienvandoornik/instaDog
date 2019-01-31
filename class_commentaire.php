<?php

// inclure la page
require_once "class_article.php";

// Class Objet Commentaire
class Commentaire extends Article
{
    // Déclaration des attributs et méthodes ici.

    // attributs privés
    private $id;
    private $texte;
    private $date;
    private $login;

    // Liste des getters
    public function getId()
    {
        return $this->id;
    }

    public function getTexte()
    {
        return $this->texte;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getLogin()
    {
        return $this->login;
    }

    // Renvoyer le contenu de l'attribut 
    public function getIdUtilisateur(){
        return $this->idUtilisateur;
        echo "getIdUtilisateur";
    }
}

// création d'un objet Commentaire
$commentaire = new Commentaire;

// Invocation des functions
$commentaire->getId();
$commentaire->getTexte();
$commentaire->getDate();
$commentaire->getLogin();

$commentaire->getIdUtilisateur();

?>