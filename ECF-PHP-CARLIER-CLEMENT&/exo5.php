<?php
// Declare que la variable element est un tableau
$element = [] ;
// booleen
$estvrai = true ;
// fait le tableau et l'affiche
for( $i=0 ; $i<10 ; $i++ ){
    $saisie = rand(20,100);
    $element[$i] = $saisie ;
echo $saisie . "\n";
}
// Permet de choisir le switch
$switch = readline("0. Quitter
1. Trier le tableau en ordre croissant
2. Trier le tableau en ordre décroissant
3. Remplir un troisième tableau en additionnant chaque élément du tableau 1 et 2.
4. Inverser le tableau 3");

switch($switch){
    case 0 :
        echo "Quitter ";
        break;
    case 1 : 
        // Permet de trier par ordre croissant
$tab1 = sort($element);
        foreach($element as $valeur){
            echo $valeur . "\n";
        }
        break;
 // Permet de trier par ordre décroissant
    
    case 2 : 
        $tab2 = rsort($tab);
        foreach($tab as $valeur){
            echo $valeur . "\n";
        }
        break;



    case 3 :
        $tab1 = [] ;
        $tab2 = [] ;
        $tab3 = [] ;
        // Permet de faire 2 tableaux 
        for( $i=0 ; $i<10 ; $i++ ){
            $saisie = rand(20,100);
            $tab1[$i] = $saisie ;
        }
        for( $i=0 ; $i<10 ; $i++ ){
            $saisie = rand(20,100);
            $tab2[$i] = $saisie ;
        }
        // Permet d'additionné les 2 tableaux
        for($i=0;$i<count($tab1);$i++){
            $tab3[$i] = $tab1[$i] + $tab2[$i];
            echo $i . "-" . $tab3[$i] . "\n"; 
            
        }
break;
        case 4 :
        $tab1 = [] ;
        $tab2 = [] ;
        $tab3 = [] ;
        // Permet de faire 2 tableaux 
        for( $i=0 ; $i<10 ; $i++ ){
            $saisie = rand(20,100);
            $tab1[$i] = $saisie ;
        }
        for( $i=0 ; $i<10 ; $i++ ){
            $saisie = rand(20,100);
            $tab2[$i] = $saisie ;
        }
        // Permet d'additionné les 2 tableaux
        for($i=0;$i<count($tab1);$i++){
            $tab3[$i] = $tab1[$i] + $tab2[$i]; 
            echo $i . "-" . $tab3[$i] . "\n";
        }
        // Permet d'inversé le 3e tableau
        echo "Tableaux inversé \n";
            for($i=0;$i<count($tab1);$i++){
                $tab3[$i] = $tab1[$i] + $tab2[$i];
                echo $i . "-" . $tab3[9-$i] . "\n"; 
                
            }        
break;
}
?>