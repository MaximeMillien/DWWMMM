<?php
require "Interface.php";
require "classeLapin.php";
require "classeChasseur.php";

$lapin = new Lapin("blanc",4);
$chasseur = new Chasseur("Paul","fusil");

echo "Le lapin" . $lapin->getCouleur() . "à" . $lapin->getPattes() . "a été créé" . "\n";
echo "Le chasseur " . $chasseur->getNom() . " à été créé avec un " . $chasseur->getArme() . "\n";
echo $chasseur->getNom() . " avance avec son " . $chasseur->getArme() . "\n";
echo "Le lapin " . $lapin->Crier() . "\n";

while($lapin->getenVie()){
    $lapin->setEnVie(rand(1,6));
    if($lapin->getenVie()==1 || $lapin->getenVie()==6){
        $lapin->setEnVie(true);
    }
    else{
        $lapin->setEnVie(false) ;

    } 

echo $lapin->seNourrir();
echo $chasseur->seDeplacer() ;
echo $lapin->crier();
echo $chasseur->Chasser();
echo $lapin->seDeplacer();
}

?>