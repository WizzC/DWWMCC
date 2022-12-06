<?php ob_start();
require "../../Classe/classequipe.php";
require "../../Classe/classJoueur.php"; ?>


<?php
$i=0;
foreach($joueurs as $joueur){
        if ($i < 15) {
            $joueur->setid($equipe1->getid());
            
        } 
        elseif ($i < 30) {
            $joueur->setid($equipe2->getid());
          
        } 
        elseif ($i < 45) {
            $joueur->setid($equipe3->getid());
        } 
        else {
            $joueur->setid($equipe4->getid());
        } 
    $i++;
    
}
$tab;
 if(isset($_GET["Japon"])){
  $tab=[45,60];
    ?><table class="table table-danger">
<thead>
<tr>
  <th scope="col">Nom</th>
  <th scope="col">Note general</th>
  <th scope="col">Poste</th>
  <th scope="col">Stats1</th>
  <th scope="col">Stats2</th>
  <th scope="col">Stats3</th>
  <th scope="col">Stats4</th>
  <th scope="col">Stats5</th>
  <th scope="col">Stats6</th>
</tr>
</thead>
<tbody>
<?php
    for($x=0;$x<count($tab)-1;$x++){
        ?>
        
    <div class="d-flex justify-content-evenly ">
        <?php
        for($i=0;$i<count($joueurs);$i++) {
            if($joueurs[$i]->getid()===4){
                if($i>=$tab[$x] and $i<$tab[$x+1]){
                ?><tr>
                
                <td><?= $joueurs[$i]->getNomJoueur()?></td>
                <td><?= $joueurs[$i]->getnote()?></td>
                <td><?= $joueurs[$i]->getPoste()?></td>
                <td><?= $joueurs[$i]->getStat1()?></td>
                <td><?= $joueurs[$i]->getStat2()?></td>
                <td><?= $joueurs[$i]->getStat3()?></td>
                <td><?= $joueurs[$i]->getStat4()?></td>
                <td><?= $joueurs[$i]->getStat5()?></td>
                <td><?= $joueurs[$i]->getStat6()?></td>
              </tr>
                    <?php
                }
            }
        }
        ?>
    </div>
    <?php }?>
</tbody>
</table>
<?php } 
 if(isset($_GET["Canada"])){
  $tab=[0,15];
    ?><table class="table table-danger">
<thead>
<tr>
  <th scope="col">Nom</th>
  <th scope="col">Note general</th>
  <th scope="col">Poste</th>
  <th scope="col">Stats1</th>
  <th scope="col">Stats2</th>
  <th scope="col">Stats3</th>
  <th scope="col">Stats4</th>
  <th scope="col">Stats5</th>
  <th scope="col">Stats6</th>
</tr>
</thead>
<tbody>
<?php
    for($x=0;$x<count($tab)-1;$x++){
        ?>
        
    <div class="d-flex justify-content-evenly ">
        <?php
        for($i=0;$i<count($joueurs);$i++) {
            if($joueurs[$i]->getid()===1){
                if($i>=$tab[$x] and $i<$tab[$x+1]){
                ?><tr>
                
                <td><?= $joueurs[$i]->getNomJoueur()?></td>
                <td><?= $joueurs[$i]->getnote()?></td>
                <td><?= $joueurs[$i]->getPoste()?></td>
                <td><?= $joueurs[$i]->getStat1()?></td>
                <td><?= $joueurs[$i]->getStat2()?></td>
                <td><?= $joueurs[$i]->getStat3()?></td>
                <td><?= $joueurs[$i]->getStat4()?></td>
                <td><?= $joueurs[$i]->getStat5()?></td>
                <td><?= $joueurs[$i]->getStat6()?></td>
              </tr>
                    <?php
                }
            }
        }
        ?>
    </div>
    <?php }?>
</tbody>
</table>
<?php } 
 if(isset($_GET["Chine"])){
  $tab=[15,30];
    ?><table class="table table-danger">
<thead>
<tr>
  <th scope="col">Nom</th>
  <th scope="col">Note general</th>
  <th scope="col">Poste</th>
  <th scope="col">Stats1</th>
  <th scope="col">Stats2</th>
  <th scope="col">Stats3</th>
  <th scope="col">Stats4</th>
  <th scope="col">Stats5</th>
  <th scope="col">Stats6</th>
</tr>
</thead>
<tbody>
<?php
    for($x=0;$x<count($tab)-1;$x++){
        ?>
        
    <div class="d-flex justify-content-evenly ">
        <?php
        for($i=0;$i<count($joueurs);$i++) {
            if($joueurs[$i]->getid()===2){
                if($i>=$tab[$x] and $i<$tab[$x+1]){
                ?><tr>
                
                <td><?= $joueurs[$i]->getNomJoueur()?></td>
                <td><?= $joueurs[$i]->getnote()?></td>
                <td><?= $joueurs[$i]->getPoste()?></td>
                <td><?= $joueurs[$i]->getStat1()?></td>
                <td><?= $joueurs[$i]->getStat2()?></td>
                <td><?= $joueurs[$i]->getStat3()?></td>
                <td><?= $joueurs[$i]->getStat4()?></td>
                <td><?= $joueurs[$i]->getStat5()?></td>
                <td><?= $joueurs[$i]->getStat6()?></td>
              </tr>
                    <?php
                }
            }
        }
        ?>
    </div>
    <?php }?>
</tbody>
</table>
<?php } 
 if(isset($_GET["Coree"])){
  $tab=[30,45];
    ?><table class="table table-danger">
<thead>
<tr>
  <th scope="col">Nom</th>
  <th scope="col">Note general</th>
  <th scope="col">Poste</th>
  <th scope="col">Stats1</th>
  <th scope="col">Stats2</th>
  <th scope="col">Stats3</th>
  <th scope="col">Stats4</th>
  <th scope="col">Stats5</th>
  <th scope="col">Stats6</th>
</tr>
</thead>
<tbody>
<?php
    for($x=0;$x<count($tab)-1;$x++){
        ?>
        
    <div class="d-flex justify-content-evenly ">
        <?php
        for($i=0;$i<count($joueurs);$i++) {
            if($joueurs[$i]->getid()===3){
                if($i>=$tab[$x] and $i<$tab[$x+1]){
                ?><tr>
                
                <td><?= $joueurs[$i]->getNomJoueur()?></td>
                <td><?= $joueurs[$i]->getnote()?></td>
                <td><?= $joueurs[$i]->getPoste()?></td>
                <td><?= $joueurs[$i]->getStat1()?></td>
                <td><?= $joueurs[$i]->getStat2()?></td>
                <td><?= $joueurs[$i]->getStat3()?></td>
                <td><?= $joueurs[$i]->getStat4()?></td>
                <td><?= $joueurs[$i]->getStat5()?></td>
                <td><?= $joueurs[$i]->getStat6()?></td>
              </tr>
                    <?php
                }
            }
        }
        ?>
    </div>
    <?php }?>
</tbody>
</table>
<?php } ?>

<form action="" method="$_POST" class="container">
  <div style="width:500px;height:1000px" class="pt-5  d-flex  justify-content-between m-auto">
    <?php for ($i = 0; $i < count($equipes) ; $i++) : ?>
      <a href="../Pages/Equipe<?= $equipes[$i]->getPays()?>.php">
      <img style="width:100px" src="../../Image/Drapeaux/Logo<?= $equipes[$i]->getPays(); ?>.png">
      <form action="" method="GET" class="d-flex justify-content-evenly m-auto ">
    <button type="submit" name="<?= $equipes[$i]->getPays()?>" class="btn btn-danger"><?= $equipes[$i]->getPays()?></button>
      </a>
      
    <?php endfor ?>
  </div>
</form>

<?php
$titre = "WORLD CUP 2022";
$contentPelouse = ob_get_clean();
ob_start();
$tab=["Manon","Clement"];
?>

<div class="position-absolute top-50 start-50 translate-middle" style="width:1000px">

<?php 
foreach($tab as $auteur){?>
    <img style="height:250px "class="rounded" src="../../Image/Auteurs/<?= $auteur?>.jpg" >
</div>

<?php }
$contentBanc=ob_get_clean();
require "../Global/Template.php";
?>