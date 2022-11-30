<?php
ob_start();
$titre = "Gérer les livres";
?>

<?php 
class Livres{
    private $titre;
    private $edition;
    private $auteur;
    private $parution;

    public function __construct($titre , $edition , $auteur , $parution){
        $this->titre = $titre ;
        $this->edition = $edition ;
        $this->auteur = $auteur ;
        $this->parution = $parution ;
    }
    public function __toString(){
        return "Titre : ".  $this->titre . "édition : " . $this->edition . "auteur : " . $this->auteur . "paru en : " . $this->parution;
    }
}

$livre1 = new Livres("Harry Potter a l'école des sorciers" , "Hachette" , "JK Rowling", "1997");
$livre2 = new Livres("le chat botté" , "Altas" , "Charles Perrault" , "1967");
$livre3 = new Livres("100 villes 100 blagues", "Larousse", "Jean-Marie Bigard", "2010");
$livre4 = new Livres("Winnie l'ourson" , "Gallimard" , "Alan Alexander Milne",  "1926");

$tab = [$livre1 , $livre2 , $livre3 , $livre4];
?>

<form action="" method="POST">
    <label for="">Choisissez l'édition : </label>
    <input type="text" name="Edition">
    <label for="">Choisissez l'année : </label>
    <input type="number" name="Date">
    <button type="submit" name="submit">Appuyez ici</button>
</form>

<?php 
if (isset($_POST["submit"])){
    foreach ($tab as $livre){
    
    }
} ?>

<?php
$content = ob_get_clean();
require "template.php";
?>