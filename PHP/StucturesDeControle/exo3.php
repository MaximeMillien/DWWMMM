<?php 
$nombre = readline ("choissisez un nombre : ");

if ($nombre == 0){
    echo "c'est nulle";
}elseif ($nombre > 0){
    echo "'c'est positif";
}else{
    echo "Négatif";
}

?>