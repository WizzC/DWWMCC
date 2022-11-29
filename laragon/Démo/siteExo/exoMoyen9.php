<?php ob_start() ?>
<?php 
class Stagiaire{
    private string $nom ;
    private array $notes  ;

    public function __construct($nom,$notes){
        $this->nom = $nom;
        $this->notes = $notes;
}
public function getNom(){return $this->nom;}
public function getNotes(){return $this->notes;}
}
$eleve1 = new Stagiaire("Titi",[12,15,20,12]);
$eleve2 = new Stagiaire("Wawa",[10,12,13,12]);
$eleve3 = new Stagiaire("Frefre",[2,5,20,1]);

$tabEleves = [$eleve1,$eleve2,$eleve3];
?>
<div>
    <?php
foreach($tabEleves as $eleves){
        echo "L'eleve " . $eleves->getNom() . " a pour notes : " ;
       
        // Afficher tableau de notes
        foreach($eleves->getNotes() as $note){
            echo($note) . " ";
        } 
        echo  "et a une moyenne de : ". array_sum($eleves->getNotes())/count($eleves->getNotes()) .
              " sa note max est de : " . max($eleves->getNotes()) .
              " sa note min est de : " . min($eleves->getNotes()) . "<br/>";
    }
    

?></div>
<?php
$titre = "Exo 9";
$content = ob_get_clean();
require "template.php";
?>