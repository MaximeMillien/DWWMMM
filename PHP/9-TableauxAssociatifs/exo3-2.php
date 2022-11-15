<?php

$tabNotes = array ("prenot" => array (2,10,14), "perthuis" => array (10,18,12));

foreach ($tabNotes as $key => $value){
    
    echo "La moyenne de " . $key . " est de ". round (array_sum ($value) / count($value),2) . "\n"; 
}

?>