<?php 
$PrixHT = readline ("Prix HT : ");
$nombreArticle = readline ("Nombre d'article : ");
define ("TVA", 1.2);

echo "Prix TTC : " . $PrixHT * $nombreArticle * TVA;
?>