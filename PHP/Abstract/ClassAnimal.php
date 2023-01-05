<?php

// On inclut le fichier contenant l'interface "Deplacement"
require_once "InterfaceDeplacement.php";

// On déclare une classe abstraite "Animaux" qui implémente l'interface "Deplacement"
abstract class Animaux implements Deplacement{

    // On déclare deux propriétés protégées, "couleur" et "pattes"
    protected $couleur;
    protected $pattes;

    // On déclare un constructeur avec deux arguments, "couleur" et "pattes"
    protected function __construct($couleur,$pattes)
        {
            // On affecte les valeurs des arguments aux propriétés de l'objet
            $this->couleur = $couleur;
            $this->pattes = $pattes;
        }

    // On déclare deux méthodes "getter" pour récupérer la valeur des propriétés "couleur" et "pattes"
    public function getCouleur(){return $this->couleur;}
    public function getPattes(){return $this->pattes;}

    // On déclare deux méthodes "setter" pour modifier la valeur des propriétés "couleur" et "pattes"
    public function setCouleur($couleur){ $this->couleur=$couleur;}
    public function setPattes($pattes){ $this->pattes=$pattes;}

    // On déclare une méthode vide "seDeplacer" qui sera implémentée par les classes filles
    public function seDeplacer(){}
    
    // On déclare une méthode vide "crier" qui sera implémentée par les classes filles
    public function crier(){}

}
