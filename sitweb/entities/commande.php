<?PHP
class commande{
	private $cin;
	private $idpanier;
	private $datelimite;
	private $prixlivraison;
	function __construct($cin,$idpanier,$datelimite,$prixlivraison){
		$this->cin=$cin;
		$this->idpanier=$idpanier;
		$this->datelimite=$datelimite;
		$this->prixlivraison=$prixlivraison;
	}
	function getcin(){
		return $this->cin;
	}
	function getidpanier(){
		return $this->idpanier;
	}
	function getdatelimite(){
		return $this->datelimite;
	}
	function getprixlivraison(){
		return $this->prixlivraison;
	}
	function setcin($cin){
		$this->cin=$cin;
	}
	function setidpanier($idpanier){
		$this->idpanier=$idpanier;
	}
	function setdatelimite($datelimite){
		$this->datelimite=$datelimite;
	}
	function setprixlivraison($prixlivraison){
		$this->prixlivraison=$prixlivraison;
	}
	
}

?>