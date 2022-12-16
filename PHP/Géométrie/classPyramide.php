<?php
require "classTriangle.php";
class Pyramide extends Triangle{
    private $hauteurPyramide;

    public function __construct($hauteurPyramide,$hauteur,$base)
    {
        $this->hauteurPyramide=$hauteurPyramide;
        $this->base=$base;
        $this->hauteur=$hauteur;
    }

    public function getHauteurPyramide(){return $this->hauteurPyramide;}
    public function setHauteurPyramide($hauteurPyramide){return $this->hauteurPyramide=$hauteurPyramide;}

    public function volumePyramide(){
        $volume = $this->aireTriangleRectangle() * $this->hauteurPyramide /3 ;
        return $volume;
    }
}

?>