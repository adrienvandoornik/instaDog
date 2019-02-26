<?php
// class Objet Article
class Article
{
    // Déclaration des attributs et méthodes ici

    // attributs privés
    protected $id;
    protected $image;
    protected $texte;
    protected $listeCommentaire;
    protected $datePublication;

    public function __set($name, $value){}

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
         return $this->listeCommentaire;
     }

     public function getDatePublication()
     {
         return $this->datePublication;
     }
}
?>