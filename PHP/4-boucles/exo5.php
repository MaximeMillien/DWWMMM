<?php 
$NombreA ;
$NombreB ;

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

?>