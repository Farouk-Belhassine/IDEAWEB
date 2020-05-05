<?PHP
include "../../../core/factureC.php";
include "../../../entities/facture.php";



if (isset($_POST['num']) and isset($_POST['refcommande']) and isset($_POST['datecommande']) and isset($_POST['prixtotal'])){

	$facture1=new facture($_POST['num'],$_POST['refcommande'],$_POST['datecommande'],$_POST['prixtotal']);
	$facture1x=new factureC();
	$facture1x->ajouterfacture($facture1);
		
	header('Location: afficher.php');
}else{
	echo "verifier les champs";
	var_dump($_POST);
}

?>