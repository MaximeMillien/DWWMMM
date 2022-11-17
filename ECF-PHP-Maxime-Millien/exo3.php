<?php
$ValB = 0;
$ValB² = $ValB * $ValB;
$continuer = 0;
$oui = "O";
$non = "N";
echo "                Racine de l'équation du 2nd dégré                     \n                       Y = ax² + bx + c " . "\n";

$ValA = readline ("Quelle est la valeur de A : ");
$ValB = readline ("Quelle est la valeur de B : ");
$ValC = readline ("Quelle est la valeur de C : ");

$Delta = $ValB² -4 *($ValC) * ($ValA);

if ($Delta < 0 ){
echo ("L'équation ne posséde pas de racine réelle \n Delta = " . $Delta . "\n" );
}
if ($Delta > 0 ){
    $X1 = (-$ValB + sqrt($Delta)/ (2*$ValA));
    $X2 = (-$ValB - sqrt($Delta)/ (2*$ValA));
    echo ("L'équation possède 2 racines différentes : " ."\n" . $Delta . "\n");
    echo "L'équation s'annule pour : "  . "\n" ;
    echo "X1 = " . $X1 . "\n";
    echo "X2 = " . $X2;
} 
if ($Delta == 0 ) {
    echo ("L'équation possède une racine double : \n");
    echo "Delta = " . $Delta . "\n";
    echo "X1 = X2 = " . $Delta;
}


?>