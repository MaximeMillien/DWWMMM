<?php ob_start();
$titre = "Stagiaire";
?>


<?php

class Stagiaire{
    private $nom;
    private $notes;

    public function __construct(string $nom , array $notes){
        $this->nom = $nom;
        $this->notes = $notes;
    }
    // getter
    public function getNom(){
    return $this->nom;
    }
    public function getNotes(){
    return $this->notes;
    }
    // setter
    public function setNom($nom){
    $this->nom = $nom;
    }
    public function setNotes($notes){
    $this->nom = $notes;
    }


}
?>

<form action="">
    <button class="submit" name="CR7">Ronaldo</button>
    <button class="submit" name="LM30">Messi</button>
</form>

<?php
$stagiaire1 = new Stagiaire("Messi" , [7,10,15,12,11,8,15]);
$stagiaire2 = new Stagiaire("Ronaldo" , [11,15,10,9,8,11,20]);

$tab = [$stagiaire1 , $stagiaire2];
$moyenne = array_sum($tab) / count($tab) ;
$max = max($tab);
$min = min($tab);

if (isset($_GET["LM30"])){
    foreach ($tab as $value){
        foreach ($value as $notes){
            echo  "La moyenne de " . $notes->getNom() . "est de " . $moyenne . "La valeur max est de " . $max . "est la valeur min est de " . $min;
        }
    } if (isset($_GET["CR7"])){
        foreach ($tab as $value){
            foreach ($value as $notes){
                echo  "La moyenne de " . $notes->getNom() . "est de " . $moyenne . "La valeur max est de " . $max . "est la valeur min est de " . $min;
            }
        }
    }
}

// $tabNotes = [7,10,15,12,11,8,15];
// echo "La moyenne est de $moyenne ." . " La valeur max est de $max . " . "La valeur min est de $min .";
?>


<?php
$content =ob_get_clean();
require "template.php";
?>