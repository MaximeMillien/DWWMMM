<?php 
$nombre = readline ("Choisissez un nombre : ");

if ($nombre < 7) {
    echo ("Bonjour");
}elseif ($nombre >= 7 && $nombre < 14){
    echo ("Salut");
}else{
    echo ("Hello");
}


?>