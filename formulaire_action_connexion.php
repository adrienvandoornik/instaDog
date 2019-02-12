<?php
require 'connexion.php';
$appliBD = new Connexion();

//Recuperer et tester Mot de Passe//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$email = $_POST['email'];
$motDePasse = $_POST['motDePasse'];

$hash = $appliBD->getUtilisateurEmail($email)->getMotDePasse();
$email = $appliBD->getUtilisateurEmail($email)->getEmail();
$id_utilisateur = $appliBD->getUtilisateurEmail($email)->getId();

if(password_verify($motDePasse, $hash)) {

     // démarrer la session
     if($email == $_POST['email'] && $motDePasse == $_POST['motDePasse']){
        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['motDePasse'] = $_POST['motDePasse'];

        // redirige sur la page profil user
        header('Location: profil_user.php?id='.$id_utilisateur);

} else {
    header('Location: se_connecter.php');
}

 ?>