<?PHP
include '../../../entities/coupon.php';
include '../../../couponC.php';
$coupon1C=new couponC();
if (isset($_POST["num"])){
	$coupon1C->supprimercoupon($_POST["num"]);
	header('Location: affichercoupon.php');
}
?>