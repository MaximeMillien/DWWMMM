<?php
$nombre = rand(1,20);
echo "Le nombre aléatoire est : " . $nombre;

if ($nombre >= 1 && $nombre <= 5){
    echo ("Votre nombre est entre 1 et 5");
}elseif ($nombre > 6 && $nombre < 10){
    echo ("Votre nombre est entre 6 et 10");
}elseif ($nombre > 11 && $nombre < 15){
    echo ("Votre nombre est entre 11 et 15");
}elseif ($nombre > 16 && $nombre < 20){
    echo ("Votre nombre est entre 16 et 20 \n");
}
// echo $nombre;
?>