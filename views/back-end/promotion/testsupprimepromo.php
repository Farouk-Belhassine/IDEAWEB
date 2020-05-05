<?PHP
  include '../../../entities/promotion.php';
include '../../../core/promotionC.php';

$promo1C=new promotionC();
if (isset($_POST["id_produit"]))
{
	$promo1C->supprimerpromotion($_POST["id_produit"]);
	header('Location: testaffichepromo.php');

}
else {echo "erreur";}
?>