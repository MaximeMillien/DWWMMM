<?php ob_start();
$titre = "exo bonus 2 formulaire";
?>

<form action="" method="GET">
    <button class="submit" name="Tous">Tous les animaux</button>
    <button class="submit" name="Chien">Seulement les chiens</button>
    <button class="submit" name="Chat">Seulement les chats</button>
</form>

<?php   
class Animal{
    private $nom;
    private $age;
    private $animaux;

    public function __construct($nom , $age , $animaux){
        $this->nom = $nom;
        $this->age = $age;
        $this->animaux = $animaux;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getAge(){
        return $this->age;
    }
    public function getAnimaux(){
        return $this->animaux;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setAnimaux($animaux){
        $this->animaux = $animaux;
    }
}

$animal1 = new Animal("Marie" , 15 , "Chat");
$animal2 = new Animal("Pierre" , 11, "Chien");
$animal3 = new Animal("Riri" , 7 , "Chien");
$animal4 = new Animal("Fifi" , 8 , "Chat");
$tab = [$animal1 , $animal2 , $animal3 , $animal4];

if (isset($_GET["Tous"])){

}
?>

<?php
$content = ob_get_clean();
require "template.php";
?>

<!-- exo5 poo-->

<!-- class Animal{
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
?>

<form action="" method="GET">     
<button type="submit" name="Tous">Tous les animaux</button>     
<button type="submit" name="Chien">Tous les chiens</button>     
<button type="submit" name="Chat">Tous les chats</button> 
</form>
<?php
// affichage tableau animaux
// foreach($tabAnimaux as $value){
//     echo $value->getNom() . " ";
//     echo $value->getAge() . " ";
//     echo $value->getAnimaux() . "<br> ";
// }
?>
<?php 
//     if (isset($_GET["Tous"])){
//     foreach ($tabAnimaux as $animal){
//         if ($animal->getNom() == "Chien" || "Chat"){
//         echo $animal->getNom()  . " " . $animal->getAge()  . " " . $animal->getAnimaux() . " ";
//     }
//     }}
//     if (isset($_GET["Chien"])){
//     foreach ($tabAnimaux as $animal){
//         if ($animal->getAnimaux() == "Chien"){
//             // var_dump($animal->getNom());
//         echo $animal->getNom()  . " " . $animal->getAge()  . " " . $animal->getAnimaux() . " ";
//     } 
//     if (isset($_GET["Chat"])){
//     foreach ($tabAnimaux as $animal){
//         if ($animal->getAnimaux() == "Chat"){
//         echo $animal->getNom()  . " " . $animal->getAge()  . " " . $animal->getAnimaux() . " ";
//     }
//     }
// }}} 
?>
