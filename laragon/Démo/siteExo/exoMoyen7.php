<?php ob_start() ?>
<?php 
class Personne {
    public $nom ; 
    public $prenom ;
    public $adresse ;
    public $ville ;
    public $tel ;


    public function __construct($nom,$prenom,$adresse,$ville,$tel){
    $this -> nom = $nom;
    $this -> prenom = $prenom; 
    $this -> adresse = $adresse;
    $this -> ville = $ville; 
    $this -> tel = $tel;
    }

    public function ecrire(){
        echo  $this-> nom ." " . $this-> prenom ." " . $this-> adresse ." " . $this-> ville ." " . $this-> tel ; 
    }
}
$employer1 = new Personne("bonsoir","pariiiis","jesaispas","lechnord","0606060606");
$employer2 = new Personne("AAAAA","pariiiis","jesaispas","lechnord","0606060606");
$tab = [$employer1,$employer2];
sort($tab);
for ($i = 0; $i < count($tab); $i++) {
    $tab[$i]->ecrire(); ?>
    <br><?php
    }
?>
<?php
$titre = "Exo 7";
$content = ob_get_clean();
require "template.php";
?>