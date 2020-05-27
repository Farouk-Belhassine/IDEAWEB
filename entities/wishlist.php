<?PHP
class wishlist{
	private $idproduit;
	private $cinclient;

	function __construct($idproduit,$cinclient){
		$this->idproduit=$idproduit;
		$this->cinclient=$cinclient;
	}
	function getidproduit(){
		return $this->idproduit;
	}
	function getcinclient(){
		return $this->cinclient;
	}
}
?>