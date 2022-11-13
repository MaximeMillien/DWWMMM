<?php

$phrase = readline ("Entrez une phrase : ");
$nombre = 0;
$voy = ["a","e","i","o","u","y"];

for ($i = 0 ; $i < count($voy) ; $i++);
    if ($nombre < $voy){
        $nombre = $nombre + 1;
    }
    echo "Il y a " . $nombre  . " voyelles";
?>