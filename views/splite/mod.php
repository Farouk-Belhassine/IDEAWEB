<?php 
include ('C:/wamp/www/tameplate/entities/livreur.php');
include ('C:/wamp/www/tameplate\core/livreurC.php');


$livreurC=new livreurC();

 ?>




<!DOCTYPE html>
<html lang="en">
  
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Splite-Admin Dashboard</title>
<!--favicon -->
    <link rel="icon" href="favicon.html" type="image/x-icon"/>

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!--Icons css-->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!--Style css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--mCustomScrollbar css-->
    <link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

    <!--Sidemenu css-->
    <link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

    <!--Morris css-->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

<script src="controleSaisie.js"></script>
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

           <form  class="form-container" method="post"> 
    <h1> modifier un livreur </h1>
    <body>
  <?php
    if (($_GET['login'])){
    $result=$livreurC->livreur_details($_GET['login']);
    foreach($result as $row){
      
?>

         <label for="login"> login  </label> 
   <input type="text" name="login" value="<?php echo $row['login'] ?>">

<label for="nom">nom</label>
      <input type="text" class="form-control" name="nom" placeholder="nom" id="nom">
      <label for="prenom">prenom</label>
    <input type="text" class="form-control" name="prenom" placeholder="prenom" id="prenom">
  <label for="dispo">disponibilité </label>
    <input type="text" class="form-control" name="dispo" placeholder="disponibilité" id="dispo">
 <label for="tel"> numéro téléphone </label>
    <input type="number" class="form-control" name="tel" placeholder="tel" id="tel">
    
       <div class="form-group">
                        <label>selectionner le secteur</label>
                        <select class="form-control" name="secteur" type="text"  id="secteur">
                            <option>Ariana</option>
                            <option>Béja</option>
                            <option>Ben Arous</option>
                            <option>Bizerte</option>
                            <option>Gabes</option>
                            <option>Gafsa</option>
                            <option>Jendouba</option>
                            <option>Kairouan</option>
                             <option>Kasserine</option>
                             <option>Kebili</option>
                                <option>La Manouba</option>
                                 <option>Le Kef</option>
                                 <option>Mahdia</option>
                                 <option>Médenine</option>
                             <option>Monastir</option>
                           <option>Nabeul</option>
                             <option>Sfax</option>
                              <option>Sidi Bouzid</option>
                               <option>Siliana</option>
                             <option>Sousse</option>
                            <option>Tataouine</option>
                               <option>Tozeur</option>
                             <option>Tunis</option>
                         <option>Zaghouan</option>
                        </select>
                    </div>

   <label for="date_naiss">date de naissance </label>
      <input type="date" name="date_naiss" class="form-control" placeholder="date_naiss" id="date_naiss">

       <label for="mail">mail</label>
      <input type="Email" name="mail" class="form-control" placeholder="mail" id="mail">
       <label for="mdp">mdp</label>
      <input type="text" class="form-control" name="mdp" id="mdp">
       <label for="Num_permis">Num_permis</label>

      <input type="number" class="form-control" name="Num_permis" id="Num_permis"> 
    <button type="submit" class="btn" onclick="return verifa()" >ajouter livreur</button>
    <a href="livreur.php " class="btn cancel"> Retour </a>
  </form>

</head>
</html>
