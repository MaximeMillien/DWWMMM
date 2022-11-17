<?php

// function multiplication(){
//     $nombre = readline ("Entrer le nombre pour lequel vous voulez la table de multiplication : ");


// echo "          ********** Table de multiplication **********                   ";

// }



function quitter(){
    $quitter = readline ("Vous quittez");
}

function croissant(){
    $tab = [rand (20,100)];
$estVrai = true;

while($estVrai){

    $estVrai = false;

    for ($i=0; $i < 10 ;$i++){

        if ($tab[$i] > $tab[$i+1]){
            $temp = $tab[$i];
            $tab[$i] = $tab[$i+1];
            $tab[$i+1] = $temp;
            $estVrai = true;
        }

    }

}

foreach($tab as $valeur){
    echo $valeur . "\n";
}

function decroissant(){
    $tab = [5,2,3,4,1,9,8];
    $estVrai = true;
    
    while($estVrai){
    
        $estVrai = false;
    
        for ($i=0;$i<=count($tab)-2;$i++){
    
            if ($tab[$i] < $tab[$i+1]){
                $temp = $tab[$i];
                $tab[$i] = $tab[$i+1];
                $tab[$i+1] = $temp;
                $estVrai = true;
            }
    
        }
    
    }
    
    foreach($tab as $valeur){
        echo $valeur . "\n";
    }
}     return;


function addition(){
    $tab1 = [rand (20,100)];
    $tab2 = [rand (20,100)];
    $tab3 = 0 ;

    for ($i = 0 ;$i < 8; $i++){
        $tab3 = $tab1[$i] + $tab2[$i] ;
        echo " " . $tab3;
    }
}
return;
}

function inverse(){
//     $tab1 = [rand (20,100)];
//     $tab2 = [rand (20,100)];
//     $tab3 = 0 ;

//     for($i = 0 ;$i < 8; $i++){
//         $tab3 = $tab1[$i] + $tab2[$i] ;
//         echo " " . $tab3;
//     array_reverse ($tab1, $tab2);
// }
}

?>