<?php

$tabNotes = array ("prenot" => array (2,10,14), "perthuis" => array (10,18,12));

foreach ($tabNotes as $key => $value){
    echo $key;
   foreach ($value as $notes){
        echo " " .$notes;
    }
    echo "\n";
}

?>