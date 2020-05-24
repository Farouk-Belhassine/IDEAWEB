<?PHP
include 'C:/xampp/htdocs/siteweb/entities/compte.php';
include "C:/xampp/htdocs/siteweb/core/compteC.php";
$cC=new compteC();
if (isset($_POST["cin_client"]))
{
	$cC->supprimer($_POST["cin_client"]);
	header('Location: test_afficher.php');
}

?>