<?php
require "classeAnimal.php";

class Lapin extends Animal{
    protected $enVie;

    public function __construct($couleur , $pattes){
        $this->enVie = true;
        parent::__construct($couleur , $pattes);
    }

    public function getEnVie(){return $this->enVie;}
    public function setEnVie($enVie){return $this->enVie = $enVie;}

    public function seNourrir(){
        return "Le lapin mange ";
    }
    public function Fuir(){
        return "Le lapin s'enfuie ";
    }

    public function seDeplacer(){
        if ($this->enVie){
            return  $this->Fuir();
        }
        else {
            echo "le lapin est mort";
        }
    }
}
?>