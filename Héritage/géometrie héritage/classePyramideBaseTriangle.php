<?php
require "classeTriangleRectangle.php";

class Pyramide extends TriangleRectangle{

    public function Perimetre(){

    }
    public function Volume(){
        
    }
    public function Afficher(){
        $txt = "Périmètre : " . Perimetre() . "\n";
        $txt .= "Volume : " . Volume() . "\n";
        return $txt;
    }
}

?>