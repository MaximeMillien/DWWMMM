<?php

$nombre1 = readline ("Entrez un premier nombre : ");
$nombre2 = readline ("Entrez un deuxiéme nombre : ");
echo  "1 Addition" . "\n" . "2 Soustraction" . "\n" . "3 Multiplication" . "\n" . "4 soustraction" . "\n" ;
$operation = readline ("Quelle opération voulez-vous ? ") ;

switch ($operation){
    case "+" :
        echo ($nombre1 + $nombre2);
        break;
    case "-" :
        echo ($nombre1 - $nombre2);
        break;
    case "*" :
        echo ($nombre1 * $nombre2);
        break;
    case "/" :
        echo ($nombre1 / $nombre2);
        break;
}

?>