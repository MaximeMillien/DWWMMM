<?php
require "classeRectangle.php";
require "classeTriangleRectangle.php";

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
?>