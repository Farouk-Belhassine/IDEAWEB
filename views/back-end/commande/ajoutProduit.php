<?php
   include "../../../core/produitC.php";
   include "../../../entities/produit.php";
   if (isset($_POST['idproduit']) && isset($_POST['Libelle']) && isset($_POST['Sexe']) && isset($_POST['Prix']) &&  isset($_POST['Taille']) && isset($_POST['urlImage']) && isset($_POST['quantite']) && isset($_POST['description'])  )
    {if (!empty($_POST['idproduit'])&& !empty($_POST['Libelle'])&& !empty($_POST['Sexe'])&& !empty($_POST['Prix'])&& !empty($_POST['Taille'])   && !empty($_POST['urlImage']) && !empty($_POST['quantite']) && !empty($_POST['description']) ) 
   {
    $idproduit= $_POST['idproduit'];
    $Libelle= $_POST['Libelle'];
    $Sexe= $_POST['Sexe'];
    $Prix= $_POST['Prix'];
    $Taille= $_POST['Taille'];
      $urlImage= $_POST['urlImage'];
      $quantite= $_POST['quantite'];
      $description= $_POST['description'];
   $p=new produit($idproduit,$Libelle,$Sexe,$Prix,$Taille,$urlImage,$quantite,$description);
   $pC=new produitC();
   $test=$pC->ajouterproduit($p);
   if($test==true)
   echo '<script language="JavaScript">
    alert("ajout avec succes");
    
    </script>';



  else
    echo "Echec";
}

}
 
?>