<?php ob_start();

$titre = "exo 2 POO";
?>

<form action="" method="GET">     
<button type="submit" name="Tous">Tous les animaux</button>     
<button type="submit" name="Chien">Tous les chiens</button>     
<button type="submit" name="Chat">Tous les chats</button> 
</form>

<?php 
class Personnage{
    public $nom ;
    public $age ;
    public $animaux ;

    public function __construct($name , $age , $race){
        $this->nom = $name;
        $this->age = $age;
        $this->animaux = $race;
    }

    public function afficheAnimaux(){
    echo $this->nom . " à " . $this->age ." et c'est un " . $this->animaux ."<br>";
    }
}


$personnage1 = new Personnage("Marie" , "15" , "Chat");
$personnage2 = new Personnage("Pierre" , "11", "Chien");
$personnage3 = new Personnage("Riri" , "7" , "Chien");
$personnage4 = new Personnage("Fifi" , "8" , "Chat");
$personnage1->afficheAnimaux();
$personnage2->afficheAnimaux();
$personnage3->afficheAnimaux();
$personnage4->afficheAnimaux();

?>






<?php 
$content = ob_get_clean();
require "template.php"
?>