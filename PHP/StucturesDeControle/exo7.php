<?php 

$heure = readline ("Entrez une heure : ");
$minute = readline ("Entrez une minute : "); 
$seconde = readline ("Entrez une seconde : ");

($minute = $minute + 1);

if ($minute == 60){
    $minute = 0;
    $heure = $heure + 1;
}
if ($minute >= 61){
    $minute = $minute - 60;
    $minute == 1;
}
if ($heure == 24){
    $heure = 0;
}
if ($seconde <= 60){
    $minute = $seconde + 60;
    $seconde == 1;
    $seconde = $seconde + 1;
}

echo ("dans une seconde il sera $heure $minute $seconde " );
?>