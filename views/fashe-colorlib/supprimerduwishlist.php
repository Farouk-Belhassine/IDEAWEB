<?PHP
include '../../entities/wishlist.php';
include '../../core/wishlistC.php';

session_start();

if (isset($_POST['idproduit']) and isset($_SESSION['c']) ){
	$wishlistC=new wishlistC();
	$wishlistC->supprimerwishlist($_POST['idproduit'],$_SESSION['c']);
	header('Location: afficherwishlist.php');
}
?>