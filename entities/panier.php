<?PHP
class panier{
	private $idproduit;
	private $quantite;
	function __construct($idproduit,$quantite){
		$this->idproduit=$idproduit;
		$this->quantite=$quantite;
	}
	function getidproduit(){
		return $this->idproduit;
	}
	function getquantite(){
		return $this->quantite;
	}
}
?>