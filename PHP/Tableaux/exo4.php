<?php
// $valeur1 = [ "1" , "2" , "3" , "4" , "5" ] ;
// echo "tableau 1 :" . "\n" ;

// for( $i=0 ; $i < count($valeur1) ; $i++ ){
    
//     echo $i . " : " . $valeur1[$i] . "    ";
// } 

//  echo "\n" . "tableau 2 :" . "\n" ;

//  $valeur2 = [ "11" , "22" , "33" , "44" , "55" ] ;
//  for( $i=0 ; $i < count($valeur2) ; $i++ ){
     
//      echo $i . " : " . $valeur2[$i] . "     ";
// } 
  
// echo "\n";

// for( $i=0 ; $i <= 4  ; $i++ ){

//    $valeur3 = $valeur1 + $valeur2;
   
    
//     echo $i . " : " . $valeur3 . "     ";

// }
$valeur1 = [4,8,7,9,1,5,4,6];
$valeur2 = [7,6,5,2,1,3,7,4];
$valeur3 = [];
for($i=0;$i<count($valeur1);$i++){
    $valeur3[$i] = $valeur1[$i] + $valeur2[$i];
    echo $i . "-" . $valeur3[$i] . "    "; 
    
}
// chercher une valeur dans un tableau
for($i=0;$i<count($valeur3);$i++){
    echo $valeur3[2] . "\n" ;
}
?>