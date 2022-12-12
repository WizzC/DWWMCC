<?php
require_once "InterfaceDeplacement.php";
abstract class Humain implements Deplacement{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom=$nom;
    }

    public function getNom(){return $this->nom;}
    public function setNom($nom){return $this->nom=$nom;}

    public function seDeplacer(){}
}


?>