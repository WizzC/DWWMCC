<?php
require_once "InterfaceDeplacement.php";
abstract class Animaux implements Deplacement{

    protected $couleur;
    protected $pattes;

    protected function __construct($couleur,$pattes)
        {
            $this->couleur = $couleur;
            $this->pattes = $pattes;
        }
    public function getCouleur(){return $this->couleur;}
    public function setCouleur($couleur){ $this->couleur=$couleur;}
    public function getPattes(){return $this->pattes;}
    public function setPattes($pattes){ $this->pattes=$pattes;}

    public function seDeplacer(){}
    
    public function crier(){}

}


?>