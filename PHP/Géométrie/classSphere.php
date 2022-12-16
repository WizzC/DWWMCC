<?php
require "classCercle.php";
class Sphere extends Cercle{

    public function __construct($diametre)
    {
        $this->diametre=$diametre;
    }
    public function volumeSphere(){
        $volume = 4 *($this->diametre/2) * ($this->diametre/2) * pi() ;
        return $volume;
    }
}


?>