<?php
/////// FORMULAIRE AJOUTER UN ARTICLE/////////////////////////////////////////////////////////////////////////////////////

 require_once("connexion.php");
// connexion à la base de donnée
$appliBD = new Connexion();

// Les variables qui récupèrent les valeurs du formulaire Poster
$texte = $_POST['texte'];
$datePublication = date("Y-m-d H:i:s");
$chienId = $_POST['id'];  // Il manque pour récupérer l'Id du chien

// On sauvegarde la photo sur le serveur dans le dossier img
// Chaque photo aura pour nom photo-chienDDMMYYYYHHmmss.jpeg par exemple ; 
//  on ajoute un timestamp au nom pour le rendre unique
$suffixe = date("YmdHis");
$image = $_FILES["image"]["name"];
$uploadedFile = new SplFileInfo($image);
$fileExtension = $uploadedFile->getExtension(); 
$destinationFolder = $_SERVER['DOCUMENT_ROOT']."/projets/instaDog/";
$imageDestinationName = "image/photo-article".$suffixe.".".$fileExtension;

if(move_uploaded_file($_FILES["image"]["tmp_name"], $destinationFolder.$imageDestinationName)){
    echo "<br/> fichier enregistré avec succes";
}

// j'appelle la base de donnée et les functions pour insérer les données du nouveau chien
$appliBD->insertArticle($imageDestinationName, $texte, $datePublication, $chienId);

// je redirige sur la page du nouveau profil
header("Location: profil_user.php?id='.$utilisateurId");

?> 