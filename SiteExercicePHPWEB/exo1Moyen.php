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
$tabNotes = array(13,13,13,13);
?> 

<div class="container border border-dark">
    <label >Exo 3 : Fonctions et tableaux</label>
 <p><?php  for ($i = 0 ; $i < count($tabNotes) ; $i++) : afficherTableau($tabNotes[$i])   ; endfor ?></p>
 <p><?php for ($i = 0 ; $i < count($tabNotes) ; $i++) : estTableauPair ($tabNotes[$i]) ; endfor?></p>
 <p><?php  for ($i = 0 ; $i < count($tabNotes) ; $i++) : calculerMoyenne($tabNotes[$i])  ; endfor ?></p>

</div> 





<!-- Question 4 -->

<form action="" method="GET">     
<button type="submit" name="Tous">Tous les animaux</button>     
<button type="submit" name="Chien">Tous les chiens</button>     
<button type="submit" name="Chat">Tous les chats</button> 
</form> 

<?php $tab = array('Marie' => array("15", "Chat"), 
    'Pierre' => array("11", "Chien"),     
    'Riri' => array("7", "Chien"),     
    'Fifi' => array("8", "Chat"), ); 
    
    if (isset($_GET["Tous"])) {     
    foreach ($tab as $key => $value) { ?> 
    <h1> Nom : <?= $key ?></h1> <?php ?> <h1> 
    Age : <?= $value[0] ?></h1> <?php         ?> 
    <h1> Race : <?= $value[1] ?></h1>        
    --------------------------------------<?php } } 
    if (isset($_GET["Chien"])) {    
    foreach ($tab as $key => $value) {       
    if ($value[1] == "Chien") { ?> 
    <h1> Nom : <?= $key ?></h1><?php  ?> 
    <h1> Age : <?= $value[0] ?></h1><?php ?> 
    <h1> Race : <?= $value[1] ?></h1>            
    --------------------------------------<?php } }}
    if (isset($_GET["Chat"])) {    
    foreach ($tab as $key => $value) {       
    if ($value[1] == "Chat") { ?> 
    <h1> Nom : <?= $key ?></h1><?php  ?> 
    <h1> Age : <?= $value[0] ?></h1><?php ?> 
    <h1> Race : <?= $value[1] ?></h1>            
    --------------------------------------<?php } }} ?>


<?php
$content = ob_get_clean();
require "template.php";
?>