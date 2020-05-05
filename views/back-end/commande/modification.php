<?PHP
include "../../../core/commandeC.php";
include "../../../entities/commande.php";
if (isset($_POST['refcommande']) and isset($_POST['cin']) and isset($_POST['idpanier']) and isset($_POST['datelimite']) and isset($_POST['prixlivraison'])){
$commandeA=new commande($_POST['refcommande'],$_POST['cin'],$_POST['idpanier'],$_POST['datelimite'],$_POST['prixlivraison']);
$commandec=new commandeC();
$commandec->modifiercommande($commandeA,$refcommande);
 //header('Location: listedescommandes.php');	
}else{
	echo "verifier les champs";
}

?>