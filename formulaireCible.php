<?php

require 'connexion.php';
$appliBD = new Connexion();

//Insert Utilisateur////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Les variables qui récupèrent les valeurs du formulaire Poster
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateConnexion = date("Y-m-d");
$email = $_POST["email"];
$motDePasse = $_POST["motDePasse"];
$hash = password_hash($motDePasse, PASSWORD_BCRYPT);
$login = $_POST["login"];

// j'appelle la base de donnée et les functions pour insérer les données du nouvelle utilisateur
$id_utilisateur = $appliBD->insertUtilisateur($nom, $prenom, $dateConnexion, $email, $hash, $login);

// je redirige sur la page du nouveau profil
header("Location: profil_user.php?id=$id_utilisateur");





?>
