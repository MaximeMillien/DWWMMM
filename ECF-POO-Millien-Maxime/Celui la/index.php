<?php
require "Character.php";
require "Player.php";
require "Monster.php";
require "BanditManchot.php";

$choix = null;
$pseudo = readline ("Quel est votre pseudo ? : ");

$player = new Player(100 , 20 , 0 , "$pseudo");
$monster = new Monster(rand(20,100) , rand(5,10));

echo $player->Move($player , $pseudo);

// manque la fin de la condition pour que ça affiche mais si on enlève la ligne 16 
// ça echo l'attaque dans le bandit quand on veux quitter et pour le monstre

if ($choix != 0 && $player->Play($player) ){
while ($player->getPv($player) >= 0 && $monster->getPv($monster) >= 0){

    echo $player->Attack($player , $monster);
}}



// while($choix != 0 && $player->getPv() >=1 && $monster->getPv() >= 1){
//     echo $player->Attack($player , $monster);
// }

// echo $player->Play($player);

// if ($monster <=0 && >= 20 && =< 60){
//     for($i = 0 , $i< count($score) , $i++);
// } elseif ($monster <=0 && >=61 && =< 100){
//     for ($i = 0 ,$i < count($score) , $i++);
// }

?>