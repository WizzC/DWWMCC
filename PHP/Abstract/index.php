<?php
require "ClassLapin.php";
require "ClassChasseur.php";
$lapin = new Lapin("blanc",4);
$chasseur = new Chasseur("Paul","fusil");
echo "Le lapin " . $lapin->getCouleur() . " à " . $lapin->getPattes() . " pattes a été créé" . "\n";
echo "Le chasseur " . $chasseur->getNom() . " à été créé avec un " . $chasseur->getArme() . "\n";
while($lapin->getEnVie()){
   $lapin->setEnVie(rand(1,6));
   if($lapin->getEnVie()==1||$lapin->getEnVie()==6){
    $lapin->setEnVie(false);
   }
   else{
      $lapin->setEnVie(true);
   }
   echo $lapin->seNourir();
    echo $chasseur->seDeplacer();
    echo $lapin->crier() ;
    echo $chasseur->chasser();
    echo $lapin->seDeplacer();
}



?>