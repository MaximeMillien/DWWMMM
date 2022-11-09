<?php
$annee =readline ("saisissez une année : ");
if (($annee %4 == 0) && ($annee %100 != 0 or $annee ==0)){
    echo "annee bissextile";

}   else {
    echo "année non bissextile";
}

?>