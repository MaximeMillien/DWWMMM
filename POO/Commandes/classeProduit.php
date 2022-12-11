<?php

class Produit{
    private $libelle;
    private $description;
    private $reference;
    private $puttc;
    
    public function __construct($libelle , $description , $reference , $puttc){
        $this->libelle = $libelle;
        $this->description = $description;
        $this->reference = $reference;
        $this->puttc = $puttc;
    }
    
    public function getLibelle(){return $this->libelle;}
    public function getDescription(){return $this->description;}
    public function getReference(){return $this->reference;}
    public function getPuttc(){return $this->puttc;}
    public function setLibelle($libelle){return $this->libelle = $libelle;}
    public function setDescription($description){return $this->description = $description;}
    public function setReference($reference){return $this->reference = $reference;}
    public function setPuttc($puttc){return $this->puttc = $puttc;}

}
?>