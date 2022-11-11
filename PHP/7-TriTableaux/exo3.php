<?php
$tab = [1,2,3,4,5,6,7];
$estVrai = true;

while($estVrai){

    $estVrai = false;

    for ($i = 0; $i <=count ($tab) ;$i++){
        if ($tab[$i] < $tab[$i+1]){
            $temp = $tab[$i];
            $tab[$i] = $tab[$i+1];
            $tab[$i+1] = $temp;
            $estVrai = true;
        }
        echo $tab[$i] ."\n" ;
    }

}



?>