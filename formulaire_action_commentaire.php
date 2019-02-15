<?php
session_start();
/////// FORMULAIRE AJOUTER UN COMMENTAIRE/////////////////////////////////////////////////////////////////////////////////////

 require_once("connexion.php");
// connexion à la base de donnée
$appliBD = new Connexion();

// Les variables qui récupèrent les valeurs du formulaire Poster
$texte = $_POST['texte'];
$dateCommentaire = date("Y-m-d H:i:s");
$utilisateurId =$_SESSION['id'];
$articleId = $_POST['postId'];


// j'appelle la base de donnée et les functions pour insérer les données du nouveau commentaire
$commentaireId = $appliBD->insertCommentaire($texte, $dateCommentaire, $utilisateurId, $articleId);

//var_dump($articleId);

// je redirige sur la page du nouveau profil
header("Location: article.php?id=$articleId");

?>
