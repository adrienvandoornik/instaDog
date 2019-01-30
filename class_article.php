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

    public function getArticle(){return $this->article;}
    public function insertArticle(){return $this->article;}
}

?>