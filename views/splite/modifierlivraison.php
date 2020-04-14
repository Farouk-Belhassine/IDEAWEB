<?php 
include ('C:/wamp/www/tameplate/entities/livraison.php');
include ('C:/wamp/www/tameplate/core/livraisonC.php');


$livraisonC=new livraisonC();

 ?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
    if (($_GET['idcommande']))
    {
    $result=$livraisonC->livraison_details($_GET['idcommande']);
    foreach($result as $row){
      
?>


 




  <form method="POST">
    <table class="table table-dark" border="">
  <thead>
      <tr>
      
      <th scope="col">idcommande</th>
<th><input type="text" name="idcommande" value="<?php echo $row['idcommande'] ?>"></th>
 

    

    </tr>
      <tr>
      
      <th scope="col">datecommande</th>
<th><input type="text" name="datecommande" value="<?php echo $row['datecommande'] ?>"></th>
 

    

    </tr>
          <tr>

      <th scope="col">montantcommande</th>
      <th><input type="text" name="montantcommande" value="<?php echo $row['montantcommande'] ?>"></th>
    
    </tr>

      <tr>

      <th scope="col">etatcommande</th>
      <th><input type="text" name="etatcommande"value="<?php echo $row['etatcommande'] ?>"></th>
    
    </tr>

      <tr>

      <th scope="col">lieulivraison</th>
      <th><input type="text" name="lieulivraison"value="<?php echo $row['lieulivraison'] ?>"></th>
    
    </tr>

     <tr>

      <th scope="col">prixlivraison</th>
      <th><input type="number" name="prixlivraison"value="<?php echo $row['prixlivraison'] ?>"></th>
    
    </tr>

     <tr>

      <th scope="col">idlivreur</th>
      <th><input type="number" name="idlivreur"value="<?php echo $row['idlivreur'] ?>"></th>
    
    </tr>


     <tr>

      <th scope="col">idclient</th>
      <th><input type="Email" name="idclient"value="<?php echo $row['idclient'] ?>"></th>
    
    </tr>


       <tr>

      <th scope="col">etat</th>
      <th><input type="text" name="etat"value="<?php echo $row['etat'] ?>"></th>
    
    </tr>

      
    

    <tr>
      <th></th>
      <th><input type="submit" name="modifier" value="modifier" >
<input type="hidden" name="id_ini" value="<?PHP echo $_GET['idcommande'];?>"></th>

    </tr>
     
  </thead>

 
  
</table>
</form>
<?php } 

if (isset($_POST['modifier'])){
  $idcommande=$_POST['id_ini'];

  $datecommande=$_POST['datecommande'];
  $etatcommande=$_POST['etatcommande'];
  $lieulivraison=$_POST['lieulivraison'];
  $prixlivraison=$_POST['prixlivraison'];
  $idlivreur=$_POST['idlivreur'];
  $etat=$_POST['etat'];
  $montantCommande=$_POST['montantCommande'];
  $idClient=$_POST['idClient'];
  $Livraison=new Livraison($idcommande,$datecommande,$montantcommande,$etatcommande,$lieulivraison,$prixlivraison,$idlivreur,$idclient,$etat);
  $livraisonC->modifierlivraison($livraison,$_POST['id_ini']);
}
} ?>
</body>
</html>