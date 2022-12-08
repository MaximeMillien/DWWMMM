<?php
require "classeEmployé.php";
class Cadre extends Employe{

    public function listeEmploye($employe1 , $employe2){
        array($employe1 , $employe2);
    }

    public function manage($cadre1 , $employe1 , $employe2){
    echo "Je suis " . $this->getPrenom($cadre1) ." " . $this->getNom($cadre1) . " et je suis le manager de " . $this->getPrenom($employe1) ." ".  $this->getNom($employe1) . " et " .$this->getPrenom($employe2) ." ". $this->getNom($employe2) ;
    }
    
    public function augmenteUnSalarie($employe3 , $employe1, $salaire, $salaire1, $salaire2){
        $salaire1 = $salaire * 1.1;
        $salaire2 = $salaire * 1.2;
        echo "Le nouveau salaire de " . $employe1 . "est de " . $salaire1;
        echo "Le nouveau salaire de " . $employe3 . "est de " . $salaire2;
        return $salaire1;
        return $salaire2;
    }
}
?>