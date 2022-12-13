<?php
require "classeCercle.php";

class Sphere extends Cercle{

    public function Perimetre(){

    }
    public function Volume(){

    }
    public function Afficher(){
        $txt = "Périmètre : " . $this->Perimetre() . "\n";
        $txt .= "Volume : " . $this->Volume() . "\n";
        return $txt;
    }
}
?>