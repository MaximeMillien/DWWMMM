<?php

class Cercle{
    protected $diametre;
    const PI = 3.14;

    public function __construct($diametre ){
        $this->diametre = $diametre;
    }

    public function getDiametre(){return $this->diametre;}
    public function setDiametre($diametre){return $this->diametre = $diametre;}

public function PerimetreCercle(){
$perimetreDiametre = $this->diametre * $this->pi;
return $perimetreDiametre;
}

public function AireCercle(){
$aireCercle = $this->pi * $this->rayon * $this->rayon;
return $aireCercle;
}

public function AfficherCercle(){
    $txt = "Diametre : " . $this->diametre . "\n";
    $txt .= "Périmètre : " . $this->PerimetreCercle() . "\n";
    $txt .= "Aire : " . $this->AireCercle();
    return $txt;
}
}
?>