<?PHP
include "../../../core/factureC.php";
$factureC=new factureC();
if (isset($_POST["num"])){
	$factureC->supprimerfacture($_POST["num"]);
	header('Location: afficher.php');
}

?>