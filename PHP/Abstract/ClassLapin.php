<?php
require_once "ClassAnimal.php";
class Lapin extends Animaux{
    private $enVie;

    public function __construct($enVie,$couleur,$pattes)
    {
        $this->enVie = $enVie;
        parent::__construct($couleur,$pattes);
    }
    public function getEnVie(){return $this->enVie;}
    public function setEnVie($enVie){return $this->enVie = $enVie;}
    
    public function seNourir(){
        return "Le lapin mange " . "\n";
    }
    public function seDeplacer()
    {
        if($this->enVie){
        return "Le lapin ". $this->couleur ." s'enfuie sur ses " . $this->pattes . " pattes d'un seul bond" . "\n";
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