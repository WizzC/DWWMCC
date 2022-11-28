<?php ob_start() ?>

<?php
$nombre1 = 5;
$nombre2 = 122;
$pair1 = null ;
if($nombre1 % 2 == 0){
    $pair = "pair";
}
else{
    $pair = "impair";
}
?>
<p>Le nombre <?= $nombre1 ?> est <?= $pair ?></p>
<?php
if($nombre2 % 2 == 0){
    $pair = "pair";
}
else{
    $pair = "impair";
}
?>
<p>Le nombre <?= $nombre2 ?> est <?= $pair ?></p>


<?php 
$titre = "Exo 3";
$content = ob_get_clean();
require "template.php";
?>