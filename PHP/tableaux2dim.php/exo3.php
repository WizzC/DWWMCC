<?php
$tab = array();
for( $i=0 ; $i <=8 ; $i++){
    $comp++;
    for( $j=0; $j<=8 ; $j++){
        if($i>=8-($j-1) && $i<=8+($j-1)){
        $nombre = $comp*"0";
        
             echo"X" . $nombre . "X";

          
        }
          
        
       
    }
echo "\n";
}
?>