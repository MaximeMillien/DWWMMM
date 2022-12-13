<?php

class Cercle{
    protected $diametre;
    protected $rayon;

    public function __construct($diametre , $rayon ){
        $this->diametre = $diametre;
        $this->rayon = $rayon;

    }

    public function getDiametre(){return $this->diametre;}
    public function setDiametre($diametre){return $this->diametre = $diametre;}

public function PerimetreCercle(){
$perimetreDiametre = $this->diametre * pi();
return $perimetreDiametre;
}

public function AireCercle(){
$aireCercle = pi() * $this->rayon * $this->rayon;
return $aireCercle;
}

public function AfficherCercle(){
    $txt = "Diametre : " . $this->diametre . "\n";
    $txt .= "Périmètre : " . $this->PerimetreCercle() . "\n";
    $txt .= "Aire : " . $this->AireCercle() . "\n";
    $txt .= "-----------" . "\n";
    return $txt;
}
}
?>