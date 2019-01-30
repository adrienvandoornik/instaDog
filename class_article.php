<?php

class Article
{
    private $idArticle;
    private $imageArticle;
    private $texteArticle;
    private $listeCommentaireArticle;
    private $datePublicationArticle;
    private $raceChien;
    private $listeArticleChien;

    public function insertCommentaire(){return $this->commentaire;}
    public function getCommentaire(){return $this->commentaire;}
}

?>