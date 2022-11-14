<?php

$chomage = array("Autriche" => 4.9 , "Allemagne" =>9.3 , "Danemark" =>4.8 , "Espagne" =>9.4 , "France" =>9.7);


foreach ($chomage as $pays => $value){
        echo "Le chômage en " . $pays . " est de " . $value ."\n";
    if ($value < 5){
        echo "Les pays ayant moins de 5% de chômage sont : " . $pays . "\n";
    }
}

?>