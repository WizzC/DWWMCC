<?php
require_once "ClassHumain.php";
class Chasseur extends Humain{
    private $arme;
    public function __construct($nom,$arme)
    {
        $this->arme = $arme;
        parent::__construct($nom);
    }
    public function getArme(){return $this->arme;}
    public function setArme($arme){ $this->arme = $arme;}

    public function chasser(){
        return $this->nom . " tire sur le lapin avec son fusil est ..."  . "\n";

    }
    public function seDeplacer(){
        $phrase= $this->nom . " avance avec son fusil" . "\n";
        return $phrase;
    }
}


?>