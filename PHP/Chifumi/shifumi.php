<?php

$compteurjoueur = 0;
$compteurordi = 0;


while($compteurjoueur != 3 && $compteurordi != 3){
    $joueur = readline("Pierre, Ciseaux, Papier : ");
    $ordi = rand(1,3);

    if($ordi == 1){
        $ordi = "Pierre";
}
    elseif ( $ordi == 2){
        $ordi = "Ciseaux";
}
    elseif ( $ordi == 3){
        $ordi = "Papier";
}
    if($joueur == "Pierre" && $ordi == "Pierre"){
        echo $compteurjoueur . "-" . $compteurordi . " " ;
        echo "égalité. Recommence!" . "\n";
    }
    if($joueur == "Papier" && $ordi == "Papier"){
        echo $compteurjoueur . "-" . $compteurordi . " " ;
        echo "égalité. Recommence!" . "\n";
    }
    if($joueur == "Ciseaux" && $ordi == "Ciseaux"){
        echo $compteurjoueur . "-" . $compteurordi . " " ;
        echo "égalité. Recommence!" . "\n";
    }
    if($joueur == "Papier" && $ordi == "Pierre"){
        $compteurjoueur++ ;
        echo $compteurjoueur . "-" . $compteurordi . " gagné!" . "\n";
    }
    if($joueur == "Pierre" && $ordi == "Ciseaux"){
        $compteurjoueur++ ;
        echo $compteurjoueur . "-" . $compteurordi . " gagné!" . "\n";
    }
    if($joueur == "Ciseaux" && $ordi == "Papier"){
        $compteurjoueur++ ;
        echo $compteurjoueur . "-" . $compteurordi . " gagné!" . "\n";
    }
    if($joueur == "Pierre" && $ordi == "Papier"){
        $compteurordi++ ;
        echo $compteurjoueur . "-" . $compteurordi . " perdu!" . "\n";
    }
    if($joueur == "Papier" && $ordi == "Ciseaux"){
        $compteurordi++ ;
        echo $compteurjoueur . "-" . $compteurordi . " perdu!" . "\n";
    }
    if($joueur == "Ciseaux" && $ordi == "Pierre"){
        $compteurordi++ ;
        echo $compteurjoueur . "-" . $compteurordi . " perdu!" . "\n";
    }
}
if($compteurjoueur == 3){
    echo "GG!";
    
}
if($compteurordi == 3){
    echo "Perdu!";
}
?>