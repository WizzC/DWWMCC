<?php
class Triangle{
    protected $base;
    protected $hauteur;

    public function __construct($base,$hauteur)
    {
        $this->base=$base;
        $this->hauteur=$hauteur;

    }
    public function getBase(){return $this->base;}
    public function getHauteur(){return $this->hauteur;}

    public function setBase($base){return $this->base=$base;}
    public function setHauteur($hauteur){return $this->hauteur=$hauteur;}

    public function perimetreTriangleRectangle(){
        $hypotenuse = hypot($this->base,$this->hauteur);
        $perimetre = $this->base + $this->hauteur + $hypotenuse;
        return $perimetre;
    }

    public function aireTriangleRectangle(){
        $aire = ($this->base * $this->hauteur)/2;
        return $aire ;
    }

    public function afficherTriangleRectangle(){
        $phrase = " Base : " .  $this->base . " Hauteur : " . $this->hauteur . " Périmétre : " . round($this->perimetreTriangleRectangle(),2). " Aire : " . round($this->aireTriangleRectangle(),2);
        return $phrase;
    }
}



?>