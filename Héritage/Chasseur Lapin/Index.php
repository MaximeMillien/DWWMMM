<?php
require "classeLapin.php";
require "classeChasseur.php";

$lapin = new Lapin("blanc",4);
$chasseur = new Chasseur("Paul","fusil");

echo "Le lapin" . $lapin->getCouleur() . "à" . $lapin->getPattes() . "a été créé";
echo "Le chasseur " . $chasseur->getNom() . " à été créé avec un " . $chasseur->getArme();
echo $chasseur->getNom() . " avance avec son " . $chasseur->getArme();
echo "Le lapin " . $lapin->Crier();

while ($lapin->getenVie()){
    $lapin->setEnVie(rand(1,6));
    if ($lapin->getEnVie==1 || $lapin->getEnVie==6){
       echo $chasseur->SeDeplacer() . " avec "  . $chasseur->getArme() . " et le touche." . "\n"; 
       echo $lapin->seDeplacer() ;
    }
    else{
        echo $chasseur->Chasser() . " et le rate ";
        echo $lapin->seDeplacer();
    }
}

?>