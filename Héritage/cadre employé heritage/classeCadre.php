<?php
require "classeEmployé.php";
class Cadre extends Employe{

    public function listeEmploye($employe1 , $employe2){
        array($employe1 , $employe2);
    }

    public function Manage($cadre , $employe){
    echo "Je suis " . $this->getPrenom($cadre) ." " . $this->getNom($cadre) . " et je suis le manager de " . $this->getPrenom($employe) ." ".  $this->getNom($employe) . " et de " .$this->getPrenom($employe) ." ". $this->getNom($employe) . "\n";
    }
    
    public function Augmentation(Employe $employe, $pourcentage){
        $augmentation = $employe->setSalaire($employe->getSalaire()* (1+ $pourcentage)) ;
        return $augmentation ;
      }
}
?>