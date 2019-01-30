<?php

class Connexion {
    private $connexion;

   
    public function __construct() {
        $PARAM_hote= 'localhost';
        $PARAM_port='3306';
        $PARAM_nom_bd='InstaDog';
        $PARAM_utilisateur='adminInstaDog';
        $PARAM_mot_passe='Inst@Dog';

        try{
            $this->connexion = new PDO(
                'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,
                $PARAM_utilisateur,
                $PARAM_mot_passe);
            
        }catch (Exception $e){
            echo 'Erreur : '.$e->getMessage().'<br>';
            echo 'N° :'.$e->getCode();
        }
    
    }

    public function getConnexion(){
        return $this->connexion;
    }

   


    // function insert user////////////////////////////////////////////////////////////////////////////////////////////////
/* 
    function insert_utilisateurr($nom, $prenom, $email, $motDePasse, $dernierConnexion, $login){
        $user = true;
        
        try{
            $requete_prepare=$this->connexion->prepare(
                "INSERT INTO utilisateur (nom, prenom, email, motDePasse, dateConnexion) values (:nom, :prenom, :email, :motDePasse, :dateConnexion)");

            $requete_prepare->execute(
                array('nom' => $utilisateur));
                        
        }catch (Exception $e){
            echo "erreur";
            return false;

        }
        
        return true;
    } 
 */
   
