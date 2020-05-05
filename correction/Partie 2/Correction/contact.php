<?php
class Contact
{
Private $nom;
 Private $prenom;
 Private $adr;
 private $codepost;
 function __construct($nom,$prenom,$adr,$codepost)
	{$this->nom=$nom;
	$this->prenom=$prenom;
    $this->adr=$adr;
    $this->codepost=$codepost;}
   function getnom() {return $this->nom;}
   function getprenom() {return $this->prenom;}
   function getadr() {return $this->adr=$adr;}
   function getcodepost() {return $this->codepost;}
   function setnom($nom) {$this->nom=$nom;}
   function setprenom($prenom) {$this->prenom=$prenom;}
   function setadr($adr) {$this->adr=$adr;}
   function setcodepost($codepost) {$this->codepost=$codepost;}
};
?>