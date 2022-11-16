<?php
$valeur = readline ("Choisissez un nombre entre 100 et 1000 : ");
$aleatoire = rand (100,1000);
$nombre = 0;

while ($valeur != $aleatoire){
    $nombre++;
    $aleatoire = rand (100,1000);

}
echo ("même valeur en " . $nombre . " essai(s)");


?>