<?php

// inclure la page
require_once "class_article.php";

// Class Objet Commentaire
class Commentaire extends Article
{
    // Déclaration des attributs et méthodes ici.

    // attributs privés
    private $idCommentaire;
    private $texteCommentaire;
    private $dateCommentaire;
    private $loginCommentaire;

    // Liste des getters
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    public function getTexteCommentaire()
    {
        return $this->texteCommentaire;
    }

    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    public function getLoginCommentaire()
    {
        return $this->loginCommentaire;
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
$commentaire->getIdCommentaire();
$commentaire->getTexteCommentaire();
$commentaire->getDateCommentaire();
$commentaire->getLoginCommentaire();

$commentaire->getIdUtilisateur();

?>