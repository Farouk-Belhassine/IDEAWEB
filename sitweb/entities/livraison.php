<?php

class Livraison  
{     
	private $numCommande;
	private $Livreur;
	private $client;
	private $etat;
	private $datecommande;
	private $datelivraison;
	function __construct($numCommande,$Livreur,$client,$etat)
	{
		$this->numCommande=$numCommande;
		$this->date= date("Y-'m+1'-d H:i:s");
		$this->datelivraison=date('Y-m-d H:i:s', strtotime('+3 day'));
		$this->Livreur=$Livreur;
		$this->client=$client;
		$this->etat=$etat;
	}

	function get_numCommande()
	{
		return $this->numCommande;
	}
		function get_date()
	{
		return $this->date;
	}


	function get_datelivraison()
	{
		return $this->datelivraison;
	}
	
	function get_Livreur()
	{
		return $this->Livreur;
	}
		function get_client()
	{
		return $this->client;
	}	
	function get_etat()
	{
		return $this->etat;
	}

} 
?>