<?php
class Employe{
    protected $prenom;
    protected $nom;
    protected $numsecu;
    protected $salaire;
    protected $job;

    public function __construct($prenom , $nom , $numsecu , $salaire , $job){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->numsecu = $numsecu;
        $this->salaire = $salaire;
        $this->job = $job;
    }
    public function getPrenom(){return $this->prenom;}
    public function getNom(){return $this->nom;}
    public function getNumSecu(){return $this->numsecu;}
    public function getSalaire(){return $this->salaire;}
    public function getJob(){return $this->job;}

    public function setPrenom($prenom){$this->prenom = $prenom;}
    public function setNom($nom){$this->nom = $nom;}
    public function setNumSecu($numsecu){$this->numsecu = $numsecu;}
    public function setSalaire($salaire){$this->salaire = $salaire;}
    public function setJob($job){$this->job = $job;}

public function __toString(){
    $texte =  "Le cadre " . $this->prenom . " " . $this->nom . " possède le num de sécu : " .$this->numsecu . " occupe le poste de " . $this->job .  " et gagne un salaire de : " . $this->salaire ."\n";
    return $texte;
}
public function effectueSonJob(){
   echo "Je suis " . $this->getPrenom() ." ". $this->getNom() . ". Je suis " . $this->getJob() . " et je gagne " . $this->getSalaire() . "." . " Mon numéro de sécurité sociale est le " . $this->getNumSecu() . "." ."\n";
}
}
?>