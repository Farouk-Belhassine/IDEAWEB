<?PHP
include "../../../core/commandeC.php";
$commandeC=new commandeC();
if (isset($_POST["refcommande"])){
	$commandeC->supprimercommande($_POST["refcommande"]);
	header('Location: afficher.php');
}

?>