<?PHP
include '../../../entities/coupon.php';
include '../../../core/couponC.php';

if(isset($_POST['valabilite']) and isset($_POST['taux_reduction']) and isset($_POST['num']) and isset($_POST['date_creation'])){
$coupon=new coupon($_POST['num'],$_POST['taux_reduction'],$_POST['valabilite'],$_POST['date_creation']);
  $couponC=new couponC();
  $couponC->supprimercoupon($_POST['num']);
  $couponC->ajoutercoupon($coupon);
  header('Location: affichercoupon.php');
}
else echo "vérifier les champs";
echo "valabilite: ${_POST['valabilite']}| taux_reduction: ${_POST['taux_reduction']}| num: ${_POST['num']}| date_creation: ${_POST['date_creation']}"
?>