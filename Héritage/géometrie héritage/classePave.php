<?php
require "classeRectangle.php";

class Pave extends Rectangle{

public function __construct($hauteur, $longueur , $largeur){
    $this->hauteur = $hauteur;
    $this->longueur = $longueur;
    $this->largeur = $largeur;
}

    public function getLongueur(){return $this->longueur;}
    public function getLargeur(){return $this->largeur;}
    public function getHauteur(){return $this->hauteur;}    
    public function setLongueur($longueur){return $this->longueur = $longueur;}
    public function setLargeur($largeur){return $this->largeur = $largeur;}
    public function setHauteur($hauteur){return $this->hauteur = $hauteur;}

    public function Perimetre(){
        $perimetre = ($this->longueur + $this->largeur)*2 ;
        return $perimetre;
        }
    
    public function Volume(){
        $volume = ($this->longueur + $this->largeur * $this->hauteur) ;
        return $volume;   
    }
    public function Afficher(){
        $txt = "Périmètre : " . $this->Perimetre() . "\n";
        $txt .= "Volume : " . $this->Volume() . "\n";
        $txt .= "-----------" . "\n";
        return $txt;
    }
}
?>