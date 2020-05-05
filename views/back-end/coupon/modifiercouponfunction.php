<?PHP
include '../../../entities/coupon.php';
include '../../../core/couponC.php';

$num=$_GET['num'];
$date_creation=$_GET['date_creation'];
$taux_reduction=$_GET['taux_reduction'];
$valabilite=$_GET['valabilite'];

  $coupon=new coupon($num,$taux_reduction,$valabilite,$date_creation);
  $couponC=new couponC();
  $couponC->modifiercoupon($coupon);
  header('Location: affichercoupon.php');
?>