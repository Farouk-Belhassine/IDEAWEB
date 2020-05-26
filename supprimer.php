<?PHP
include 'C:/wamp64/www/projet_web/entities/produit.php';
include 'C:/wamp64/www/projet_web/core/produitC.php';

$pC=new produitC();
if (isset($_POST["idproduit"]))
{
	$pC->supprimer($_POST["idproduit"]);
	header('Location: afficher.php');
}

?>