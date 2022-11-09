<?php
$saisie = readline ("Choisissez un premier nombre : ");
$max = $saisie;
$min = $saisie;

for ($i = 1 ; $i < 5 ; $i++){
$saisie = readline ("Saisissez un nombre: ");
if ($max < $saisie){
    $max = $saisie;
}
else if ($min > $saisie){
    $min = $saisie;
}
}
echo $min;
echo "\n". $max;

?>