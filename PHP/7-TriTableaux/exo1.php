<?php

$Taille = readline ("Choisissez une valeur : ");
$tab = [] ;

    for ($i = 0; $i<$Taille;$i++){
        $nombre = readline ("Choisissez un nombre : ");
         $tab[$i] =$nombre;
    }
    for ($i = 0; $i<count ($tab);$i++){
    echo $i . " " . $tab[$i] . "\n";
    }
    for ($i = 0; $i<count ($tab);$i++){
        if ($tab[$i+1] == $tab[$i]+1) {
            echo "Les valeurs sont successives" . "\n" ;
            break;
        }
        else {
            echo "Les valeurs ne sont pas successives". "\n" ;
            break;
        }
    }
    
?>