<?php
require "classeCercle.php";

class Sphere extends Cercle{

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