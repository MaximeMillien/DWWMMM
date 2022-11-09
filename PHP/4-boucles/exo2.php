<?php 
$nombre = readline("Choisissez un nombre entre 10 et 20 : ");

while ($nombre < 10 || $nombre > 20){
    

    if ($nombre < 10){
        echo ("Plus grand ! \n");
    }else{
        echo ("plus petit \n");
    }

    $nombre = readline(" svp Choissisez un nombre entre 10 et 20 : ");

}
echo ("bravo");



?>