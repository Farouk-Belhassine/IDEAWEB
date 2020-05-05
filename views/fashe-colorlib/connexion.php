<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include'compte.php';
//$log="admin";
//$Password="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$Password'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$compte=new compte($_POST['nom'],$_POST['mdp'],$conn);
$co=$compte->Logedin($conn,$_POST['nom'],$_POST['mdp']);

	//var_dump($u);
//$logR=$_POST['login'];
//$PasswordR=$_POST['Password'];
$vide=false;
if (!empty($_POST['nom']) && !empty($_POST['mdp'])){
	
	foreach($co as $t){
		$vide=true;
	if ($t['nom']==$_POST['nom'] && $t['mdp']==$_POST['mdp']){
		
		session_start();
		$_SESSION['e']=$_POST['E_mail'];
		$_SESSION['m']=$_POST['mdp'];
		$_SESSION['c']=$t['cin_client'];
		$_SESSION['n']=$t['nom'];
		$_SESSION['p']=$t['prenom'];
		$_SESSION['a']=$t['adresse'];
		$_SESSION['nu']=$t['numero'];
		$_SESSION['ty']=$t['type'];
		header("location:contact.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=session.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="auth.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>