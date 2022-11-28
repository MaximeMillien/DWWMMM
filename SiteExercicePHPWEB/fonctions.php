<?php

function personnes($identite){
    foreach ($identite as $key => $value){
        echo $key . " : " . $value  . " <br> ";
    }
    echo "------------------ <br>";
}




function afficherTableau($tabNotes){
   echo "  " . $tabNotes;
}

function calculerMoyenne($moyenne){
$pair = null;
$Notes = array(13,13,13,13);
$moyenne = array_sum ($Notes)/ count ($Notes);

    if ($moyenne%2 == $pair)
    echo "La moyenne est pair";
    elseif ($moyenne%2 !== $pair){
        echo "La moyenne est impair";
    }
} 

function estTableauPair($moyenne){
$pair = null;
    if ($moyenne%2 == $pair){
        echo " <br> c'est pair ";
    } elseif ($moyenne%2 !== $pair) {
        echo " c'est impair ";
    }
}



function test($tableau){
  $taille = count($tableau);
  for($i = 1; $i < $taille; $i++)
  {
    for($j = $taille-1; $j >= $i; $j--)
    {
      if($tableau[$j+1] > $tableau[$j])
      {
      $temp = $tableau[$j+1];
      $tableau[$j+1] = $tableau[$j];
      $tableau[$j] = $temp;
      }
    }
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