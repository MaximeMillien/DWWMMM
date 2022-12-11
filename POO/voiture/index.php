<?php
require "classeVoiture.php";
$voiture1 = new Voiture("grise" , "Citroen" , "C4" , 100000 , "essence");
$voiture2 = new Voiture("rouge" , "Renault" , "Kajdar" , 50000 , "Diesel"); 

echo $voiture1->__toString() ;
echo $voiture2->__toString() ;

echo "Le nouveau kilométrage est de " . $voiture1->Rouler($voiture1 , 9999) . " kilométres.";

?>