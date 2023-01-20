<?php

class Users{
    private $id;
    private $role;
    private $pseudo;
    private $email;
    private $password;
    

    public function __construct($id,$role,$pseudo,$email,$password)
    {
        $this->id=$id;
        $this->role=$role;
        $this->pseudo=$pseudo;
        $this->email=$email;
        $this->password=$password;

    }

    public function getId(){return $this->id;}
    public function setId($id){$this->id=$id;}

    public function getRole(){return $this->role;}
    public function setRole($role){$this->role=$role;}

    public function getPseudo(){return $this->pseudo;}
    public function setPseudo($pseudo){$this->pseudo=$pseudo;}

    public function getEmail(){return $this->email;}
    public function setEmail($email){$this->email=$email;}

    public function getPassword(){return $this->password;}
    public function setPassword($password){$this->password=$password;}

}

?>