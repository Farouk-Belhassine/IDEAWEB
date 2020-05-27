<?php
include '../../entities/panier.php';
include '../../core/panierC.php';



if( isset($_POST['idproduit']) ){
$panierC=new panierC();
$nombreitem=$panierC->quantiteitem($_POST['idproduit']);
if($nombreitem!=0) $nombreitem+=1;
else $nombreitem=1;
$prixitem=$panierC->prixitem($_POST['idproduit']);
$panier=new panier($_POST['idproduit'],$nombreitem,($prixitem*$nombreitem));
$panierC->supprimerpanier($_POST['idproduit']);
$panierC->ajouterpanier($panier,$nombreitem,($prixitem*$nombreitem));
header('Location: afficherpanier.php');
}
else echo "vérifier les champs";
?>