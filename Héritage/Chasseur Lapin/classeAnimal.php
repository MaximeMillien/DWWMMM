<?php
require "Interface.php";

class Animal implements SeDeplacer{
    protected $couleur;
    protected $pattes;

    public function __construct($couleur , $pattes)
    {
        $this->couleur = $couleur;
        $this->pattes = $pattes;
    }

    public function getCouleur(){return $this->couleur;}
    public function getPattes() {return $this->pattes;}
    public function setCouleur($couleur){return $this->couleur = $couleur;}
    public function setPattes($pattes){return $this->pattes = $pattes;}

    public function Crier(){}
    public function SeDeplacer(){}

}
?>