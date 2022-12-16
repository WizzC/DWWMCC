<?php
require "ClassLapin.php";
require "ClassChasseur.php";
$lapin = new Lapin(true,"blanc",4);
$chasseur = new Chasseur("Paul","fusil");
echo "Le lapin " . $lapin->getCouleur() . " à " . $lapin->getPattes() . " pattes a été créer" . "\n";
echo "Le chasseur " . $chasseur->getNom() . " à été créer avec un " . $chasseur->getArme() . "\n";
while($lapin->getEnVie()){
   $lapin->setEnVie(rand());
   if($lapin->getEnVie()%2==0){
    $lapin->setEnVie(true);
    echo $lapin->seNourir();
    echo $chasseur->seDeplacer();
    echo $lapin->crier() ;
    echo $chasseur->chasser();
    echo $lapin->seDeplacer();
   }
   else{
      $lapin->setEnVie(false);
      echo $lapin->seNourir();
      echo $chasseur->seDeplacer();
      echo $lapin->crier() ;
    echo $chasseur->chasser();
    echo $lapin->seDeplacer();
   }
}



?>