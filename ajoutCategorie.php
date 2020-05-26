<?php
   include 'C:/wamp64/www/projet_web/core/categorieC.php';
   include 'C:/wamp64/www/projet_web/entities/categorie.php';
   if (isset($_POST['ID_categorie']) && isset($_POST['nom_categorie'])   )
    {if (!empty($_POST['ID_categorie'])&& !empty($_POST['nom_categorie']) ) 
   {
    $ID_categorie= $_POST['ID_categorie'];
    $nom_categorie= $_POST['nom_categorie'];
  
   $c=new categorie($ID_categorie,$nom_categorie);
   $cC=new categorieC();
   $test=$cC->ajoutercategorie($c);
   if($test==true)
   echo '<script language="JavaScript">
    alert("ajout avec succes");
    
    </script>';



  else
    echo "Echec";
}

}
 
?>