<?php
// class Objet Chien
class Chien
{
    // Déclaration des attributs et méthodes ici.

    // Attributs privés
    protected $id;
    private $surnom;
    private $nomElevage;
    private $dateAge;
    private $sexe;
    private $race;
    private $listeArticle;
    private $image;

    public function __set($name, $value){}

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
        return $this->dateAge;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function getlisteArticle()
    {
        return $this->listeArticle;
    }

    public function getImage(){
      return $this->image;
    }
}
?>