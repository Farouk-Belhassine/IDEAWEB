<?PHP
include 'C:/xampp/htdocs/siteweb/entities/avis.php';
include "C:/xampp/htdocs/siteweb/core/avisC.php";
$aC=new avisC();
if (isset($_POST["cin_client"]))
{
	$aC->supprimer($_POST["cin_client"]);
	header('Location: test_afficher1.php');
}

?>