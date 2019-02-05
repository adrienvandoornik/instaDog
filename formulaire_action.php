<?php
 ///// FORMULAIRE INSCRIPTION INSTADOG/////////////////////////////////////////////////////////////////////////////////////////
require_once("connexion.php");
// connexion à la base de donnée
$appliDB = new Connexion();

// Les variables qui récupèrent les valeurs du formulaire Poster
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST["email"];
$password = $_POST["password"];
$pseudo = $_POST["pseudo"];

// j'appelle la base de donnée et les functions pour insérer les données du nouvelle utilisateur
$appliBD->insertUtilisateur($_POST["prenom"], $_POST["nom"], $_POST["email"], $_POST["password"], $_POST["pseudo"]);

// je redirige sur la page du nouveau profil
header("Location: profil_user.php?id='.$id");// rajouter id

?> 