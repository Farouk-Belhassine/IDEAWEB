<?PHP
include "../../core/commandeC.php";
include "../../entities/commande.php";
session_start();
if(isset($_SESSION['m'])){
	if (isset($_POST['cin']) and isset($_POST['idpanier']) and isset($_POST['datelimite']) and isset($_POST['prixlivraison'])){
	$commande1=new commande($_POST['cin'],$_POST['idpanier'],$_POST['datelimite'],$_POST['prixlivraison']);
	$commande1x=new commandeC();
	$commande1x->ajoutercommande($commande1);
		
	//header('Location: afficher.php');
}else{
	//header('Location: session.php');
	var_dump($_POST);
}
}
else{
	header('Location: session.php');
}


?>