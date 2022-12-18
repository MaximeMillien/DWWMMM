<?php
require "Character.php";
require "Monster.php";
class Player extends Character{

    protected $score;
    protected $pseudo;

    public function __construct($pv , $force ,$score , $pseudo){
    parent::__construct($pv , $force);
    $this->score = $score;
    $this->pseudo = $pseudo;
    }

    public function getScore(){return $this->score;}
    public function getPseudo(){return $this->pseudo;}
    public function setScore($score){return $this->score = $score;}
    public function setPseudo($pseudo){return $this->pseudo = $pseudo;}

    public function Random(){
        if (rand(1,3) == rand(1,3)){
            echo "\n" . "Le Bandit Manchot : " . "\n" . $this->Attack();
        } else {
            echo "\n" . "Le monstre : " . "\n". $this->Attack();
     }}

    public function Move(){
    echo ("Saisir 0 pour quitter" . "\n") . "Saisir 1 pour aller au Nord" . "\n" . "Saisir 2 pour aller au Sud" . "\n" . "Saisir 3 pour aller à l'Ouest" . "\n" . "Saisir 4 pour aller à l'Est" . "\n" ;
    $choix = readline ("Votre choix : ");

    switch ($choix){
        case "0" :
            echo "Score de " ;
            break;
        case "1" : 
            echo $this->Random();
            break;
        case "2" :
            echo $this->Random();
            break;
        case "3" :
            echo $this->Random();
            break;
        case "4" :
            echo $this->Random();
            break;
    } 
    }
    }
?>