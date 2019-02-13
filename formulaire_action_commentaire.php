<?php
session_start();
/////// FORMULAIRE AJOUTER UN COMMENTAIRE/////////////////////////////////////////////////////////////////////////////////////

 require_once("connexion.php");
// connexion à la base de donnée
$appliBD = new Connexion();

// Les variables qui récupèrent les valeurs du formulaire Poster
$texte = $_POST['texte'];
$dateCommentaire = date("Y-m-d H:i:s");
$utilisateurId =$_SESSION('id');
$articleId = "";
// j'appelle la base de donnée et les functions pour insérer les données du nouveau commentaire
$appliBD->insertCommentaire($texte, $dateCommentaire, $utilisateurId, $articleId);

// je redirige sur la page du nouveau profil
header("Location: article.php?id='.$utilisateurId");

?>
