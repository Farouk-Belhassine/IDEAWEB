<?PHP
class actualite{
	private $nouv_produits;
	private $type;
	private $duree;
	private $titre;
	function __construct($nouv_produits,$type,$duree,$titre){
		$this->nouv_produits=$nouv_produits;
		$this->type=$type;
		$this->duree=$duree;
		$this->titre=$titre;

	}
	function gettitre(){
		return $this->titre;
	}
	function getnouv_produits(){
		return $this->nouv_produits;
	}
	function gettype(){
		return $this->type;
	}
	function getduree(){
		return $this->duree;
	}


	function setnouv_produits($nouv_produits){
		$this->nouv_produits=$nouv_produits;
	}
	function settype($type){
		$this->type=$type;
	}

	function setduree($duree){
		$this->duree=$duree;
	}
		function settitre($titre){
		$this->titre=$titre;
	}
	
}

?>