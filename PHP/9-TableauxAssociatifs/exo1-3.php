<?php

$chomage = array("Autriche" => 4.9 , "Allemagne" =>9.3 , "Danemark" =>4.8 , "Espagne" =>9.4 , "France" =>9.7);

foreach ($chomage as $pays => $value){
    min ($value);
    echo "Le pays ayant le taux de chômage le plus faible est : " . $pays . "\n";
}

?>