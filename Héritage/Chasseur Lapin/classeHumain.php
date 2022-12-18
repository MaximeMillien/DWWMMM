<?php



class Humain implements SeDeplacer{
    protected $nom;

    public function __construct($nom){
    $this->nom = $nom;
    }
    public function getNom(){return $this->nom;}
    public function setNom($nom){return $this->nom = $nom;}

    public function SeDeplacer(){}

}

?>