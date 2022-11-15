<?php

$chomage = array("Autriche" => 4.9 , "Allemagne" =>9.3 , "Danemark" => 4.8 , "Espagne" =>9.4 , "France" =>9.7);
$min = 100;


foreach ($chomage as $pays => $value){
    if ($value < $min){
        $min = $value;
        $paysMin = $pays;
}

}echo "Le pays ayant le taux de chômage le plus faible est : " . $paysMin . $min ."\n";
?>