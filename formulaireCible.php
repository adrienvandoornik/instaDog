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

//Insert Chien//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
$surnom = $_POST['surnom'];
$nomElevage = $_POST['nomElevage'];
$age = $_POST['age'];
$sexe = $_POST['sexe'];
$race = $_POST['race'];
$file = $_File['image'];//IL FAUT ENCORE TOUTES LES FONCTIONS, PAS SUR!!!!!!////////
$utilisateurId = $_GET['id']//PAS ENCORE SUR!!!!!!!!!!!!!!!!!////////////////////////////


$appliBD->insertChien($surnom,$nomElevage, $age, $sexe, $race, $file, $utilisateurId);



$email = $_POST['email'];

$motDePasse = $_POST['motDePasse'];

$hash = $appliBD->getUtilisateurEmail($email)->getMotDePasse();

$email = $appliBD->getUtilisateurEmail($email)->getEmail();

$idProfilHash = $appliBD->getUtilisateurEmail($email)->getId();

if(password_verify($motDePasse, $hash)) {
    header('Location: profil_user.php?id='.$idProfilHash);
} else {
      header('Location: se_connecter.php');
}

*/






?>
