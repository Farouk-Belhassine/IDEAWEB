<?php
include '../../entities/wishlist.php';
include '../../core/wishlistC.php';

session_start();

if( isset($_POST['idproduit']) and isset($_SESSION['c']) ){
	$wishlistC=new wishlistC();
	$test=$wishlistC->produitverifexist($_POST['idproduit'],$_SESSION['c']);
	if(!$test){
		$wishlist=new wishlist($_POST['idproduit'],$_SESSION['c']);
		$wishlistC->ajouterwishlist($wishlist);
	}
	
	//echo "id produit: ${_POST['idproduit']}| cin: ${cin}";
	header('Location: afficherwishlist.php');
}
else if(!isset($_SESSION['c'])){
	//echo "veuillez vous connectez!";
	header('Location: session.html');
}
else echo "vérifier les champs";
?>