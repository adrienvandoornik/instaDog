<?php
// Class Objet Commentaire
class Commentaire
{
    // Déclaration des attributs et méthodes ici.

    // attributs privés
    private $id;
    private $texte;
    private $dateCommentaire;
    private $utilisateurId;
    private $articleId;

    public function __set($name, $value){}

    // Liste des getters
    public function getId()
    {
        return $this->id;
    }

    public function getTexte()
    {
        return $this->texte;
    }

    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    public function getUtilisateur()
    {
        return $this->utilisateurId;
    }

    public function getArticleId()
    {
        return $this->articleId;
    }
}
?>
