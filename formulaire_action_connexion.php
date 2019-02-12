<?php
require 'connexion.php';
$appliBD = new Connexion();

//Recuperer et tester Mot de Passe//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$email = $_POST['email'];
$motDePasse = $_POST['motDePasse'];

$hash = $appliBD->getUtilisateurEmail($email)->getMotDePasse();
$email = $appliBD->getUtilisateurEmail($email)->getEmail();
$id_utilisateur = $appliBD->getUtilisateurEmail($email)->getId();

// on teste le mot de passe hasché
if(password_verify($motDePasse, $hash)) {
    
    // on teste si nos variables sont définies
    if (isset($_POST['email']) && isset($_POST['motDePasse'])) {
    
        // on vérifie les informations du formulaire
        if ($email == $_POST['email'] && $motDePasse == $_POST['motDePasse']) {
    
            // démarre la session
            session_start ();
            // on enregistre les paramètres de notre visiteur comme variables de session 
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['motDePasse'] = $_POST['motDePasse'];
    
            // redirige sur la page profil user
            header('Location: profil_user.php?id='.$id_utilisateur);

        }
        else {
            // Le visiteur n'a pas été reconnu comme étant membre de notre site.
            echo '<body onLoad="alert(\'Membre non reconnu...\')">';
            // puis on le redirige vers la page d'accueil
            echo '<meta http-equiv="refresh" content="0;URL=se_connecter.php">';
        }
    }
    else {
        echo 'Les variables du formulaire ne sont pas déclarées.';
    }
        
} else {
    header('Location: se_connecter.php');
}

 ?>