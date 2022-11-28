<?php ob_start();

$titre = "Employée";
?>

<?php 
class Employee{
    public $nom;
    public $prenom;
    public $adresse;
    public $ville;
    public $numtel;

    public function __construct($nom, $prenom, $adresse, $ville, $numtel){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->numtel = $numtel;
    }
    public function afficherEmployee(){
        echo " " . $this->nom . " " . $this->prenom . " " . $this->adresse . " " . $this->ville . " " . $this->numtel . "<br>";
        
    }
}

$employee1 = new Employee("Test" , "Maxime" , "dcefnjdncd" , "Cappelle-la-Grande" , "0123456789");
$employee2 = new Employee("fff", "Jacques", "rue de la 3eme rue", "Dunkerque", "0606060606");
$employee1->afficherEmployee();
$employee2->afficherEmployee();
?>

<?php $tab = [$employee1 , $employee2] ?>


<?php
$content = ob_get_clean();
require "template.php";
?>