<?php
   include 'C:/Users/hasni.DESKTOP-TMD7FCP/Desktop/tamplate/projet_web/views/fashe-colorlib/compte.php';
   include 'C:/Users/hasni.DESKTOP-TMD7FCP/Desktop/tamplate/projet_web/views/fashe-colorlib/compteC.php';
   if (isset($_POST['E_mail']) && isset($_POST['mdp']) && isset($_POST['cin_client']) && isset($_POST['nom']) &&  isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['numero']) && isset($_POST['type'])  )
   	{if (!empty($_POST['E_mail'])&& !empty($_POST['mdp'])&& !empty($_POST['cin_client'])&& !empty($_POST['nom'])&& !empty($_POST['prenom'])   && !empty($_POST['adresse']) && !empty($_POST['numero']) && !empty($_POST['type']) ) 
   {
   	$E_mail= $_POST['E_mail'];
   	$mdp= $_POST['mdp'];
   	$cin_client= $_POST['cin_client'];
   	$nom= $_POST['nom'];
   	$prenom= $_POST['prenom'];
      $adresse= $_POST['adresse'];
      $numero= $_POST['numero'];
      $type= $_POST['type'];
   $c=new compte($E_mail,$mdp,$cin_client,$nom,$prenom,$adresse,$numero,$type);
   $cC=new compteC();
   $test=$cC->ajouter($c);
   if($test==true)
   {
       echo "<script>confirm(\" ajout avec success !!!!!!!!!\")</script>";
   	//echo "ajout avec success";
   }

   else
   	echo "Echec";
}
}
 
?>