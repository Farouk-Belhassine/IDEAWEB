<?PHP
include '../../../entities/coupon.php';
include '../../../couponC.php';

if (isset($_POST["num"])){
	$coupon1C=new couponC();
	$coupon1C->supprimercoupon($_POST["num"]);
	header('Location: affichercoupon.php');
}
?>