<?php 
include ('C:/wamp/www/tameplate/entities/livreur.php');
include ('C:/wamp/www/tameplate\core/livreurC.php');


$livreurC=new livreurC();

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
    if (($_GET['login'])){
    $result=$livreurC->livreur_details($_GET['login']);
    foreach($result as $row){
      
?>

  <form  class="form-container" method="post"> 
   
      
      <th scope="col">login</th>
<th><input type="text" name="login" value="<?php echo $row['login'] ?>"></th>
 

    

    </tr>
      <tr>
      
      <th scope="col">nom</th>
<th><input type="text" name="nom" value="<?php echo $row['nom'] ?>"></th>
 

    

    </tr>
          <tr>

      <th scope="col">prenom</th>
      <th><input type="text" name="prenom" value="<?php echo $row['prenom'] ?>"></th>
    
    </tr>

      <tr>

      <th scope="col">dispo</th>
      <th><input type="text" name="dispo"value="<?php echo $row['dispo'] ?>"></th>
    
    </tr>

      <tr>

      <th scope="col">secteur</th>
      <th><input type="text" name="secteur"value="<?php echo $row['secteur'] ?>"></th>
    
    </tr>

     <tr>

      <th scope="col" >tel</th>
      <br>
   <th><input type="text" name="tel"value="<?php echo $row['tel'] ?>"></th>
    
    </tr>
<br>
     <tr>

      <th scope="col">date_naiss</th>
      <br>
        <th><input type="text" name="date_naiss"value="<?php echo $row['date_naiss'] ?>"></th>
    
    </tr>


     <tr>
<br>
      <th scope="col">mail</th>
      <br>
      <th><input type="text" name="mail"value="<?php echo $row['mail'] ?>"></th>
    
    </tr>

<br>
       <tr>

      <th scope="col">mdp</th>
      <th><input type="text" name="mdp"value="<?php echo $row['mdp'] ?>"></th>
    
    </tr>

       <tr>

      <th scope="col">num_permis</th>
      <br>
      <th><input type="text" name="num_permis"value="<?php echo $row['num_permis'] ?>"></th>
    
    </tr>
    

    <tr>
      <br>
      <th><input type="submit" class="btn" name="modifier" value="modifier" >
<input type="hidden" name="login_ini" value="<?PHP echo $_GET['login'];?>"></th>

    </tr>
     


 
  

</form>
<?php } 

if (isset($_POST['modifier'])){
  $login=$_POST['login_ini'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $dispo=$_POST['dispo'];
  $secteur=$_POST['secteur'];
  $tel=$_POST['tel'];
  $date_naiss=$_POST['date_naiss'];
  $mail=$_POST['mail'];
  $mdp=$_POST['mdp'];
  $num_permis=$_POST['num_permis'];

$livreur=new livreur($login,$nom,$prenom,$tel,$secteur,$date_naiss,$mail,$mdp,$num_permis,$dispo);
  $livreurC->modifierlivreur($livreur,$_POST['login_ini']);
}

} ?>
</body>
</html>