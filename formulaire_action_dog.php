<?php
session_start();
/////// FORMULAIRE AJOUTER UN CHIEN/////////////////////////////////////////////////////////////////////////////////////

 require_once("connexion.php");
// connexion à la base de donnée
$appliBD = new Connexion();

// Les variables qui récupèrent les valeurs du formulaire Poster
$surnom = $_POST['surnom'];
$nomElevage = $_POST['nomElevage'];
$dateAge = $_POST['age'];
$sexe = $_POST['sexe'];
$race = $_POST['race'];
$utilisateurId = $_SESSION['id'];// Il manque pour récupérer l'Id de l'utilisateur

// On sauvegarde la photo sur le serveur dans le dossier img
// Chaque photo aura pour nom photo-DDMMYYYYHHmmss.jpeg par exemple ;
//  on ajoute un timestamp au nom pour le rendre unique
$suffixe = date("YmdHis");
$image = $_FILES["image"]["name"];
$uploadedFile = new SplFileInfo($image);
$fileExtension = $uploadedFile->getExtension();
$destinationFolder = $_SERVER['DOCUMENT_ROOT']."/instaDog/";
$imageDestinationName = "image/photo-chien".$suffixe.".".$fileExtension;

if(move_uploaded_file($_FILES["image"]["tmp_name"], $destinationFolder.$imageDestinationName)){
    echo "<br/> fichier enregistré avec succes";
}

// j'appelle la base de donnée et les functions pour insérer les données du nouveau chien
$utilisateur_Id = $appliBD->insertChien($surnom, $nomElevage, $dateAge, $sexe, $race, $imageDestinationName, $utilisateurId);

// je redirige sur la page du nouveau profil
header("Location: profil_user.php?id=$utilisateurId");

?>
