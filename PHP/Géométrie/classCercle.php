<?php
class Cercle{
    private $diametre;

    public function __construct($diametre)
    {
        $this->diametre=$diametre;
    }

    public function getDiametre(){return $this->diametre;}
    public function setDiametre($diametre){return $this->diametre=$diametre;}


public function perimetreCercle(){
    $perimetre = $this->diametre*pi();
    return $perimetre;
}

public function aireCercle(){
    $aire = ($this->diametre/2) * ($this->diametre/2) * pi();
    return $aire;
}

public function afficherCercle(){
    $phrase = " Diamètre : " . round($this->diametre,2) . " Périmètre : " . round($this->perimetreCercle(),2) . " Aire : " . round($this->aireCercle(),2) ;
    return $phrase;
}
}

?>