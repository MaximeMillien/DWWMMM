<?php
$paysMonnaie = readline ("Choisissez un pays n'utilisant pas l'euro : ");
$Pays = ("Angleterre" . "USA" . "Canada" . "Japon"  . "Mexique" . "Maroc" . "Inde" );
$euro = readline ("Choisissez un montant : ");
$conversion = 0;

    
if ($paysMonnaie == "Angleterre"){
    $conversion = $euro * 0.8722;
    echo "$conversion" . "\n";
} elseif ($paysMonnaie == "USA"){
    $conversion = $euro * 1.0348;
    echo "$conversion" . "\n";
} elseif ($paysMonnaie == "Canada"){
    $conversion = $euro * 1.3739;
    echo "$conversion" . "\n";
} elseif ($paysMonnaie == "Japon"){
    $conversion = $euro * 144.1500;
    echo "$conversion" . "\n";
} elseif ($paysMonnaie == "Mexique"){
    $conversion = $euro * 20.11;
    echo "$conversion" . "\n";
} elseif ($paysMonnaie == "Maroc"){
    $conversion = $euro * 11.1010;
    echo "$conversion" . "\n";
} elseif ($paysMonnaie == "Inde"){
    $conversion = $euro * 84.66;
    echo "$conversion" . "\n";
}


?>