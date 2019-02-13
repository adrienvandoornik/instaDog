<?php

class Utilisateur {
    protected $id;
    protected $motDePasse;
    protected $email;
    protected $derniereConnexion;
    protected $login;

    public function __set($name, $value){

    }

    public function getId(){
        return $this->id;
    }

    public function getMotDePasse(){
        return $this->motDePasse;
    }

    public function setMotDePasse($motDePasse){
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