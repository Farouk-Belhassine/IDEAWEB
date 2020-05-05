<?php
include ("../../../entities/livreur.php");
include "../../../core/livreurC.php";


       
if (isset($_POST['CIN']) && isset($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['secteur']) && isset($_POST['tel']) && isset($_POST['date']) && isset($_POST['mail']) && isset($_POST['Num_permis'])) 
{
  
  $CIN=$_POST['CIN'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $dispo="available";
  $secteur=$_POST['secteur'];;
 
  $tel=$_POST['tel'];
  $date_naiss=$_POST['date'];
  $mail=$_POST['mail'];

  $num_permis=$_POST['Num_permis'];
$livreur=new livreur($nom,$prenom,$CIN,$tel,$secteur,$date_naiss,$mail,$num_permis,$dispo);


$livreurC=new livreurC();
$livreurC->ajouterLivreur($livreur);
 
header('Location: showdeleryman.php');


}
else 
{
  echo "verifier les champs";
}


?>

