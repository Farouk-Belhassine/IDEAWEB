<?php

class Livraison  
{     
	private $idCommande;
	private $dateCommande;
	private $montantCommande;
	private $etatCommande;
	private $lieuLivraison;
	private $prixLivraison;
	private $idLivreur;
	private $idClient;
	private $etat;
	
	function __construct($idCommande,$dateCommande,$montantCommande,$etatCommande,$lieuLivraison,$prixLivraison,$idLivreur,$idClient,$etat)
	{
		$this->idCommande=$idCommande;
		$this->dateCommande=$dateCommande;
		$this->montantCommande=$montantCommande;
		$this->etatCommande=$etatCommande;
		$this->lieuLivraison=$lieuLivraison;
		$this->prixLivraison=$prixLivraison;
		$this->idLivreur=$idLivreur;
		$this->idClient=$idClient;
		$this->etat=$etat;
	}

	function get_idCommande()
	{
		return $this->idCommande;
	}
		function get_dateCommande()
	{
		return $this->dateCommande;
	}
	function get_montantCommande()
	{
		return $this->montantCommande;
	}
	function get_etatCommande()
	{
		return $this->etatCommande;
	}
	function get_lieuLivraison()
	{
		return $this->lieuLivraison;
	}
		function get_prixLivraison()
	{
		return $this->prixLivraison;
	}
	function get_idLivreur()
	{
		return $this->idLivreur;
	}
		function get_idClient()
	{
		return $this->idClient;
	}	
	function get_etat()
	{
		return $this->etat;
	}

}








?>