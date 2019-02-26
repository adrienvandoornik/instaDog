<?php
/////// FORMULAIRE INSCRIPTION INSTADOG/////////////////////////////////////////////////////////////////////////////////////

 require_once("connexion.php");
// connexion à la base de donnée
$appliBD = new Connexion();

// Les variables qui récupèrent les valeurs du formulaire Poster
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateConnexion = date("Y-m-d H:i:s");
$email = $_POST["email"];
$motDePasse = $_POST["motDePasse"];
$hash = password_hash($motDePasse, PASSWORD_BCRYPT);
$login = $_POST["login"];

// j'appelle la base de donnée et les functions pour insérer les données du nouvelle utilisateur
$id_utilisateur = $appliBD->insertUtilisateur($nom, $prenom, $dateConnexion, $email, $hash, $login);

$hashrecup = $appliBD->getUtilisateurEmail($email)->getMotDePasse();
$email = $appliBD->getUtilisateurEmail($email)->getEmail();
$id_utilisateur = $appliBD->getUtilisateurEmail($email)->getId();

// on teste le mot de passe hasché
if(password_verify($motDePasse, $hashrecup)) {
    
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
            header('Location: inscription.php');
        }
    }
    else {
        header('Location: inscription.php');
    }
        
} else {
    header('Location: inscription.php');
}


?>
