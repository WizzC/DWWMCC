<?php
require_once "ClassAnimal.php";
class Lapin extends Animaux{
    private $enVie;

    public function __construct($couleur,$pattes)
    {
        $this->enVie = true;
        parent::__construct($couleur,$pattes);
    }
    public function getEnVie(){return $this->enVie;}
    public function setEnVie($enVie){ $this->enVie = $enVie;}
    
    public function seNourir(){
        return "Le lapin mange " . "\n";
    }
    public function fuir(){
        return "Le lapin ". $this->couleur ." s'enfuie sur ses " . $this->pattes . " pattes d'un seul bond" . "\n";

    }
    public function seDeplacer()
    {
        if($this->enVie){
        return $this->fuir();
    }
        else{
            
        return "Le pauvre petit lapin " . $this->couleur . " est malheureusement mort" . "\n";
    }
    }
    public function crier(){
        return "Le lapin glapie de peur " . "\n";
    }
}

?>