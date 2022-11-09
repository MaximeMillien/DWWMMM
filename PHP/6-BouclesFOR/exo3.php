<?php
$nombre = readline ("Entrez un nombre : ") ;
$fact = 1;

for ($i = 1; $i <= $nombre ; $i++ ){
    $fact = $fact * $i;
}
echo "La factorielle de  $i est $fact ";

?>