 //function insert musique//////////////////////////////////////////////////////////////////////////////////////////////////
/* 
    function insert_chien(){
            
            
        try {
            $requete_prepare=$this->connexion->prepare(
                "INSERT INTO Musique (type) values (:musique)");

            $requete_prepare->execute(
                array('musique' => $musique));
        } catch (Exception $e) {
                echo "erreur";
                return false;
        }
            return $musique;
    } */

//function insert personne/////////////////////////////////////////////////////////////////////////////////////////////////
/* 
function insert_personne($Nom, $Prenom, $URL_Photo, $Date_Naissance, $Statut_couple){
    
    $requete_prepare = $this->connexion->prepare(
        "INSERT INTO Personne (Nom, Prenom, URL_Photo, Date_Naissance, Statut_couple) 
        values (:Nom, :Prenom, :URL_Photo, :Date_Naissance, :Statut_couple)"
    );

    $requete_prepare->execute(
        array(
            'Nom' => $Nom,
            'Prenom' => $Prenom, 
            'URL_Photo' => $URL_Photo, 
            'Date_Naissance' => $Date_Naissance, 
            'Statut_couple' => $Statut_couple
        )
    );
    $id= $this->connexion->lastInsertId(); 
    return $id;    
}


// get Hobby///////////////////////////////////////////////////////////////////////////////////////////////////////////////

function getHobby() {

   

    $requete_prepare=$this->connexion->prepare(
        "SELECT * FROM Hobby");

    $requete_prepare->execute();
    $resultat=$requete_prepare->fetchAll(PDO::FETCH_OBJ);
    
    return $resultat;

}

//getPersonne////////////////////////////////////////////////////////////////////////////////////////////////////////////

function selectAllMusiques() {

    

    $requete_prepare=$this->connexion->prepare(
        "SELECT * FROM Musique");
    
    $requete_prepare->execute();

    $resultat=$requete_prepare->fetchAll(PDO::FETCH_OBJ);

    return $resultat;
}

//selectPersonneById//////////////////////////////////////////////////////////////////////////////////////////////////////

function selectPersonneById($id) {

    

    $requete_prepare=$this->connexion->prepare(
        "SELECT * FROM Personne  WHERE id = :id");
    
    $requete_prepare->execute(array("id" => $id));

    $resultat=$requete_prepare->fetchAll(PDO::FETCH_OBJ);

    return $resultat;
}

//selectPersonne///////////////////////////////////////////////////////////////////////////////////////////////////////////

function selectPersonne() {

    $requete_prepare=$this->connexion->prepare(
        "SELECT * FROM Personne");
    
    $requete_prepare->execute();

    $resultat=$requete_prepare->fetchAll(PDO::FETCH_OBJ);

    return $resultat;
}


//selectNomPreno_Like///////////////////////////////////////////////////////////////////////////////////////////////////////

function selectPersonneByNomPrenomLike($pattern) {

   

    $requete_prepare=$this->connexion->prepare(
        "SELECT * FROM Personne WHERE Nom LIKE :nom
         OR Prenom LIKE :prenom");
    
    $requete_prepare->execute(array("nom"=>"%$pattern%",
    "prenom"=>"%$pattern%"));

    $resultat=$requete_prepare->fetchAll(PDO::FETCH_OBJ);
    return $resultat;
    
}

//Relation_Hobby///////////////////////////////////////////////////////////////////////////////////////////////////////////


function getPersonneHobby($personneId) {

    
    $requete_prepare=$this->connexion->prepare(
        "SELECT Type FROM Hobby h
        INNER JOIN RelationHobby 
        ON Hobby_Id = h.Id
        WHERE Personne_Id = :Id");
    
    $requete_prepare->execute(
        array("Id"=> $personneId));
    
    $hobbies=$requete_prepare->fetchAll(PDO::FETCH_OBJ);

    return $hobbies;
    
}

//Relation_Musique/////////////////////////////////////////////////////////////////////////////////////////////////////////

function getPersonneMusique($personneId) {

    

    $requete_prepare=$this->connexion->prepare(
        "SELECT Type FROM Musique m
        INNER JOIN RelationMusique
        ON Musique_Id = m.Id
        WHERE Personne_Id = :Id");

    $requete_prepare->execute(
        array("Id"=> $personneId));
    
    $musiques=$requete_prepare->fetchAll(PDO::FETCH_OBJ);

    return $musiques;
    
}

//Relation_Personne////////////////////////////////////////////////////////////////////////////////////////////////////////

function getRelationPersonne($personneId){
    $requete_prepare=$this->connexion->prepare(
        "SELECT * FROM RelationPersonne r 
        INNER JOIN Personne p
        ON Personne_Id = p.Id
        WHERE Personne_Id = :id");

    $requete_prepare->execute(
      array("id"=>$personneId));

    $select_relation=$requete_prepare->fetchAll(PDO::FETCH_OBJ);

    return $select_relation;
}




//function botton recherche////////////////////////////////////////////////////////////////////////////////////////////////////

 function selectRecherche($recherche) {

    $requete_prepare=$this->connexion->prepare(
        "SELECT * FROM Personne WHERE Nom LIKE :nom
         OR Prenom LIKE :prenom");
    
    $requete_prepare->execute(array("nom"=>"%$recherche%",
    "prenom"=>"%$recherche%"));

    $resultat=$requete_prepare->fetchAll(PDO::FETCH_OBJ);
    return $resultat;
     
} 

///function insert relation musique//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function insert_relation_musique ($personne_Id, $musique_Id) {
        try {
            $requete_prepare = $this->connexion->prepare(
                "INSERT INTO RelationMusique (Personne_Id, Musique_Id) 
                values (:Personne_Id, :Musique_Id)"
            );

            $requete_prepare->execute(
                array(
                    'Personne_Id' => $personne_Id,
                    'Musique_Id' => $musique_Id 
                    
                )
            );
        } catch (Exception $e) {
            echo "erreur";
            return false;
        }
        return true;      
    }

///function insert relation hobby//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function insert_relation_hobby ($personne_Id, $hobby_Id) {
    
        $requete_prepare = $this->connexion->prepare(
            "INSERT INTO RelationHobby (Personne_Id, Hobby_Id) 
            values (:Personne_Id, :Hobby_Id)"
        );

        $requete_prepare->execute(
            array(
                'Personne_Id' => $personne_Id,
                'Hobby_Id' => $hobby_Id 
                
            )
        );
    }

///function insert relation personne//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function insert_relation_personne ($personne_Id, $relation_Id, $Type) {
    
    $requete_prepare = $this->connexion->prepare(
        "INSERT INTO RelationPersonne (Personne_Id, Relation_Id, Type) 
        values (:Personne_Id, :Relation_Id, :Type)"
    );

    $requete_prepare->execute(
        array(
            'Personne_Id' => $personne_Id,
            'Relation_Id' => $relation_Id,
            'Type' => $Type
            
        )
    );
} */

}// Fin de la class Connexion


?>