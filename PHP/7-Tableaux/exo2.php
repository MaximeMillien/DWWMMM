<?php
$Taille = readline ("Choisissez un nombre : ");
$valeur = [];
$ValN = 0;
$ValP = 0;
for ( $i = 0 ; $i < $Taille ; $i++){
    $nombre = readline ("Entrez les valeurs du tableau : ");
    if ($nombre < 0){
    $ValN = $ValN + 1;
    } else {
        $ValP = $ValP + 1;
    }
    $valeur[$i] = $nombre;

}
for($i = 0 ; $i < count($valeur); $i++){
    echo $valeur[$i] . "\n";
}
echo "Le nombre de valeur négatif est : " . $ValN . "\n";
echo "Le nombre de valeur poitif est : " . $ValP ;
?>