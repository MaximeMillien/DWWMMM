<?php ob_start();

$titre = "getter et setter";
?>


<form action="" method="GET">     
<button type="submit" name="Tous">Tous les animaux</button>     
<button type="submit" name="Chien">Tous les chiens</button>     
<button type="submit" name="Chat">Tous les chats</button> 
</form>

<?php 
class Animal{
    private $nom ;
    private $age ;
    private $animaux ;

    public function __construct($name , $age , $race){
        $this->nom = $name;
        $this->age = $age;
        $this->animaux = $race;
    }
//getter
public function getNom(){
    return $this->nom;
}
public function getAge(){
    return $this->age;
}
public function getAnimaux(){
    return $this->animaux;
}

// setter
public function setNom($name){
    $this->nom = $name;
}
public function setAge($age){
    $this->age = $age;
}

public function setAnimaux($race){
    $this->animaux = $race;
}
}


$animal1 = new Animal("Marie" , 15 , "Chat");
$animal2 = new Animal("Pierre" , 11, "Chien");
$animal3 = new Animal("Riri" , 7 , "Chien");
$animal4 = new Animal("Fifi" , 8 , "Chat");
// $personnage1->afficheAnimaux();
// $personnage2->afficheAnimaux();
// $personnage3->afficheAnimaux();
// $personnage4->afficheAnimaux();
$tabAnimaux = [$animal1, $animal2 , $animal3, $animal4];
$animal1->setNom("Toto");
$animal2->setAge("56");
$animal2->setAnimaux("Chien");

// affichage tableau animaux
foreach($tabAnimaux as $value){
    echo $value->getNom() . " ";
    echo $value->getAge() . " ";
    echo $value->getAnimaux() . " ";
}

?>

<?php 
    if (isset($_GET["Chien"]));
    foreach ($tabAnimaux as $key => $value);

?>

<?php
$content = ob_get_clean();
require "template.php";
?>