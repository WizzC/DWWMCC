<?php ob_start() ?>
<?php
require("fonction.php");
$tab = [24, 31, 54, 33, 61, 41, 45, 41, 72, 81, 62];
afficherTableau($tab);
?>
---------------------------------------
<?php
calculerMoyenne($tab);
?>
---------------------------------------
<?php
estTableauPair($tab)
?>
<?php
$titre = "Exo 3";
$content = ob_get_clean();
require "template.php";
?>