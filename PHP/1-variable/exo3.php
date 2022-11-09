<?php 
$A = 3;
$B = 10;
$C = $A + $B;
$B = $A + $B;
$A = $C;

echo "La valeur de A vaut : " . $A . "\n";
echo "La valeur de B vaut : " . $B . "\n";
echo "La valeur de C vaut : " . $C;

?>