<?PHP
class coupon{
	private $num;
	private $taux_reduction;
	private $valabilite;
	private $date_creation;
	function __construct($num,$taux_reduction,$valabilite,$date_creation){
		$this->num=$num;
		$this->taux_reduction=$taux_reduction;
		$this->valabilite=$valabilite;
		$this->date_creation=$date_creation;
	}
	function getnum(){
		return $this->num;
	}
	function gettaux_reduction(){
		return $this->taux_reduction;
	}
	function getvalabilite(){
		return $this->valabilite;
	}
	function getdate_creation(){
		return $this->date_creation;
	}
}
?>