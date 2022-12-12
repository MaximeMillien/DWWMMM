<?php
require "classeVoiture.php";
$voiture1 = new Voiture("grise" , "Citroen" , "C4" , 100000 , "essence");
$voiture2 = new Voiture("rouge" , "Renault" , "Kajdar" , 50000 , "Diesel"); 

$voitures =[$voiture1, $voiture2];
foreach ($voitures as $value){
    echo $value->__toString() . "\n";
}

// echo $voiture1->__toString() ;
// echo $voiture2->__toString() ;

// echo "Le nouveau kilométrage est de " . $voiture1->Rouler($voiture1 , 9999) . " kilométres.";

$voiture1->Rouler(555);
echo $voiture1;

?>