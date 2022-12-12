<?php
// Tableau associatif 
$tab = array('H' => "Hydrogène" ,
            'He' => "Hélium" ,
            'P' => "Phosphore" ,
            'V' => "Vanadium" , 
            'Pb' => "Plomb" , 
            'I' => "Iode" , 
            'Kr' => "Krypton" , 
            'X' => "Xénon" , 
            'Rn' => "Radon" , 
            'Zr' => "Zirconium"            
);
// Affiche les elements du tableau avec leur symbole
    foreach($tab as $key => $valeur){
        echo $key . " : " . $valeur . "\n";
    }
echo "***************************** \n Tableau trié : ";
// classe par ordre alphabétique le tableau
ksort($tab);
    foreach($tab as $key => $valeur){
    echo $key . " : " . $valeur . "\n";
}
?>