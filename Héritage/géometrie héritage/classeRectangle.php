<?php
class Rectangle{
    protected $longueur;
    protected $largeur;

    public function __construct($longueur , $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    public function getLongueur(){return $this->longueur;}
    public function getLargeur(){return $this->largeur;}
    public function setLongueur($longueur){return $this->longueur = $longueur;}
    public function setLargeur($largeur){return $this->largeur = $largeur;}

    public function Perimetre(){
    $perimetre = ($this->longueur + $this->largeur)*2 ;
    return $perimetre;
    }

    public function Aire(){
    $aire = $this->longueur * $this->largeur;
    return $aire;
    }

    public function EstCarre(){
        if ($this->longueur == $this->largeur){
            echo "C'est carré";
        }else {
            echo "Ce n'est pas un carré";
        }
    }

    public function AfficherRectangle(){
        $txt = "\n"."Longueur : " . $this->longueur . "\n";
        $txt .= "Largeur : " . $this->largeur . "\n";
        $txt .= "Périmètre : " . $this->Perimetre() . "\n" ;  
        $txt .= "Aire : " . $this->Aire(). "\n";
        $txt .= "-----------" . "\n";
        $txt .= "" . $this->EstCarre() ;
        return $txt;
    }
}

?>