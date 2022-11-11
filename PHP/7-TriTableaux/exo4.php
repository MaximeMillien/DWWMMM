<?php
$tab=["Didier","des","champs","Clément","tortues"];
$dico = readline ("Choisissez un mot : ");

for ($i = 0 ; $i < count($tab); $i++){
if ($tab[$i] == $dico){
    echo $i;
}
}

?>