<?php
require "classRectangle.php";
class Parrallepipede extends Rectangle {

    private $hauteur;

    public function __construct($hauteur,$longueur,$largeur)
    {
        $this->hauteur=$hauteur;
        $this->longueur=$longueur;
        $this->largeur=$largeur;
    }
    
    public function getHauteur(){return $this->hauteur;}
    public function setHauteur($hauteur){return $this->hauteur=$hauteur;}

    public function perimetreParrallepipede()
    {
        $perimetre = ($this->longueur+$this->largeur)*2 *$this->hauteur ;
    return $perimetre;
    }

    public function volumeParrallepipede(){
        $volume = $this->longueur * $this->largeur * $this->hauteur;
        return $volume;
    }

    public function afficherParrallepipede(){
        $phrase = "Le périmètre est de : " . $this->perimetreParrallepipede() . " Le volume est de : " . $this->volumeParrallepipede();
        return $phrase;
    }
}