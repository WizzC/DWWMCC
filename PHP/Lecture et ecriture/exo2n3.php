<?php
$prixHT = readline("Prix HT : ");
$nombre = readline("Nombre article : ");
define("tva",1.2);
$prixTTC = $prixHT * $nombre * tva;

echo "Prix TTC : " . $prixTTC;




?>