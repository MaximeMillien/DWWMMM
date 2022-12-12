<?php
require "classePyramideBaseTriangle.php";
require "classeSphere.php";
require "classePave.php";

$rectangle1 = new Rectangle(10,10);
$rectangle2 = new Rectangle(5,7);
$rectangle3 = new Rectangle(161,452);

$rectangles = [$rectangle1 , $rectangle2 , $rectangle3];
foreach ($rectangles as $value){
    echo $value->afficherRectangle();
}

$triangle1 = new TriangleRectangle(10,50);
$triangle2 = new TriangleRectangle(100,40);
$triangle3 = new TriangleRectangle(20,20);

$triangles = [$triangle1 , $triangle2 , $triangle3];
foreach ($triangles as $value){
echo $value->afficherTriangle();
}

$cercle1 = new Cercle(5);
$cercle2 = new Cercle(16);
$cercle3 = new Cercle(554);

$cercles = [$cercle1 , $cercle2 , $cercle3];
foreach ($cercles as $value){
echo $value->AfficherCercle();
}

$pave1 = new Pave(5,4);
$pave2 = new Pave(54,54);
$pave3 = new Pave(10,20);
$paves = [$pave1 , $pave2 , $pave3];
foreach ($paves as $value){
    echo $value->Afficher();
}
?>