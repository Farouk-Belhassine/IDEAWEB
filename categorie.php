<?php

class categorie
{
	private $ID_categorie;
	private $nom_categorie;
	
	
	


public function __construct($ID_categorie,$nom_categorie)
{

$this->ID_categorie=$ID_categorie;
$this->nom_categorie=$nom_categorie;







}
public function getnom_categorie(){return $this->nom_categorie;}
public function getID_categorie(){return $this->ID_categorie;}



}


  ?>