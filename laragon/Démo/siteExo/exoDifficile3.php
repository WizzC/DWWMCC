<?php ob_start() ?>

<?php 
class Bibliotheque{
    private string $titre ;
    private string $edition;
    private string $auteur;
    private int $date;

    public function __construct($titre,$edition,$auteur,$date){
        $this->titre = $titre;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->date = $date;
    }
    public function getTitre(){return $this->titre;}
    public function getEdition(){return $this->edition;}
    public function getAuteur(){return $this->auteur;}
    public function getDate(){return $this->date;}

    public function __toString() {
        $affichage = "Titre : " . $this->getTitre() . "<br/> Édition : " . $this->getEdition() . "<br/> Auteur : "  . $this->getAuteur() . "<br/> Année de parution : "  .$this->getDate() . "<br/> " ; 
    
        return $affichage;
    

}
    public function afficher(){
        echo $this->__toString();
    }
}

$livre1 = new Bibliotheque("Berserk","Glénat","Kentarō Miura",1989);
$livre2 = new Bibliotheque("One Piece","Glénat","Eiichirō Oda",1997);
$livre3 = new Bibliotheque("Sun-Ken Rock","Doki-Doki","Boichi",2006);
$livre4 = new Bibliotheque("Fullmetal Alchemist","Gangan","Hiromu Arakawa",1989);
$bibli = [$livre1,$livre2,$livre3,$livre4]
?>
<div class="dropdown">
<button class="btn btn-secondary dropdown-toggle bg-info" type="button" data-bs-toggle="dropdown" aria-expanded="false">
Auteur
</button>
<ul class="dropdown-menu">
<form action="" method="POST">
<button type="submit" class="btn btn-outline-primary w-100" name="Tous"> Tous</button> <br>
<?php
foreach($bibli as $livre):

?>
<button type="submit" class="btn btn-outline-primary w-100" name="<?=$livre->getAuteur()?>"><?=$livre->getAuteur()?></button><br>
<?php
endforeach?>
</form>
</ul>
<button class="btn btn-secondary dropdown-toggle bg-info" type="button" data-bs-toggle="dropdown" aria-expanded="false">
Éditeur
</button>
<ul class="dropdown-menu">
<form action="" method="POST">
<button type="submit" class="btn btn-outline-primary w-100" name="Tous"> Tous</button> <br>
<?php
foreach($bibli as $livre):

?>
<button type="submit" class="btn btn-outline-primary w-100" name="<?=$livre->getEdition()?>"><?=$livre->getEdition()?></button><br>
<?php
endforeach?>
</form>
</ul>
<button class="btn btn-secondary dropdown-toggle bg-info" type="button" data-bs-toggle="dropdown" aria-expanded="false">
Année
</button>
<ul class="dropdown-menu">
<form action="" method="POST">
<button type="submit" class="btn btn-outline-primary w-100" name="Tous"> Tous</button> <br>
<?php
foreach($bibli as $livre):

?>
<button type="submit" class="btn btn-outline-primary w-100" name="<?=$livre->getDate()?>"><?=$livre->getDate()?></button><br>
<?php
endforeach?>
</form>
</ul>
</div>

<table class="table table-striped-columns">
  <thead>
    <tr>
<?php for($i=0;$i<count($bibli);$i++) {?>
      <th scope="col">Livre <?= $i+1 ?></th>
      <?php } 
      foreach($bibli as $livre){
        if (isset($_POST[$livre->getEdition()])){
            ?> 
                 
    </tr> 
  </thead>
  <tbody>
  <tr>
    <td><?= $livre->afficher()?></td><?php 
                
            }
            else{ ?>
                <td><?= $livre1->afficher();?></td>
    <td><?= $livre2->afficher();?></td>
    <td><?= $livre3->afficher();?></td>
    <td><?= $livre4->afficher();?></td> <?php
            }
            } ?>
    </tr>
  

</tbody>
</table>
<?php 
$titre = "Exo 10";
$content = ob_get_clean();
require "template.php";
?>