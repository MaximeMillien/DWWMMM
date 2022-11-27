<?php ob_start();
require "fonctions.php";

$titre = "exo 1 moyen";
?>

<!-- QUESTION 1 Tableau associatif -->

<?php
$identite1 = array("nom" => "Marie" , "Age" => "30", "sexe" => "Femme");
$identite2 = array("nom" => "Pierre" , "Age" => "32", "sexe" => "Homme");
?> 

    <div class="container border border-dark">
        <label>Exo 1 : Tableau associatif </label>
        <p><?php personnes($identite1) . personnes($identite2)  ?></p>
    </div>

<!-- QUESTION 2 -->

<?php 
$identite = [array("nom" => "Marie" , "Age" => "30", "sexe" => "Femme"),
array("nom" => "Pierre" , "Age" => "32", "sexe" => "Homme"),
array("nom" => "Riri" , "Age" => "28", "sexe" => "Homme"),
array("nom" => "Fifi" , "Age" => "28" , "sexe" => "Femme")]
?>

<div class="container border border-dark">
    <label> Exo 2 : tableau de tableaux associatifs</label>
    <p><?php for ($i = 0; $i < count($identite) ; $i++) : personnes($identite[$i]) ; endfor?></p>
</div>





<!-- Question 3 -->
<?php
$tabNotes = array(12,1,15,8);
?> 

<div class="container border border-dark">
    <label >Exo 3 : Fonctions et tableaux</label>
 <p><?php  for ($i = 0 ; $i < count($tabNotes) ; $i++) : afficherTableau($tabNotes[$i])  . estTableauPair ($tabNotes[$i]) . calculerMoyenne($tabNotes[$i]) ; endfor ?></p>
</div> 





<!-- Question 4 -->

<form action="" method="GET">
<div class="container border border-dark">

    <button type="submit" nom="tous"> Tous les animaux </button>
    <button type="submit" nom="chien"> Seulement les chiens </button>
    <button type="submit" nom="chat"> Seulement les chats </button>

</div>
</form>
<?php


$tab = array(    
    'Marie' => array("10", "chien"),     
    'Pierre' => array("12", "chat"),    
    'Riri' => array("5", "chien"),    
    'Fifi' => array("8", "chat"), ); 
if (isset($_GET["chien"])) {     
    foreach ($tab as $key => $value){        
        if ($value[1] == "chien") {  ?>
        <h1>  <?php echo $key . $value[0]?></h1>
        <?php                                
           } 
            } }
?>





<?php
$content = ob_get_clean();
require "template.php";
?>