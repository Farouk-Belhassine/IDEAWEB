<?PHP
include 'D:/apps/wamp64/www/sitweb/entities/panier.php';
include 'D:/apps/wamp64/www/sitweb/core/panierC.php';
$panier1C=new panierC();
if (isset($_POST["idproduit"])){
	$panier1C->supprimerpanier($_POST["idproduit"]);
	header('Location: afficherpanier.php');
}
?>