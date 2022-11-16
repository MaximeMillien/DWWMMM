<?php

function prix(){
    
    $PrixHT = readline ("Prix HT : ");
$nombreArticle = readline ("Nombre d'article : ");
define ("TVA", 1.2);

echo "Prix TTC : " . $PrixHT * $nombreArticle * TVA;
return;
}


function PGCD() {

$nombre1 = readline ("Choisissez un premier nombre : ");
$nombre2 = readline ("Choisissez un deuxieme nombre : ");

while ( $nombre1 * $nombre2 != 0){
    if ($nombre1 > $nombre2){
        ($nombre1 = $nombre1 - $nombre2);
    } else {
        ($nombre2 = $nombre2 - $nombre1);
    }
}
if ($nombre1 == 0 ){
    echo ("Le PGCD est ") . +$nombre2 ;
} else {
    echo ("PGCD est ") . +$nombre1;
}
return;

}

function PPCM (){
    $nombre1 = readline ("Choisissez un premier nombre : ");
    $nombre2 = readline ("Choisissez un deuxieme nombre : ");
    
    $NombreA = $nombre1;
    $NombreB = $nombre2;
    
    while (($nombre1 * $nombre2) !=0){
        if ($nombre1 > $nombre2){
            $nombre1 = $nombre1 - $nombre2;
        }else {
            $nombre2 = $nombre2 - $nombre1;
        }
    }
    if ($nombre1 == 0){ 
        echo ("Le PPCM est ") . + (($NombreA * $NombreB)/$nombre2);
    } else {
        echo ("PPCM est ") . + (($NombreA * $NombreB)/$nombre1);
    }
    return;
}

function multiplicateur(){
$nombre = readline("Quel chiffre voulez vous multiplier de 1 à 10");
$compteur = 0;
while ($compteur <10){
    $compteur = $compteur +1;

    echo ($nombre * $compteur . "\n");
}
return;
}

function factorielle(){
    $nombre = readline ("Entrez un nombre : ") ;
$fact = 1;

for ($i = 1; $i <= $nombre ; $i++ ){
    $fact = $fact * $i;
}
echo "La factorielle de  $i est $fact ";
return;
} 

function tableau(){
    $tab = [8,15,56,84,129];
$sum = array_sum($tab);

{
    echo ("La somme est de " .$sum);
}
return;
}

function figure(){
<<<<<<< HEAD
    $i = 1;
while ($i<14){
    for ($j=0 ; $j < $i ; $j++){
        if ($i>14 or $i<=14 or $j == 0 or $j == $i-1){
            echo "*";
        }
    }
    echo "\n";
    $i++;
}
=======
    
>>>>>>> ef723ee4909fc3c4af38a1f6d420fceb52bade92
}
?>