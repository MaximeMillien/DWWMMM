<?php

class Voiture{
    private $couleur;
    private $marque;
    private $modele;
    private $kilometres;
    private $motorisation;

    public function __construct($couleur , $marque , $modele , $kilometres , $motorisation){
        $this->couleur = $couleur;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometres = $kilometres;
        $this->motorisation = $motorisation;
    }

    public function getCouleur(){return $this->couleur;}
    public function getMarque(){return $this->marque;}
    public function getModele(){return $this->modele;}
    public function getKilometres(){return $this->kilometres;}
    public function getMotorisation(){return $this->motorisation;}

    public function setCouleur(){return $this->couleur;}
    public function setMarque(){return $this->marque;}
    public function setModele(){return $this->modele;}
    public function setKilometres(){return $this->kilometres;}
    public function setMotorisation(){return $this->motorisation;}
    

}
?>