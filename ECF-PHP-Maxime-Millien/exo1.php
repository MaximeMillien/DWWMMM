<?php
$pi = 3.14;
$pi² = $pi*$pi;
$oui = "O";
!$oui = "N";
$rayon = 0;

echo "                          ********************                           " . "\n";
echo "                          CALCUL SUR LE CERCLE                           " ."\n";
echo "                          ********************                            " ."\n";

while ($calcul = true){
    
    if ($oui){
    $rayon = readline ("Quel est le rayon du cercle : ");
    $calcul = 2 * $pi * $rayon;
    $circonference = readline ("Sa circonférence est de : " . $calcul);
    $rayon² = $rayon * $rayon;
    $calculsurface = $pi * $rayon²;
    $surface = readline ("Sa surface est : " . $calculsurface);
    $calcul = readline ("Voulez-vous faire un autre calcul (O/N) : ");
    } 
        else {
        echo ("Au revoir et à bientôt");
    }

}
?>