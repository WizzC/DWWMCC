<?php

require "classParrallépipède.php";
require "classPyramide.php";
require "classSphere.php";

// instancie class Rectangle
$rectangle1 = new Rectangle(5,10);
$rectangle2 = new Rectangle(5,5);
$rectangle3 = new Rectangle(12,6);
$rectangles = [$rectangle1,$rectangle2,$rectangle3];
foreach($rectangles as $value){
// afficher les calculs
echo $value->afficherRectangle() . "\n" . "-----------------------" . "\n";
}


// instancie class Triangle
$triangle1 = new Triangle(5,10);
$triangle2 = new Triangle(10,20);
$triangle3 = new Triangle(2,60);
$triangles = [$triangle1,$triangle2,$triangle3];

foreach($triangles as $value){
// afficher les calculs
echo $value->afficherTriangleRectangle() . "\n" . "-----------------------" . "\n";
}


// instancie class Cercle
$cercle1 = new Cercle(10);
$cercle2 = new Cercle(15);
$cercle3 = new Cercle(26);
$cercles = [$cercle1,$cercle2,$cercle3];
foreach($cercles as $value){
echo $value->afficherCercle() . "\n" . "-----------------------" . "\n";
}

// instancie class Parrallepipede
$parrallepipede1 = new Parrallepipede(10,10,20);
$parrallepipede2 = new Parrallepipede(15,11,25);
$parrallepipede3 = new Parrallepipede(14,20,30);
$parrallepipedes = [$parrallepipede1,$parrallepipede2,$parrallepipede3];
// afficher les calculs
foreach($parrallepipedes as $value){
echo $value->afficherParrallepipede() . "\n" . "-----------------------" . "\n";
}


// instancie class Parrallepipede
$pyramide1 = new Pyramide(20,12,8);
$pyramide2 = new Pyramide(12,53,88);
$pyramide3 = new Pyramide(120,2,28);
$pyramides = [$pyramide1,$pyramide2,$pyramide3];
// affiche le volume de la pyramide
foreach ($pyramides as $value){
echo "Le volume de la Pyramide est de : " . $value->volumePyramide() . "\n" . "-----------------------" . "\n";
}
$sphere1 = new Sphere(20);
$sphere2 = new Sphere(12);
$sphere3 = new Sphere(120);
$spheres = [$sphere1,$sphere2,$sphere3];
// affiche le volume de la sphere
foreach($spheres as $value){
echo "Le volume de la sphere est de : " . round($value->volumeSphere(),2) . "\n" . "-----------------------" . "\n";
}
?>