<?php
require "classeTriangleRectangle.php";
class Pyramide extends TriangleRectangle{
    public function __construct($aire){
    $this->aire = $aire;
}
    public function Perimetre(){

    }
    public function Volume(){
        ($this->aire * $this->hauteur) / 3;
    }
    public function Afficher(){
        $txt = "Périmètre : " . $this->Perimetre() . "\n";
        $txt .= "Volume : " . $this->Volume() . "\n";
        $txt .= "-----------" . "\n";
        return $txt;
    }
}

?>