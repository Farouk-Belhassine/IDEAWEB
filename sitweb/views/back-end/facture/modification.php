<?PHP
include "../../../core/factureC.php";
include "../../../entities/facture.php";
if (isset($_POST['num']) and isset($_POST['refcommande']) and isset($_POST['datecommande']) and isset($_POST['prixtptotal'])){
$factureA=new facture($_POST['num'],$_POST['refcommande'],$_POST['da'],$_POST['prixtptotal']);
$facturec=new factureC();
$facturec->modifierfacture($factureA,$num);
 //header('Location: listedescommandes.php');	
}else{
	echo "verifier les champs";
}

?>