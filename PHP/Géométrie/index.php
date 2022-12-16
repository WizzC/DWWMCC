<?php

require "classParrallépipède.php";
require "classPyramide.php";
require "classSphere.php";

// instancie class Rectangle
$rectangle1 = new Rectangle(5,10);
$rectangle2 = new Rectangle(5,5);
$rectangle3 = new Rectangle(12,6);
// va chercher les fonctions 
$rectangle1->perimetre();
$rectangle1->aire();
$rectangle1->estCarre();
// afficher les calculs
echo $rectangle1->afficherRectangle() . "\n" . "-----------------------" . "\n";

$rectangle2->perimetre();
$rectangle2->aire();
$rectangle2->estCarre();
echo $rectangle2->afficherRectangle() . "\n" . "-----------------------" . "\n";

$rectangle3->perimetre();
$rectangle3->aire();
$rectangle3->estCarre();
echo $rectangle3->afficherRectangle() . "\n" . "-----------------------" . "\n";

// instancie class Triangle
$triangle1 = new Triangle(5,10);
$triangle2 = new Triangle(10,20);
$triangle3 = new Triangle(2,60);
// va chercher les fonctions
$triangle1->perimetreTriangleRectangle();
$triangle1->aireTriangleRectangle();
// afficher les calculs
echo $triangle1->afficherTriangleRectangle() . "\n" . "-----------------------" . "\n";

$triangle2->perimetreTriangleRectangle();
$triangle2->aireTriangleRectangle();
echo $triangle2->afficherTriangleRectangle() . "\n" . "-----------------------" . "\n";

$triangle3->perimetreTriangleRectangle();
$triangle3->aireTriangleRectangle();
echo $triangle3->afficherTriangleRectangle() . "\n" . "-----------------------" . "\n";

// instancie class Cercle
$cercle1 = new Cercle(10);
$cercle2 = new Cercle(15);
$cercle3 = new Cercle(26);
// va chercher les fonctions
$cercle1->perimetreCercle();
$cercle1->aireCercle();
// afficher les calculs
echo $cercle1->afficherCercle() . "\n" . "-----------------------" . "\n";

$cercle2->perimetreCercle();
$cercle2->aireCercle();
echo $cercle2->afficherCercle() . "\n" . "-----------------------" . "\n";

$cercle3->perimetreCercle();
$cercle3->aireCercle();
echo $cercle3->afficherCercle() . "\n" . "-----------------------" . "\n";

// instancie class Parrallepipede
$parrallepipede1 = new Parrallepipede(10,10,20);
$parrallepipede2 = new Parrallepipede(15,11,25);
$parrallepipede3 = new Parrallepipede(14,20,30);
// va chercher les fonctions
$parrallepipede1->perimetreParrallepipede();
$parrallepipede1->volumeParrallepipede();
// afficher les calculs
echo $parrallepipede1->afficherParrallepipede() . "\n" . "-----------------------" . "\n";

$parrallepipede2->perimetreParrallepipede();
$parrallepipede2->volumeParrallepipede();
echo $parrallepipede2->afficherParrallepipede() . "\n" . "-----------------------" . "\n";

$parrallepipede3->perimetreParrallepipede();
$parrallepipede3->volumeParrallepipede();
echo $parrallepipede3->afficherParrallepipede() . "\n" . "-----------------------" . "\n";

// instancie class Parrallepipede
$pyramide1 = new Pyramide(20,12,8);
$pyramide2 = new Pyramide(12,53,88);
$pyramide3 = new Pyramide(120,2,28);
// affiche le volume de la pyramide
echo "Le volume de la Pyramide est de : " . $pyramide1->volumePyramide() . "\n" . "-----------------------" . "\n";
echo "Le volume de la Pyramide est de : " . $pyramide2->volumePyramide() . "\n" . "-----------------------" . "\n";
echo "Le volume de la Pyramide est de : " . $pyramide3->volumePyramide() . "\n" . "-----------------------" . "\n";

$sphere1 = new Sphere(20);
$sphere2 = new Sphere(12);
$sphere3 = new Sphere(120);
// affiche le volume de la sphere
echo "Le volume de la sphere est de : " . round($sphere1->volumeSphere(),2) . "\n" . "-----------------------" . "\n";
echo "Le volume de la sphere est de : " . round($sphere2->volumeSphere(),2) . "\n" . "-----------------------" . "\n";
echo "Le volume de la sphere est de : " . round($sphere3->volumeSphere(),2) . "\n" . "-----------------------" . "\n";

?>