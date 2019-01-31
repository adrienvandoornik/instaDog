
<?php

require 'connexion.php';
$appliBD = new Connexion();


class Utilisateur {
    private $id;
    private $motDePasse;
    private $email;
    private $derniereConnexion;
    private $login;

    public function __set($name, $value){
        $this->id = $id;
        $this->motDePasse = $motDePasse;
        $this->email = $email;
        $this->derniereConnexion = $derniereConnexion;
        $this->login = $login;
    }

    public function getId(){
        return $this->id;
    }

    public function getMotDePasse(){
        return $this->motDePasse;
    }

    public function setMoDePasse($motDePasse){
       $this->motDePasse = $motDePasse;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        
    }

    public function getDerniereConnexion(){
        return $this->derniereConnexion;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
      
    }
    



}


?>