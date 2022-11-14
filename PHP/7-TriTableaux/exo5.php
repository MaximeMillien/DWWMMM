<?php
$tab = [4,8,7,9,3,12];
$comp = 0;

for($i = 0 ; $i < count($tab) ; $i++){
    for($index = $i ; $index < count($tab)-1 ; $index++){
        if($tab[$i] == $tab[$index+1]){
            $comp++ ;

        }

}
}
echo $comp . " " ;
if($comp>0){
    echo "doublon";
}
elseif($comp == 0){
    echo "pas de doublon";
}


// $tab = [4,5,88,4,5,9];

// for ($i = 0; $i < 5; $i++){
    
// }

?>