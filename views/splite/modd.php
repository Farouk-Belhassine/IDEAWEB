<?php 
include ('C:/wamp/www/tameplate/entities/livraison.php');
include ('C:/wamp/www/tameplate/core/livraisonC.php');


  $LivraisonC=new LivraisonC();

 ?>


<style>
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  bottom: 23px;

}


/* The popup form - hidden by default */
.form-popup {
  display: none;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

body {font-family: Arial, Helvetica, sans-serif;}

</style>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  

   
  <?php
    if (($_GET['idCommande'])){
    $result=$livraisonC->livraison_details($_GET['idCommande']);
    foreach($result as $row){
      
?>

  <form  class="form-container" method="post"> 
   
      
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
      <th><input type="text" name="etatcommande" value="<?php echo $row['etatcommande'] ?>"></th>
    
    </tr>
        <tr>

      <th scope="col">lieuLivraison</th>
      <th><input type="text" name="lieuLivraison" value="<?php echo $row['lieuLivraison'] ?>"></th>
    
    </tr>
           <tr>

      <th scope="col">prixlivraison</th>
      <th><input type="text" name="prixlivraison" value="<?php echo $row['prixlivraison'] ?>"></th>
    
    </tr>
      <tr>

      <th scope="col">idlivreur</th>
      <th><input type="text" name="idlivreur" value="<?php echo $row['idlivreur'] ?>"></th>
    
    </tr>
        <tr>

      <th scope="col">idclient</th>
      <th><input type="text" name="idclient" value="<?php echo $row['idclient'] ?>"></th>
    
    </tr>
          <tr>

      <th scope="col">etat</th>
      <th><input type="text" name="etat" value="<?php echo $row['etat'] ?>"></th>
    
    </tr>
      
    

 
     


    

    

    <tr>
      <br>
      <th><input type="submit" name="modifier" value="modifier" >
<input type="hidden" name="id_ini" value="<?PHP echo $_GET['idcommande'];?>"></th>

    </tr>
     


 
  

</form>
<?php } 

if (isset($_POST['modifier'])){

   
      
  $idcommande=$_POST['idcommande'];
  $datecommande=$_POST['datecommande'];
  $montantcommande=$_POST['montantcommande'];
  $etatcommande=$_POST['etatcommande'];
  $lieuLivraison=$_POST['lieuLivraison'];
  $prixlivraison=$_POST['prixlivraison'];
  $idlivreur=$_POST['idlivreur'];
  $idclient=$_POST['idclient'];
  $etat=$_POST['etat'];


$livraison=new livraison($idCommande,$dateCommande,$montantCommande,$etatCommande,$lieuLivraison,$prixLivraison,$idLivreur,$idClient,$etat);

  $livraisonC->modifierlivraison($livraison,$_POST['id_ini']);
}
} ?>
</body>
</html>