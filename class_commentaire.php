<?php
require_once "class_article.php";

class Commentaire extends Article
{
    private $idCommentaire;
    private $texteCommentaire;
    private $dateCommentaire;
    private $loginCommentaire;

    public function getIdUtilisateur(){
        return $this->idUtilisateur;
        echo "getIdUtilisateur";
    }
}

?>