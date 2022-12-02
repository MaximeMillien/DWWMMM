<?php ob_start();
$titre = "exo bonus";
?>

<?php 
class Personnage{
    private $nom;
    private $prenom;

    public function __construct($nom , $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setNom($nom ){
        return $this->nom;
    }
    public function setPrenom($prenom){
        return $this->prenom;
    }


}

$perso1 = new Personnage("Henni", "Mohamed");
$perso2 = new Personnage("Macron", "Emmanuel");
$perso3 = new Personnage("Benzema", "Karim");

$tab = [$perso1 , $perso2 , $perso3];
echo $perso1->getNom() . $perso1->getPrenom();


function afficherPersonnage(){
global $tab;

    foreach ($tab as  $value){
        echo $value->getNom() . $value->getPrenom() . "<br/>" ; 
    }
}

afficherPersonnage();


?>


<?php 
$content = ob_get_clean();
require "template.php";
?>