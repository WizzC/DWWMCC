<?php
$heure = readline("heure: ");
$minute=  readline(("minute: "));
$minute=$minute+1;
if($minute>=60){
    $minute=$minute-60 ; 
    $heure=$heure+1;
    echo $heure . ("heures") ;
    echo $minute . ("minutes");
}
else{
echo $heure . ("heures") ;
echo $minute . ("minutes");}
?>