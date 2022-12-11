<?php
class Client{
    private $nom;
    private $prenom;
    private $numclient;

    public function __construct($nom , $prenom , $numclient){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numclient = $numclient;
    }
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getNumClient(){return $this->numclient;}

    public function setNom($nom){$this->nom = $nom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}
    public function setNumClient($numclient){$this->numclient = $numclient;}

}
?>