<?php
/////// FORMULAIRE AJOUTER UN CHIEN/////////////////////////////////////////////////////////////////////////////////////

 require_once("connexion.php");
// connexion à la base de donnée
$appliBD = new Connexion();

// Les variables qui récupèrent les valeurs du formulaire Poster
$surnom = $_POST['surnom'];
$nomElevage = $_POST['nomElevage'];
$age = $_POST['age'];
$sexe = $_POST['sexe'];
$race = $_POST['race'];
$image = $_File['image'];//IL FAUT ENCORE TOUTES LES FONCTIONS, PAS SUR!!!!!!////////
$utilisateurId = $_GET['id']//PAS ENCORE SUR!!!!!!!!!!!!!!!!!////////////////////////////

// On sauvegarde la photo sur le serveur dans le dossier img
// Chaque photo aura pour nom photo-DDMMYYYYHHmmss.jpeg par exemple ; 
//  on ajoute un timestamp au nom pour le rendre unique
$suffixe = date("YmdHis");
$uploadedFileName = $_FILES["photo-promenade"]["name"];
$uploadedFile = new SplFileInfo($uploadedFileName);
$fileExtension = $uploadedFile->getExtension(); // il faut encore fonction getExtension
$destinationFolder = $_SERVER['DOCUMENT_ROOT']."/projets/instaDog/";
$destinationName = "image/photo-".$suffixe.".".$fileExtension;

if(move_uploaded_file($_FILES["photo-promenade"]["tmp_name"], $destinationFolder.$destinationName)){
    echo "<br/> fichier enregistré avec succes";
}

// j'appelle la base de donnée et les functions pour insérer les données du nouveau chien
$appliBD->insertChien($surnom, $nomElevage, $age, $sexe, $race, $image, $utilisateurId);

// je redirige sur la page du nouveau profil
header("Location: profil_user.php?id='.$utilisateurId");

?> 