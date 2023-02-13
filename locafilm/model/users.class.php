<?php

class Users{
    private $idUsers;
    private $role;
    private $pseudo;
    private $email;
    private $motDePasse;
    

    public function __construct($idUsers,$role,$pseudo,$email,$motDePasse)
    {
        $this->idUsers=$idUsers;
        $this->role=$role;
        $this->pseudo=$pseudo;
        $this->email=$email;
        $this->motDePasse=$motDePasse;

    }

    public function getIdUsers(){return $this->idUsers;}
    public function setIdUsers($idUsers){$this->idUsers=$idUsers;}

    public function getRole(){return $this->role;}
    public function setRole($role){$this->role=$role;}

    public function getPseudo(){return $this->pseudo;}
    public function setPseudo($pseudo){$this->pseudo=$pseudo;}

    public function getEmail(){return $this->email;}
    public function setEmail($email){$this->email=$email;}

    public function getPassword(){return $this->motDePasse;}
    public function setPassword($motDePasse){$this->motDePasse=$motDePasse;}

}

?>