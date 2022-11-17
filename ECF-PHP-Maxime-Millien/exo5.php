<?php
require ("fonctions.php");

echo " 0.Quitter\n 1.Tableau croissant\n 2.Tableau décroissant\n 3.Addition\n 4.Tableau inversé\n";

$Menu = readline ("Choisissez un nombre : ");

echo "\n";

// for ($i = 0 ; $i <10 ; $i++){
//    echo " " . rand (20,100);
// }
switch ($Menu){
    case "0" :
    quitter();
    break;   

    case "1" :
    croissant();
    break;

    case "2" :
    decroissant();
    break;

    case "3" :
    addition();
    break;

    case "4" :
    inverse();
    break;
}

?>