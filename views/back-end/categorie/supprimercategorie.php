<?PHP
include '../../../core/categorieC.php';
   include '../../../entities/categorie.php';

$cC=new categorieC();
if (isset($_POST["ID_categorie"]))
{
	$cC->supprimer($_POST["ID_categorie"]);
	header('Location: affichercategorie.php');
}

?>