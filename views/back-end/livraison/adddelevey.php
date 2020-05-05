<?php
include ("../../entities/livraison.php");
include "../../core/livraisonC.php";
 
 


	$secteur="Medenine";

	 $livreur1C=new livraisonC();
 $liste =$livreur1C->livreur_details($secteur);
 foreach($liste as $row)
 {   
$cin= $row['cin'];
$nb= $row['nb'];
  }
$livraion=new Livraison(1,$cin,12345678,2);
$livraionC=new LivraisonC();
$livraionC->ajouterLivraison($livraion);
$livreur1C->valider($cin,$nb);




?>
 <script>
alert("livraison passer ");
</script>