<?php ob_start() ?>
<?php 

class Voiture {
    private string $marque ; 
    private string $model ;
    private string $couleur ;
    private int $porte ;
    private bool $electrique ;


    public function __construct($marque,$model,$couleur,$porte,$electrique){
    $this->marque = $marque;
    $this->model = $model;
    $this->couleur = $couleur; 
    $this->porte = $porte;
    $this->electrique = $electrique;
    }

    public function getMarque(){return $this->marque;}
    public function getModel(){return $this->model;}
    public function getCouleur(){return $this->couleur;}
    public function getPorte(){return $this->porte;}
    public function getElectrique(){return $this->electrique;}
    public function setElectrique($value){ $this->electrique = $value;}
    }
?>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Marque
  </button>
  <ul class="dropdown-menu">
<form action="" method="POST">
    <button type="submit" name="Tous">Tous</button> <br>
    <button type="submit" type="submit" name="BMW">BMW</button><br>
    <button type="submit" type="submit" name="Audi">Audi</button><br>
    <button type="submit" type="submit" name="Renault">Renault</button><br>
    <button type="submit" type="submit" name="Peugeot">Peugeot</button><br>
    <button type="submit"type="submit" name="Nissan">Nissan</button><br>
</form>
</ul>
</div>
</div>
    <?php
    $voiture1 = new Voiture("BMW","M1","Noir",5,true);
    $voiture2 = new Voiture("Audi","A1","Blanc",5,false);
    $voiture3 = new Voiture("Peugeot","206","Rouge",3,true);
    $voiture4 = new Voiture("Renault","Clio 2","Vert",5,false);
    $voiture5 = new Voiture("Nissan","GTR","Gris",3,false);

    $tabVoiture = [$voiture1,$voiture2,$voiture3,$voiture4,$voiture5];
    if (isset($_POST["Tous"])){
    foreach ($tabVoiture as $voiture) {
        if($voiture->getElectrique()){
            echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Électrique <br/>";
        }
       else{
        echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Non Électrique <br/>";
       } 
        }
}
if (isset($_POST["BMW"])){
    
    foreach ($tabVoiture as $voiture) {
        if($voiture->getMarque() == "BMW"){
        if($voiture->getElectrique()){
            echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Électrique <br/>";
        }
       else{
        echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Non Électrique <br/>";
       }
    }
        }
}
if (isset($_POST["Audi"])){
    
    foreach ($tabVoiture as $voiture) {
        if($voiture->getMarque() == "Audi"){
        if($voiture->getElectrique()){
            echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Électrique <br/>";
        }
       else{
        echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Non Électrique <br/>";
       }
    }
        }
}
if (isset($_POST["Peugeot"])){
    
    foreach ($tabVoiture as $voiture) {
        if($voiture->getMarque() == "Peugeot"){
        if($voiture->getElectrique()){
            echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Électrique <br/>";
        }
       else{
        echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Non Électrique <br/>";
       }
    }
        }
}
if (isset($_POST["Renault"])){
    
    foreach ($tabVoiture as $voiture) {
        if($voiture->getMarque() == "Renault"){
        if($voiture->getElectrique()){
            echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Électrique <br/>";
        }
       else{
        echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Non Électrique <br/>";
       }
    }
        }
}
if (isset($_POST["Nissan"])){
    
    foreach ($tabVoiture as $voiture) {
        if($voiture->getMarque() == "Nissan"){
        if($voiture->getElectrique()){
            echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Électrique <br/>";
        }
       else{
        echo $voiture->getMarque() . " " . $voiture->getModel() . " " .  $voiture->getCouleur() .  " "  . $voiture->getPorte() .  " Non Électrique <br/>";
       }
    }
        }
}
?>
<?php
$titre = "Exo 8";
$content = ob_get_clean();
require "template.php";
?>