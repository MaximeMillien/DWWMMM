<?php
require "BanditManchot.php";
class Character{
    protected $pv;
    protected $force;

    public function __construct($pv , $force){
        $this->pv = $pv;
        $this->force = $force;
    }
    public function getPv(){return $this->pv;}
    public function getForce(){return $this->force;}
    public function setPv($pv){return $this->pv = $pv;}
    public function setForce($force){return $this->force = $force;}

    public function Attack(){}
    

}
?>