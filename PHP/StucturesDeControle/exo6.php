<?php

$heure = readline ("Entrez une heure : ");
$minute = readline ("Entrez une minute : "); 

($minute = $minute + 1);

if ($minute == 60){
    $minute = 0;
    $heure = $heure +1;
}
if ($minute >= 61){
    $minute = $minute - 60;
    $minute == 1;
    $heure = $heure +1;
}
if ($heure == 24){
    $heure = 0;
}


// ($heure = $heure + 1);
// if ($minutes == 61){

// if ($minute + 1);
//     ($minute = 1);
// }

echo ("dans une minute il sera $heure . $minute ");
?>