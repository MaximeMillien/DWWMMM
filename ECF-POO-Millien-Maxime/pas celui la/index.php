<?php
require "Player.php";
$pseudo = readline ("Quel est votre pseudo ? : ");

$player = new Player(100 , 20 , 0 , "$pseudo");
$monster = new Monster(rand(20,100), rand(5,10));

echo $player->Move();
// echo $monster->Attack(rand(20,100), "$pseudo" ,rand(5,10));

?>