<?php

class Player extends Character{
    protected $score;
    protected $pseudo;

    public function __construct($pv , $force , $score , $pseudo){
    parent::__construct($pv , $force);
    $this->score = $score;
    $this->pseudo = $pseudo;        
    }
    public function getScore(){return $this->score;}
    public function getPseudo(){return $this->pseudo;}
    public function setScore($score){return $this->score = $score;}
    public function setPseudo($pseudo){return $this->pseudo = $pseudo;}

// on fait une fonction random pour définir si le joueur tombe sur un monstre ou le bandit manchot
    public function Random($player){
        if (rand(1,3) == rand(1,3)){
            echo "\n" . "Le Bandit Manchot : " . $player->Play($player) ."\n" ;
        } else {
            echo "\n" . "Le monstre : " . "\n";
    }}

// On fait la fonction Move pour que le joueur choissise où il souhaite aller

public function Move($player ){
    echo ("Saisir 0 pour quitter" . "\n") . "Saisir 1 pour aller au Nord" . "\n" . "Saisir 2 pour aller au Sud" . "\n" . "Saisir 3 pour aller à l'Ouest" . "\n" . "Saisir 4 pour aller à l'Est" . "\n" ;
    $choix = readline ("Votre choix : ");

// On fait un switch pour pouvoir afficher une fois que le joueur ai choisit ce qu'il voulait
   
switch ($choix){
        case "0" :
            echo "\n" . "Score de " ;
            break;
        case "1" : 
            echo $this->Random($player);
            break;
        case "2" :
            echo $this->Random($player );
            break;
        case "3" :
            echo $this->Random($player);
            break;
        case "4" :
            echo $this->Random($player);
            break;
    }
    }

    // On demande si le joueur souhaite jouer au jeu du bandit 
// si oui alors soit il gagne de la vie entre 1 et 10
// soit il en perd entre 1 et 10 sinon il bouge
// et normalement il ne doit pas perdre ou gagner de la vue en mettant N

    public function Play($player){
        echo "\n". "Le Bandit Manchot apparaît" . "\n";
        $jouer = readline ("\n". "Voulez vous jouer à un jeu de hasard ? (O/N) : ");
        if ($jouer == "O" || "o"){
            if (rand(1,2) == 1){
                echo "Le joueur gagne de la vie" . "\n";
                echo $player->getPseudo() . " gagne " . $player->setPv($player->getPv() + rand(1,10));
            }elseif (rand(1,2) == 2){
                echo "Le joueur perd de la vie" . "\n";
                echo $player->getPseudo() . " perd" . $player->setPv($player->getPv() - rand(1,10));
            }
            } elseif ($jouer == "N" || "n"){
            }
        }
    }
    // public function ScoreDeFin($monster , $score ){
    //     if ($monster->setPV() <= 0){ 
    //         if ($monster->getPv() >= 20 && $monster->getPv()<= 60){
    //             for ($i = 0 ; $i < $score ; $i++);
    //         } elseif ($monster->getPv() >= 61 && $monster->getPv() <= 100){
    //             for ($i = 0 ; $i < $score ; $i+2);
    //         }
    //         echo $i;
    //     }
    // }

?>