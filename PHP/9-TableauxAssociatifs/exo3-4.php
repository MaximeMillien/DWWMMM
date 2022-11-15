<?php
$question = readline ("1. Afficher le nom et les notes de chaque élève.
2. Afficher le nom et la moyenne de chaque élève
3. Afficher les notes et la moyenne d'un élève dont le nom sera saisi au clavier ");
$tabNotes = array ("prenot" => array (2,10,14), "perthuis" => array (10,18,12));



switch ($question){
    case "1" :
        foreach ($tabNotes as $key => $value){
            echo $key;
           foreach ($value as $notes){
                echo " " .$notes;
            }
            echo "\n";
        }
        break;
    case "2" :
        foreach ($tabNotes as $key => $value){
    
            echo "La moyenne de " . $key . " est de ". round (array_sum ($value) / count($value),2) . "\n"; 
        }
        break;
    case "3" :
        $nom = readline ("Choisissez un nom : ");

        foreach ($tabNotes as $key => $value){
            if ($nom == $key){
                echo "La moyenne de " . $key . " est de ". array_sum ($value) / count($value) . "\n"; 
            
            foreach ($value as $notes){
                echo  $notes . " ";
            }
           }
            
        }
    break;            
}


?>