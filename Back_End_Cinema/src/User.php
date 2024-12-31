<?php
class User{
    public $num ;
    public $nom;
    public $email;
    protected $password;
    public function __construct($num ,$nom,$email,$password)
    {
        $this->num=$num;
        $this->nom=$nom;
        $this->email=$email;
        $this->password=$password;
    }
    // start Getters and setters

    public function getNum(){
        return $this->num;
    }
    public function setNum($newNum){
        $this->num = $newNum;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom($newName){
        $this->num = $newName;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($newEmail){
        $this->num = $newEmail;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($newPassword){
        $this->num = $newPassword;
    }
// End Getters and setters
}

?>