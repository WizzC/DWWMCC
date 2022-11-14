<?php
$tabNotes = array('boucher' =>16, 
'bourdette' =>13, 
'jean' =>14, 
'dupond' =>4, 
'dupont' =>17, 
'jean-paul' =>20);
// print_r($tabNotes);
foreach($tabNotes as $key => $valeur){
    echo $key . " a une moyenne de : " . $valeur . "\n";
}
echo "La moyenne de la classe est de : " . array_sum($tabNotes)/count($tabNotes);

?>