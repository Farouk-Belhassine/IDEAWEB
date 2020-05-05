<HTML>
<head>
</head>
<body>
<?PHP

include '../../../core/categorieC.php';
   include '../../../entities/categorie.php';
if (isset($_GET['ID_categorie'])){
	$cC=new categorieC();
    $result=$cC->recuperercategorie($_GET['ID_categorie']);
	foreach($result as $row){
		$ID_categorie=$row['ID_categorie'];
		$nom_categorie=$row['nom_categorie'];
		

?>

<form method="POST">
<table>
<caption>Modifier categorie</caption>
<tr>
<td>ID_categorie</td>
<td><input type="text" name="ID_categorie" value="<?PHP echo $ID_categorie ?>"></td>
</tr>
<tr>
<td>nom_categorie</td>
<td><input type="text" name="nom_categorie" value="<?PHP echo $nom_categorie ?>"></td>
</tr>

<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="ID_categorie1" value="<?PHP echo $_GET['ID_categorie'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$categorie=new categorie($_POST['ID_categorie'],$_POST['nom_categorie']);
	$cC->modifiercategorie($categorie,$_POST['ID_categorie1']);
	
}

?>
</body>
</HTMl>