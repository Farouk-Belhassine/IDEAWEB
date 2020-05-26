<?PHP
include 'C:/wamp64/www/projet_web/core/categorieC.php';
   include 'C:/wamp64/www/projet_web/entities/categorie.php';

$cC=new categorieC();
if (isset($_POST["ID_categorie"]))
{
	$cC->supprimer($_POST["ID_categorie"]);
	header('Location: affichercategorie.php');
}

?>