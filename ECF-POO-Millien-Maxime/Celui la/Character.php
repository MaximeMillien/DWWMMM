<?php
class Character{
    protected $pv;
    protected $force;

    public function __construct($pv , $force){
    $this->pv = $pv;
    $this->force = $force;
    }

    public function getPv(){return $this->pv;}
    public function getForce(){return $this->force;}
    public function setPv($pv){return $this->pv = $pv;}
    public function setForce($force){return $this->force = $force;}

// On fait la fonction Attack pour que le monstre ou le player meurt 

    public function Attack($player , $monster){
        $txt = "\n"."Le monstre  : ";
        $txt .= "\n" . "Point de vie actuel : " . $monster->getPv() . "\n" ;
        $txt .= $player->getPseudo() . " attaque le monstre de " . $player->getForce() . "\n";
        $txt .= "Point de vie actuel : " . $monster->setPv($monster->getPv() - $player->getForce()). "\n";
        $txt .= "\n" . $player->getPseudo() . " : " . "\n";
        $txt .=  "Point de vie actuel : " . $player->getPv() . "\n" ;
        $txt .=  "Le monstre attaque " . $player->getPseudo() . " de " . $monster->getForce() . "\n";
        $txt .= "Point de vie actuel : " . $player->setPv($player->getPv() - $monster->getForce()) . "\n";
        return $txt;
        echo $txt;
    }
    
}
?>