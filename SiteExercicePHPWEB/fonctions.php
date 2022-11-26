<?php

function personnes($identite){
    foreach ($identite as $key => $value){
        echo $key . " : " . $value  . " <br> ";
    }
    echo "------------------ <br>";
}




function afficherTableau($tabNotes){
   echo " <br> " . $tabNotes;
}

function calculerMoyenne($moyenne){
    $tabNotes = array(12,1,15,8);
    $moyenne = array_sum ($tabNotes)/ count ($tabNotes);
    echo " <br> La moyenne est de " . $moyenne;

}

function estTableauPair($tabNotes){
$pair = null;
    if ($tabNotes%2 == $pair){
        echo " <br> c'est pair ";
    } elseif ($tabNotes%2 !== $pair) {
        echo " c'est impair ";
    }
}







// function test($animaux){
//     if ("type" == "chien"){
//         echo "" . ($animaux);
//     } elseif ("type" == "chat"){
//         echo "" . ($animaux);
//     } elseif ("type" == "chien" && "chat") {
//         echo "" . ($animaux);
//     }
// }

// function tous($animaux){
//     foreach ($animaux as $key => $value){
//         if ($value == "chien" && "chat");
//     echo $key . " : " . $value . " <br> ";
//     }
//     echo"------------------";
// }

// function chien($animaux){
//     foreach ($animaux as $key => $value){
//         if ($value == "chien"){
//             echo "" . $animaux;
//         }
//     }
//     echo"------------------";
// }

// function chat($animaux){
//     foreach ($animaux as $key => $value){
//         if ($value == "chat"){
//             echo "" . $animaux;
//         }
//     }
//     echo"------------------";
// }

?>