<?php

// On inclut le fichier contenant la classe "Humain"
require_once "ClassHumain.php";

// On déclare une classe "Chasseur" qui hérite de la classe "Humain"
class Chasseur extends Humain{

    // On déclare une propriété privée "arme"
    private $arme;

    // On déclare un constructeur avec deux arguments, "nom" et "arme"
    public function __construct($nom,$arme)
    {
        // On affecte la valeur de l'argument "arme" à la propriété "arme" de l'objet
        $this->arme = $arme;
        // On appelle le constructeur de la classe "Humain" avec l'argument "nom"
        parent::__construct($nom);
    }

    // On déclare une méthode "getter" pour récupérer la valeur de la propriété "arme"
    public function getArme(){return $this->arme;}

    // On déclare une méthode "setter" pour modifier la valeur de la propriété "arme"
    public function setArme($arme){ $this->arme = $arme;}

    // On déclare une méthode "chasser" qui renvoie une chaîne de caractères
    public function chasser(){
        return $this->nom . " tire sur le lapin avec son fusil est ..."  . "\n";
    }

    // On surcharge la méthode "seDeplacer" héritée de la classe "Humain"
    public function seDeplacer(){
        $phrase= $this->nom . " avance avec son fusil" . "\n";
        return $phrase;
    }
}

?>