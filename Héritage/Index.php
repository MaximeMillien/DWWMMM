<?php
require "classeCadre.php";

$employe1 = new Employe("Jean" , "Neymar" , 1850389546458 , 1500.56 , "soudeur");
$employe2 = new Employe("Simon" , "Jeremy" , 179028955812 , 1700.47 , "assistant mécanicien");
$employe3 = new Employe("Odile" , "Deray" , 285097154678 , 1900.14 , "magasinière");
$cadre1 = new Cadre("Alain" , "Deloin", 1840259453666 , 2100.33 ,"chef maintenance");

$employe1->effectueSonJob(). $employe2->effectueSonJob() . $employe3->effectueSonJob();

echo $cadre1->__toString();

$cadre1->Manage($cadre1 , $employe1 ,$employe2); 

$salaire1->augmenteUnSalarie($employe1);
?>