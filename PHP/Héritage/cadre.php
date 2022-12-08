<?php
require "employe.php";
class Cadre extends Employe {
    
    protected $listeEmploye = [];


    public function __construct($nom,$prenom,$numSecu,$salaire,$job,$listeEmploye){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->numSecu=$numSecu;
        $this->salaire=$salaire;
        $this->job=$job;
        $this->listeEmploye = $listeEmploye;
    }

    public function getListeEmploye(){return $this->listeEmploye;}
    public function setListeEmploye(){return $this->listeEmploye;}

    public  function __toString()
    {
        $texte = $this->nom . " " . $this->prenom ." a pour numéro de sécu " . $this->numSecu . " est touche un salaire de " . $this->salaire . " en tant que " . $this->job . " et est cadre de " ."\n";
     
        
        
        return $texte;
    }
    public function augmentation($cadre){$i=0;
        foreach ($cadre->getListeEmploye() as $elements){
            echo  $elements->getNom() . " ". $elements->getPrenom() . " a pour numéro de sécu " . $elements->getNumSecu() . " est touche un salaire de " ;
            $i= $i +1;
            if($i == 1){
                $salaire =$elements->getSalaire()*1.1;
                echo round($salaire,2) . " en tant que " . $elements->getJob() . "\n";
            }
            if($i == 2){
                $salaire =$elements->getSalaire()*1.2;
                echo round($salaire,2) . " en tant que " . $elements->getJob() . "\n";
            }
        }
    }

}
?>