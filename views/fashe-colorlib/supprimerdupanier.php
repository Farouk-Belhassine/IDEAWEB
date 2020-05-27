<?PHP
include '../../entities/panier.php';
include '../../core/panierC.php';

if (isset($_POST["idproduit"])){
	$panierC=new panierC();
	$nombreitem=$panierC->quantiteitem($_POST['idproduit']);
		$nombreitem-=1;
		if($nombreitem==0) $panierC->supprimerpanier($_POST['idproduit']);
		else{
			$prixitem=$panierC->prixitem($_POST['idproduit']);
			$panier=new panier($_POST['idproduit'],$nombreitem,($prixitem*$nombreitem));
			$panierC->supprimerpanier($_POST['idproduit']);
			$panierC->ajouterpanier($panier,$nombreitem,($prixitem*$nombreitem));
		}
	}
	header('Location: afficherpanier.php');
?>