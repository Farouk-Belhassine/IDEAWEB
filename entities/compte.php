<?php

  class Compte 
  {
  	private $E_mail ;
  	private $mdp ;
  	private $cin_client ;
  	private $nom ;
  	private $prenom ;
    private $adresse ;
    private $numero ;
    private $type ;
  	
  	function __construct($E_mail,$mdp,$cin_client,$nom,$prenom,$adresse,$numero,$type)
  	{

  		$this->E_mail=$E_mail;
  		$this->mdp=$mdp;
  		$this->cin_client=$cin_client ;
  		$this->nom=$nom;
  		$this->prenom=$prenom;
      $this->adresse=$adresse;
      $this->numero=$numero;
      $this->type=$type;
      

  	}

  	public function afficherCompte()
  	{
  		echo "E_mail : ".$this->E_mail."<br>";
  		echo "mdp : ".$this->mdp."<br>";
  		echo "cin_client : ".$this->cin_client."<br>";
  		echo "nom : ".$this->nom."<br>";
  		echo "prenom : ".$this->prenom."<br>";
      echo "adresse : ".$this->adresse."<br>";
      echo "numero : ".$this->numero."<br>";
      echo "type : ".$this->type."<br>";
  	}
    // getters 
  	public function getE_mail()
  	{
  		return $this->E_mail;
  	}
  	public function getmdp()
  	{
  		return $this->mdp;
  	}
  	public function getcin_client()
  	{
  		return $this->cin_client;
  	}
  	public function getnom()
  	{
  		return $this->nom;
  	}
  	public function getprenom()
  	{
  		return $this->prenom;
  	}
    public function getadresse()
    {
      return $this->adresse;
    }
    public function getnumero()
    {
      return $this->numero;
    }
    public function gettype()
    {
      return $this->type;
    }






   //setters 
  	public function setE_mail($E_mail)
  	{
       $this->E_mail=$E_mail;
  	}
  	public function setmdp($mdp)
  	{
       $this->mdp=$mdp;
  	}
  	public function setcin_client($cin_client)
  	{
       $this->cin_client=$cin_client;
  	}
  	public function setnom($nom)
  	{
       $this->nom=$nom;
  	}
  	public function setprenom($prenom)
  	{
       $this->prenom=$prenom;
  	}
    public function setadresse($adresse)
    {
       $this->adresse=$adresse;
    }
    public function setnumero($numero)
    {
       $this->numero=$numero;
    }
    public function settype($type)
    {
       $this->type=$type;
    }

  }

?>