<?PHP
include '../../../core/actualiteC.php';
   include '../../../entities/actualite.php';
$actualite1C=new actualiteC();
if (isset($_POST["type"]))
{
	$actualite1C->supprimeractualite($_POST["type"]);
	header('Location: testaffiche.php');
}

?>