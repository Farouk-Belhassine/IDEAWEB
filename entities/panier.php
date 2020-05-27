<?PHP
class panier{
	private $idproduit;
	private $quantite;
	private $prixtotal;
	function __construct($idproduit,$quantite,$prixtotal){
		$this->idproduit=$idproduit;
		$this->quantite=$quantite;
		$this->prixtotal=$prixtotal;
	}
	function getidproduit(){
		return $this->idproduit;
	}
	function getquantite(){
		return $this->quantite;
	}
	function getprixtotal(){
		return $this->prixtotal;
	}
}
?>