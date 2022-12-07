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

    public function augmentation(){
        
    }

}
?>