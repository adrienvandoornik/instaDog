<?php
require 'connexion.php';
$appliBD = new Connexion();

//Recuperer et tester Mot de Passe//////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

 ?>
