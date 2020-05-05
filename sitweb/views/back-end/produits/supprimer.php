<?PHP
include '../../../entities/produit.php';
include '../../../core/produitC.php';

$pC=new produitC();
if (isset($_POST["idproduit"]))
{
	$pC->supprimer($_POST["idproduit"]);
	header('Location: afficher.php');
}

?>