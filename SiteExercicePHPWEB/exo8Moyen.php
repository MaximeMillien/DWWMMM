<?php ob_start();
$titre = "Constante";
?>


<?php
echo "Choisissez une marque entre : <br>" ,"Toyota <br>" , "Renault <br>" , "Citroen <br>" , "Peugeot <br>";
?>

<?php 
class Voiture{
    private $marque;
    private $model;
    private $couleur;
    private $portes;
    // private $electrique;
    const ELECT = true;
    const PASELECT = false;


    public function __construct($marque, $model, $couleur, $portes){
    $this->marque = $marque;
    $this->model = $model;
    $this->couleur = $couleur;
    $this->portes = $portes;
    // $this->electrique = $electrique;
    }
// getter
    public function getMarque(){
        return $this->marque;
    }
    public function getModel(){
        return $this->model;
    }
    public function getCouleur(){
        return $this->couleur;
    }
    public function getPortes(){
        return $this->portes;
    }
    // public function getElectrique(){
    //     return $this->electrique;
    // }
}

// if (Voiture::ELECT == true ){
//     echo "électrique";
// }elseif (Voiture::ELECT == false) {
//     echo "non électrique";
// }

$marque1 = new Voiture("Toyota" , "AYGO" , "Rouge" , 5 ,  Voiture::PASELECT);
$marque2 = new Voiture("Renault" , "Twingo" , "Grise" , 3 , Voiture::ELECT);
$marque3 = new Voiture("Citroen" , "C3" , "Noir" , 5 , Voiture::PASELECT);
$marque4 = new Voiture("Peugeot" , "408" , "Blanche" , 5 , Voiture::ELECT);

$tab = [$marque1 , $marque2 , $marque3 , $marque4];

?>


<form action="" method="GET">
    <input type="text" name="marque">
    <button type="submit" name="btnmarque">Entrez</button>
</form>


<?php
if (isset($_GET["btnmarque"])){
    foreach ($tab as $marque){
        if ($marque->getMarque() == $_GET["marque"]){
        echo $marque->getMarque()  . " " . $marque->getModel()  . " " . $marque->getCouleur() . " " . $marque->getPortes() . " " ;
    }
    }
}
?>


<?php
$content = ob_get_clean();
require "template.php";
?>