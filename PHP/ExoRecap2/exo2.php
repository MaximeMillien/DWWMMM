<?php

$phrase = readline ("Entrez une phrase : ");
$nombre = 0;
$voy = ["a","e","i","o","u","y"];
$lettre = [];

$lettre = str_split($phrase);
for ($i = 0 ; $i < count($lettre) ; $i++){
    for ($j = 0; $j < count($voy);$j++){
    if ($lettre[$i] == $voy[$j]){
        $nombre = $nombre + 1;
    }
    }
    }
    echo "Il y a " . $nombre  . " voyelles";
?>