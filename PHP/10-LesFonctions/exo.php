<?php
require ("fonctions.php");
echo " 1.exo1\n 2.exo2\n 3.exo3\n 4.exo4\n 5.exo5\n 6.exo6\n 7.exo7" ."\n";
$Menu = readline("Choisis un exo frero et fait vite !") ;

echo "\n" ;

switch($Menu){
case 1 :
prix();
break;

case 2 :
PGCD();
break;

case 3 :
PPCM();
break;

case 4 :
multiplicateur();
break;

case 5 :
factorielle ();
break;

case 6 :
tableau();
break;

case 7 :
figure();
break;
}
?>