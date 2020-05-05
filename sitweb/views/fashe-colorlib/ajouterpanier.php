<?php
include 'D:/apps/wamp64/www/sitweb/entities/panier.php';
include 'D:/apps/wamp64/www/sitweb/core/panierC.php';

if( isset($_POST['idproduit']) ){
$panier=new panier($_POST['idproduit'],1);
$panierC=new panierC();
$panierC->ajouterpanier($panier);
header('Location: afficherpanier.php');
}
else{
   echo "vérifier les champs";
}
?>