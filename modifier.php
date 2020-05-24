<HTML>
<head>
</head>
<body>
<?PHP
include "C:/xampp/htdocs/siteweb/entities/compte.php";
include "C:/xampp/htdocs/siteweb/core/compteC.php";
if (isset($_GET['cin_client'])){
	$compteC=new compteC();
    $result=$compteC->recuperer($_GET['cin_client']);
	foreach($result as $row){
		$E_mail=$row['E_mail'];
		$mdp=$row['mdp'];
		$cin_client=$row['cin_client'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$adresse=$row['adresse'];
		$numero=$row['numero'];
		$type=$row['type'];
?>
<form method="POST">
<table border="10">
<caption>Modifier</caption>
<tr>
<td>E_mail</td>
<td><input type="email" name="E_mail" value="<?PHP echo $E_mail ?>"></td>
</tr>
<tr>
<td>mdp</td>
<td><input type="password" name="mdp" value="<?PHP echo $mdp ?>"></td>
</tr>
<tr>
<td>cin_client</td>
<td><input type="text" name="cin_client" value="<?PHP echo $cin_client ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>numero</td>
<td><input type="text" name="numero" value="<?PHP echo $numero ?>"></td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>


<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>

<td><input type="hidden" name="cin_client11" value="<?PHP echo $_GET['cin_client'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$compte=new compte($_POST['E_mail'],$_POST['mdp'],$_POST['cin_client'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['numero'],$_POST['type']);
	$compteC->modifier($compte,$_POST['cin_client11']);
	//echo $_POST['cin_client11'];
	header('Location: test_afficher.php');
}
?>
</body>
</HTMl>