<?php ob_start() ?>
<?php 

class Voiture {
    private string $marque ; 
    private string $model ;
    private string $couleur ;
    private int $porte ;
    // private bool $electrique ;
    public const ELECTRIQUE = true;
    public const NONELECTRIQUE = false;

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
    }
?>
    <?php
    $voiture1 = new Voiture("BMW","M1","Noir",5,Voiture::ELECTRIQUE);
    $voiture2 = new Voiture("Audi","A1","Blanc",5,Voiture::NONELECTRIQUE);
    $voiture3 = new Voiture("Peugeot","206","Rouge",3,Voiture::ELECTRIQUE);
    $voiture4 = new Voiture("Renault","Clio 2","Vert",5,Voiture::NONELECTRIQUE);
    $voiture5 = new Voiture("Nissan","GTR","Gris",3,Voiture::NONELECTRIQUE);

    $tabVoiture = [$voiture1,$voiture2,$voiture3,$voiture4,$voiture5];
    sort($tabVoiture);
    ?>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Marque
  </button>
  <ul class="dropdown-menu">
<form action="" method="POST">
    <button type="submit" class="btn btn-outline-primary w-100" name="Tous"> Tous</button> <br>
    <?php
    foreach($tabVoiture as $marques):

    ?>
    <button type="submit" class="btn btn-outline-primary w-100" name="<?=$marques->getMarque()?>"><?=$marques->getMarque()?></button><br>
    <?php
    endforeach?>
</form>
</ul>
</div>
    <table class="table table-striped-columns">
  <thead>
    <tr>
      <th scope="col">Marque</th>
      <th scope="col">Model</th>
      <th scope="col">Couleur</th>
      <th scope="col">Porte</th>
      <th scope="col">Electrique</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
    if (isset($_POST["Tous"])){
    foreach ($tabVoiture as $voiture){
            ?> <td><?php echo $voiture->getMarque()?></td><?php
            ?> <td><?php echo $voiture->getModel()?></td><?php
            ?> <td><?php echo $voiture->getCouleur()?></td><?php
            ?> <td><?php echo $voiture->getPorte()?></td><?php
        if($voiture->getElectrique()){
            
            ?> <td>OUI </td></tr><?php
        }
       else{
        
        ?> <td>NON</td></tr><?php
        } 
        }
}
foreach($tabVoiture as $marques):
if (isset($_POST[$marques->getMarque()])){
    
    foreach ($tabVoiture as $voiture) {
        if($voiture->getMarque() == $marques->getMarque()){
            ?> <td><?php echo $voiture->getMarque()?></td><?php
            ?> <td><?php echo $voiture->getModel()?></td><?php
            ?> <td><?php echo $voiture->getCouleur()?></td><?php
            ?> <td><?php echo $voiture->getPorte()?></td><?php
        if($voiture->getElectrique()){
            ?> <td>oui </td></tr><?php
        }
       else{
        ?> <td>NON</td></tr><?php
        }
    }
    }
}
endforeach
?>
    </tr>
  </tbody>
</table>
<?php
$titre = "Exo 8";
$content = ob_get_clean();
require "template.php";
?>