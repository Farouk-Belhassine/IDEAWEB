<?php
   include 'C:/xampp/htdocs/siteweb/entities/avis.php';
   include 'C:/xampp/htdocs/siteweb/core/avisC.php';
   if (isset($_POST['cin_client']) && isset($_POST['reclamation']))
   	{if (!empty($_POST['cin_client'])&& !empty($_POST['reclamation'])) 
   {
   	
   	$cin_client= $_POST['cin_client'];
   	$reclamation= $_POST['reclamation'];
   	
   $a=new avis($cin_client,$reclamation);
   $aC=new avisC();
   $test=$aC->ajouter($a);
   if($test==true)
   {
       echo "<script>alert(\" ajout avec success !!!!!!!!!\")</script>";
   	//echo "ajout avec success";
   }

   else
   	echo "Echec";
}
}
 
?>