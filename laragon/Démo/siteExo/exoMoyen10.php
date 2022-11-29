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
$eleve2 = new Stagiaire("Wawa",[0,1,1,1]);
$eleve3 = new Stagiaire("Frefre",[2,5,20,1]);

$tabEleves = [$eleve1,$eleve2,$eleve3];



?>

<table class="table table-striped-columns">
  <thead>
    <tr>

      <th scope="col">Prénom</th>
      <th scope="col">Moyenne</th>
      <th scope="col">Max</th>
      <th scope="col">Min</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
<?php foreach($tabEleves as $eleves){?>
      
      <td><?= $eleves->getNom()?></td>
      <td><?= array_sum($eleves->getNotes())/count($eleves->getNotes()) ?></td>
      <td><?= max($eleves->getNotes()) ?></td>
      <td><?= min($eleves->getNotes())?></td>
    </tr>
   <?php } ?>
    </tr>
  </tbody>
</table>

<?php 
$titre = "Exo 9";
$content = ob_get_clean();
require "template.php";
?>