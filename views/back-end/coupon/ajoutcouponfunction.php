<?php
include '../../../entities/coupon.php';
include '../../../core/couponC.php';

if( isset($_POST['num']) and isset($_POST['taux_reduction']) and isset($_POST['valabilite']) ){
$coupon=new coupon($_POST['num'],$_POST['taux_reduction'],$_POST['valabilite'],date("Y/m/d"));
$couponC=new couponC();
$couponC->ajoutercoupon($coupon);
header('Location: affichercoupon.php');
}
else{
   echo "vérifier les champs";
}
?>