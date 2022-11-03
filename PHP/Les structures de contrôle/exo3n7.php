<?php
$heure = readline("heure: ");
$minute=  readline("minute: ");
$seconde= readline("seconde: ");
$minute=$minute+1;
if($seconde>=60){
    $seconde=$seconde-60;
    $minute=$minute+1;
    if($minute>=60){
        $minute=$minute-60;
        $heure=$heure+1;
    }
}
elseif($minute>=60){
    $minute=$minute-60 ; 
    $heure=$heure+1;

}
echo $heure . ("heures") ;
echo $minute . ("minutes");
echo $seconde . ("secondes");
?>