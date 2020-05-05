<?PHP
class facture{
	private $num;
	private $refcommande;
	private $datecommande;
	private $prixtotal;
	function __construct($num,$refcommande,$datecommande,$prixtotal){
		$this->num=$num;
		$this->refcommande=$refcommande;
		$this->datecommande=$datecommande;
		$this->prixtotal=$prixtotal;
	}
	
	function getrefcommande(){
		return $this->refcommande;
	}
	function getnum(){
		return $this->num;
	}
	function getdatecommande(){
		return $this->datecommande;
	}
	function getprixtotal(){
		return $this->prixtotal;
	}

	function setrefcommande($refcommande){
		$this->refcommande=$refcommande;
	}
	function setnum($num){
		$this->num=$num;
	}
	function setdatecommande($datecommande){
		$this->datecommande=$datecommande;
	}
	function setprixtotal($prixtotal){
		$this->prixtotal=$prixtotal;
	}
	
}

?>