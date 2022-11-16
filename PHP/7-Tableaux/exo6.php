<?php

$tab = [15,11,9,4,8,10];
$moyenne = 0;

for ($i = 1 ; $i < 6 ; $i++){
    $moyenne = $tab[$i]/ $tab[$i];
}    echo "La moyenne est de " . $moyenne . "\n";









// $saisie = readline ("Nombre : ");
// $max = $saisie;
// $min = $saisie;

// for ($i = 1 ; $i < 5 ; $i++){
//     $saisie = readline ("Saisissez un nombre: ");
//     if ($max < $saisie){
//         $max = $saisie;
//     }
//     else if ($min > $saisie){
//         $min = $saisie;
//     }
//     }
//     echo $min;
//     echo "\n". $max;

?>