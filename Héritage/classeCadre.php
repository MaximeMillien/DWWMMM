<?php
require "classeEmployé.php";
class Cadre extends Employe{

    // listeEmploye ??

    public function manage(){
    echo "Je suis " . $this->getPrenom() . $this->getNom() ;
    }
    public function augmenteUnSalarie(){
    
    }
}

?>