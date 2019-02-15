<?php
session_start();
/////// FORMULAIRE AJOUTER UN COMMENTAIRE/////////////////////////////////////////////////////////////////////////////////////

 require_once("connexion.php");
// connexion à la base de donnée
$appliBD = new Connexion();

// Les variables qui récupèrent les valeurs du formulaire Poster

if(isset($_GET['postId'])) {

$articleId = $_GET['postId'];
$texte = $_GET['texte'];
$dateCommentaire = date("Y-m-d H:i:s");
$utilisateurId =$_SESSION['id'];
$commentaireId = $appliBD->insertCommentaire($texte, $dateCommentaire, $utilisateurId, $articleId);

}



// j'appelle la base de donnée et les functions pour insérer les données du nouveau commentaire


//var_dump($articleId);

// je redirige sur la page du nouveau profil
header("Location: article.php?id=$articleId");

?>
