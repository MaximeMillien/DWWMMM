<?php

class TriangleRectangle{
    protected $base;
    protected $hauteur;

    public function __construct($base , $hauteur){
        $this->base = $base;
        $this->hauteur = $hauteur;
    }

    public function getBase(){return $this->base;}
    public function getHauteur(){return $this->hauteur;}
    public function setBase($base){return $this->base = $base;}
    public function setHauteur($hauteur){return $this->hauteur = $hauteur;}

    public function PerimetreTriangle(){
    $hypotenuse = hypot($this->base,$this->hauteur);
    $perimetre = $this->base + $this->hauteur + $hypotenuse;
    return $perimetre;
    }
    public function AireTriangleRectangle(){
        $aireTri = ($this->hauteur * $this->base) / 2;
        return $aireTri;
    }
    public function afficherTriangle(){
        $txt =  "Base : " . $this->base . "\n";
        $txt .= "Hauteur : " . $this->hauteur . "\n";
        $txt .= "Périmètre : " . $this->PerimetreTriangle() . "\n" ;  
        $txt .= "Aire : " . $this->AireTriangleRectangle(). "\n";
        $txt .= "-----------" . "\n";
        return $txt;
    }
}

?>