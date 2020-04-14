<?PHP

include ('C:/wamp/www/tameplate\core/livreurC.php');
$tr=new reclamationC();
$tr=new livreurC();
if (isset($_GET["c"])){
	mail($_GET["c"],"Success","votre reclmation est en cours de traitement , merci pour votre confiance ");
	header('Location:ajoutL.php');
}

?>