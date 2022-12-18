<?php

class Monster{
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

    public function Attack($pv , $pseudo , $force ){
        $txt = "Point de vie actuel : " . $pv . "\n";
        $txt .= $pseudo . " attaque le monstre de " . $force . "\n";
        $txt .= "Point de vie actuel : " . $pv - $force . "\n";
        return $txt;
    }
}
?>