<?php ob_start() ?>
<?php
$tab = array(
    'Marie' => array("32","Femme"),
    'Pierre' => array("32","Homme"),
    'Riri' => array("28","Homme"),
    'Fifi' => array("28","Femme"),
    );
    foreach($tab as $key => $value){
        ?> <h1> Nom : <?=$key ?></h1>
        <?php
        foreach($value as $notes ){
        }
        ?>    <h1>Age :  <?= $value[0] ?></h1> <?php
        ?>    <h1>Sexe :  <?= $value[1] ?></h1> 
        ---------------------------------<?php
    }
?>
<?php 
$titre = "Exo 2";
$content = ob_get_clean();
require "template.php";
?>