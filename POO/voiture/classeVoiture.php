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

    public function setCouleur($couleur){return $this->couleur =$couleur;}
    public function setMarque($marque){return $this->marque =$marque;}
    public function setModele($modele){return $this->modele =$modele;}
    public function setKilometres($kilometres){return $this->kilometres = $kilometres;}
    public function setMotorisation($motorisation){return $this->motorisation =$motorisation;}
    
   public function __toString(){
        $txt = "Cette voiture est une " . $this->modele ;
        $txt .= " de la marque " . $this->marque ;
        $txt .= ", de couleur " . $this->couleur ;
        $txt .= ", de motorisation " . $this->motorisation;
        $txt .= " avec " . $this->kilometres. " Kilomètres ." . "\n";
        return $txt;
    }
    // public function Rouler($km , $kmsup){
    // $supplementaire = $km->setKilometres($km->getKilometres()+$kmsup) ;
    // return $supplementaire;
    // }

    public function Rouler($kmTrajet){
        $this->kilometres = $this->kilometres + $kmTrajet;
        echo $this->kilometres;
    }
}
?>