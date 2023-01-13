<?php
$valeur1 = [4,8,7,9,1,5,4,6];
$valeur2 = [7,6,5,2,1,3,7,4];
$tab = [];
$estvrai = true ;

for($i=0;$i<count($valeur1);$i++){
    $tab[$i] = $valeur1[$i] + $valeur2[$i];
    echo $i . "-" . $tab[$i] . "    "; 
    
}
while($estvrai){
    $estvrai = false ;
    for( $i=0; $i<=count($tab)-2 ; $i++ ){
        if($tab[$i] > $tab[$i+1]){
            $temp = $tab[$i];
            $tab[$i] = $tab[$i+1] ;
            $tab[$i+1] = $temp ;
            $estvrai = true ;
            
        }
        
    }
    
 }
 foreach($tab as $valeur){
    echo $valeur . "\n";
}
?>