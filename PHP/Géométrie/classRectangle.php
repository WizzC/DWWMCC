<?php
class Rectangle{
    protected $longueur;
    protected $largeur;

    public function __construct($longueur,$largeur)
    {
        $this->longueur=$longueur;
        $this->largeur=$largeur;
    }

    public function getLongueur(){return $this->longueur;}
    public function getLargeur(){return $this->largeur;}

    public function setLongueur($longueur){return $this->longueur=$longueur;}
    public function setLargeur($largeur){return $this->largeur=$largeur;}

    public function perimetre(){
        $perimetre = $this->longueur * 2 + $this->largeur*2;
        return $perimetre;
    }
    public function aire(){
        $aire = $this->longueur * $this->largeur;
        return $aire;
    }
    public function estCarre(){
        if($this->longueur == $this->largeur){
            $phrase =  " c'est un carré ";
        }
        else{
            $phrase = " ce n'est pas un carré ";
        }
        return $phrase;
    }
    public function afficherRectangle(){
        $phraseRectangle = " Longueur : " . $this->longueur . " Largeur : ". $this->largeur . " Périmétre : " . $this->perimetre() . " Aire : " . $this->aire() . $this->estCarre() ;
        return $phraseRectangle;
    }
}



?>