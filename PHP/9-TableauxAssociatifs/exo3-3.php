<?php
$tabNotes = array ("prenot" => array (2,10,14), "perthuis" => array (10,18,12));
$nom = readline ("Choisissez un nom : ");

foreach ($tabNotes as $key => $value){
    if ($nom == $key){
        echo "La moyenne de " . $key . " est de ". array_sum ($value) / count($value) . "\n"; 
    
    foreach ($value as $notes){
        echo  $notes . " ";
    }
   }
    
}


?>