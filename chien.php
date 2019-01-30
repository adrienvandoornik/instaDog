<?php
require_once "utilisateur.php";

class Chien extends Utilisateur
{
    private $idChien;
    private $surnomChien;
    private $nomElevageChien;
    private $ageChien;
    private $sexeChien;
    private $raceChien;
    private $listeArticleChien;

    public function getArticle(){
        return $this->article;
        echo "getArticle";
    }
    public function insertArticle($idArticle){
        return $this->article;
        echo "insertArticle";
    }
}

?>