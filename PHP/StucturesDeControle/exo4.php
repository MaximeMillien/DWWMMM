<?php 
$nombre1 = readline ("Choissisez un nombre : ");
$nombre2 = readline ("Choissisez un nombre : ");

if ($nombre1 == 0 || $nombre2 == 0){
    echo "null";
} elseif (($nombre1 < 0 && $nombre2 < 0) || ($nombre1 > 0 && $nombre2 > 0)){
    echo "Le résultat est positif";
} else {
    echo "C'est négatif";
}
?>