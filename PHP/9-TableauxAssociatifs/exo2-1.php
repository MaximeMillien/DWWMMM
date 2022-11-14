<?php

$tabNotes = array("boucher" => 16 ,"bourdette" => 13 , "trottoir" => 10 , "patate" => 8);

foreach ($tabNotes as $nom => $value){
    echo "L'élève " . $nom . " a obtenu une note de " . $value ."\n";
}
?>