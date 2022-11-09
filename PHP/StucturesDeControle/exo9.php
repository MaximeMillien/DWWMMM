<?php 
$sexe = readline ("Homme ou Femme : ") ;
$age = readline ("Votre âge : ");
$homme = "homme";
$femme = "femme";

while ($sexe != $homme || $femme){
$sexe = readline ("Homme ou Femme : ");

if ($homme >= 20 && $femme <= 18 && $femme <= 35){
    echo ("imposable");
}else {
    echo ("non imposable");
}
}

?>