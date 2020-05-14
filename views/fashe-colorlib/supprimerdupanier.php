<?PHP
include '../../entities/panier.php';
include '../../core/panierC.php';

if (isset($_POST["idproduit"])){
	$panierC=new panierC();
	$mylist=$panierC->afficherpanierdansajout($_POST['idproduit']);
	if(!empty($mylist)){
		foreach ($mylist as $row){
		$ne=$row[0];
		$ni=(int)$ne;
		$ni=$ni-1;
		if($ni==0) $panierC->supprimerpanier($_POST['idproduit']);
		else{
			$panier=new panier($_POST['idproduit'],$ni);
			$panierC->supprimerpanier($_POST['idproduit']);
			$panierC->ajouterpanier($panier,$ni);
		}
		}
	}
	header('Location: afficherpanier.php');
}
?>