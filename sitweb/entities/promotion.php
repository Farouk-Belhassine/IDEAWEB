<?PHP
class promotion{
	private $id_produit;
	private $duree;
	private $reduction;
	function __construct($id_produit,$duree,$reduction){
		$this->id_produit=$id_produit;
		$this->duree=$duree;
		$this->reduction=$reduction;
	}
	function getid_produit(){
		return $this->id_produit;
	}
	function getreduction(){
		return $this->reduction;
	}
	function getduree(){
		return $this->duree;
	}
		
}

?>