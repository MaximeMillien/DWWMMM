<?php
require "classeCadre.php";
require "classeEmployé.php";

$employe1 = new Employe("Jean" , "Neymar" , 1850389546458 , 1500.56 , "soudeur");
$employe2 = new Employe("Simon" , "Jeremy" , 179028955812 , 1700.47 , "assistant mécanicien");
$employe2 = new Employe("Odile" , "Deray" , 285097154678 , 1900.14 , "magasinière");

$cadre1 = new Cadre("Alain" , "Deloin", 1840259453666 , 2100.33 ,"chef maintenance");

$employe1->setSalaire($salaire * 1.1);
$employe3->setSalaire($salaire * 1.2);

?>