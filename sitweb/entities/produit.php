<?PHP
class produit{
	private $idproduit;
	private $Libelle ;
	private $Sexe ;
	private $Prix;
	private $Taille;
	private $urlImage;
	private $quantite;
	private $description;


	function __construct($idproduit,$Libelle ,$Sexe ,$Prix,$Taille,$urlImage,$quantite,$description){
		$this->idproduit=$idproduit;
		$this->Libelle =$Libelle ;
		$this->Sexe =$Sexe ;
		$this->Prix=$Prix;
		$this->Taille=$Taille;
		$this->urlImage=$urlImage;
		$this->quantite=$quantite;
		$this->description=$description;
	}
	
	function getidproduit(){
		return $this->idproduit;
	}
	function getLibelle (){
		return $this->Libelle ;
	}
	function getSexe (){
		return $this->Sexe ;
	}
	function getPrix(){
		return $this->Prix;
	}
	function getTaille(){
		return $this->Taille;
	}
	
	function geturlImage(){
		return $this->urlImage;
	}
	function getquantite(){
		return $this->quantite;
	}
	function getdescription(){
		return $this->description;
	}
function setid ($idproduit ){
		$this->idproduit =$idproduit ;
	}

	function setLibelle ($Libelle ){
		$this->Libelle =$Libelle ;
	}
	function setSexe ($Sexe ){
		$this->Sexe ;
	}
	function setPrix($Prix){
		$this->Prix=$Prix;
	}
	function setTaille($Taille){
		$this->Taille=$Taille;
	}
	function seturlImage($urlImage){
		$this->urlImage=$urlImage;
	}
	function setquantite($quantite){
		$this->quantite=$quantite;
	}

function setdescription($description){
		$this->description=$description;
	}

	
	
	
}

?>