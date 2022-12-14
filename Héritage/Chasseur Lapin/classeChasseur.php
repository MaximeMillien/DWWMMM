<?php

require "classeHumain.php";

class Chasseur extends Humain{
    protected $arme;

    public function __construct($arme , $nom){
        $this->$arme = $arme;
        parent::__construct($nom);
    }
    public function getArme(){return $this->arme;}
    public function setArme($arme){return $this->arme = $arme;}

    public function Chasser(){
        return "Le chasseur " . $this->nom . "chasse le lapin avec son " . $this->arme;  
    }

    public function SeDeplacer()
    {
     return "Le chasseur se déplace";   
    }
}

?>