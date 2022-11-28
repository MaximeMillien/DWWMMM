<?php ob_start();

$titre = "ville et département";
?>

<?php
class Ville{
    public $ville;
    public $departement;

    public function __construct($ville, $departement){
        $this->ville = $ville;
        $this->departement = $departement;
    }
    public function afficherVille(){
        echo "La ville " . $this->ville . " est dans le département " . $this->departement;
    }
}

$ville1 = new Ville("Dunkerque" , "Nord");
$ville1->afficherVille();

?>

<?php
$content = ob_get_clean();
require "template.php";
?>