<?php

echo "          ********** Table de multiplication **********                   \n";
$nombre = readline ("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
$oui = "O";
!$oui = "N";
$estVrai = true;

// $tab = [1];
while ($estVrai = true){
    $estVrai = false;
for ($i = 0 ; $i <= 10 ; $i++ ){
    $calcul = ($nombre * $i);
    echo $nombre . " * ". $i . " = " . $calcul  ."\n";
} 
$continuer = readline ("Voulez-vous continuer ? : " );
if ($oui){
    $nombre = readline ("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
    for ($i = 0 ; $i <= 10 ; $i++ ){
        $calcul = ($nombre * $i);
        echo $nombre . " * ". $i . " = " . $calcul  ."\n"; 
    } if (!$oui){
        echo "fin";
    }
}
}
// echo $continuer;

?>