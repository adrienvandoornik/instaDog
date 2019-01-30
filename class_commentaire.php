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

    // Récupérer IdUtilisateur
    public function getIdUtilisateur(){
        return $this->idUtilisateur;
        echo "getIdUtilisateur";
    }
}

?>