<?php

$tabNotes = array("boucher" => 16 ,"bourdette" => 13 , "trottoir" => 10 , "patate" => 7);

foreach ($tabNotes as $nom => $value){
    $notes = array ($value);
    echo $key .": ". $value .  "\n";
}
echo "La moyenne des notes est de " . array_sum ($notes) / 4 . "\n";

?>