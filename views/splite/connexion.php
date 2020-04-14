l<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';
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
$user=new User($_POST['login'],$_POST['Password'],$conn);
$u=$user->Logedin($conn,$_POST['login'],$_POST['Password']);

	//var_dump($u);
//$logR=$_POST['login'];
//$PasswordR=$_POST['Password'];
$vide=false;
if (!empty($_POST['login']) && !empty($_POST['Password'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['user_name']==$_POST['login'] && $t['user_pass']==$_POST['Password']){
		
		session_start();
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=$_POST['Password'];
		$_SESSION['r']=$t['role'];
		header("location:../splite/livreur.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=auth.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="auth.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>