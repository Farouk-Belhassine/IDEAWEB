<?php

   include '../../../entities/actualite.php';
   include '../../../core/actualiteC.php';
/*
    if (isset($_POST['nouv_produits']) && isset($_POST['type']) && isset($_POST['durée']) && isset($_POST['titre'])   )

   	{if (!empty($_POST['nouv_produits'])&& !empty($_POST['type'])&& !empty($_POST['durée']) && !empty($_POST['titre']) ) 

   {
   	$nouv_produits= $_POST['nouv_produits'];
   	$type= $_POST['type'];
   	$durée= $_POST['durée'];
      $titre= $_POST['titre'];

   $actualite1=new actualite($nouv_produits,$type,$durée,$titre);
   $actualite1C=new actualiteC();
   $test=$actualite1C->ajouteractualite($actualite1);
   if($test==true)
   	echo "ajout avec success";
   else
   	echo "Echec";
}
} 
*/
if (isset($_POST['nouv_produits']) and isset($_POST['type']) and isset($_POST['duree']) and isset($_POST['titre']) ){
$actualite1=new actualite($_POST['nouv_produits'],$_POST['type'],$_POST['duree'],$_POST['titre']);
$actualite1C=new actualiteC();
$actualite1C->ajouteractualite($actualite1);
   echo "<script>alert(\" ajout avec success\")</script>";
header('Location: testaffiche.php');

}else{
   echo "vérifier les champs"; 
} 
?>


