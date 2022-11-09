<?php 

$MlleRose = "Mlle Rose" ;
$ProfViolet = "Professeur Violet";
$ColMoutarde = "Colonel Moutarde";
$RvdOlive = "Réverand Olive";
$MmeLeblanc = "Mme LeBlanc" ;
$Réponse1 = "true";
!$Reponse1 = "false";



$Reponse1 = readline ("Votre personnage a-t-il une moustache ? : ");
    if ($Reponse1 == "true"){
        echo ("C'est le ") . $ColMoutarde;
    } elseif ("false") {
            readline ("Votre personnage porte-t-il des lunettes ? : ");
            if ("true"){
                readline ("Votre personnage porte-il un chapeau ? : ");
                if  ("true"){  
                    echo ("C'est le ") . $ProfViolet . "\n";
                }elseif  ("false ") {
                 echo ("C'est ") . $MlleRose;
                }
            }
            !$Reponse1;
        }if (!$Reponse1) {
        readline ( "Est-ce que c'est un homme ? : ");
            if ("true"){
            echo ("C'est le ") . $RvdOlive;
        }else {
            echo ("C'est ") . $MmeLeblanc;
        }
    }








// echo ("Pensez à un personnage");

// $Reponse1 = readline ("Votre personnage est-il un homme ? ") ;
// if ($Reponse1) { 
//     if($true) {
//     readline ("Votre personnage porte t-il un chapeau ? ");{
//         echo ("C'est le ") .$ProfViolet ;
// }
// }
// }
// elseif ($Reponse1) {
// readline ("Votre personnage a t-il une moustache ? "); {
//     if($true) {
//         echo ("Votre personnage est ") .$ColMoutarde ;
//     }
//     elseif ($false) {
//         echo ("Votre personnage est ") .$RvdOlive ;
//     }
// }
// }
// (!$Reponse1) ;{
//     readline ("Votre personnage porte des lunettes ? ");{
//         if($true) {
//             echo ("C'est ") . $MmeLeblanc ;
// } 
//  elseif ($false) {
//     echo " C'est " . $MlleRose ;
// }
// }
// }











// $Reponse1


// }
// elseif (false) {
//     echo "$MlleRose, $MmeLeblanc" ;
// }elseif (true) 
// ?>