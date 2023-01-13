<?php
$chomage = array('Autriche' =>4.9, 
'Allemagne' =>9.3 ,
'Danemark' =>4.8 ,
' Espagne' =>9.4 ,
'France' =>9.7); 
$valeurmin = 10000;

foreach($chomage as $key => $valeur ){
    echo "Le pays " . $key . " a : " . $valeur ."% de chomage ";
     
echo  "\n";
}

foreach($chomage as $key => $valeur ){
    
    if($valeur < $valeurmin){
    $keymax = $key;
    $valeurmin = $valeur;
}
if($valeur<= 5 ){
        echo "Le " . $key . " a un taux de chomage inferieur à 5% \n"; 
    } 


}
echo "La " . $keymax ." a le plus haut taux de chomage avec " . $valeurmin . "% de chomage"; 


  

?>
