<?php  
class Admin{
    private $num ;
    private $nom;
    private $email;
    private $password;
    public function __construct($num ,$nom,$email,$password)
    {
        $this->num=$num;
        $this->nom=$nom;
        $this->email=$email;
        $this->password=$password;
    }
    public function getNum(){
        return $this->num;
    }
    public function setNom($newName){
        $this->num = $newName;
    }
}


?>