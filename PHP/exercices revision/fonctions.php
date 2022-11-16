<?php

function majuscule(){
    $text = ucwords("je suis maxime");
    echo $text;
}

function nombre(){
    $nombre1 = readline ("Choisissez un premier nombre : ");
    $nombre2 = readline ("Choisissez un deuxieme nombre : ");
    if ($nombre1 < $nombre2){
    echo (  $nombre2 . " est supérieur à " . $nombre1);
    }elseif ($nombre2 > $nombre1){
        echo (  $nombre1 . " est supérieur à  " . $nombre2);
    } else {
        echo ("C'est égalité");
    }
}

?>