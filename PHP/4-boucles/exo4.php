<?php 
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



?>