<HTML>
<head>
</head>
<body>
<?PHP
   include '../../../entities/actualite.php';
   include '../../../core/actualiteC.php';
if (isset($_GET['nouv_produits'])){
	$actualiteC1=new actualiteC();
    $result=$actualiteC1->recupereractualite($_GET['nouv_produits']);
	foreach($result as $row){
		$nouv_produits=$row['nouv_produits'];
		$type=$row['type'];
		$duree=$row['duree'];
		$titre=$row['titre'];
?>
<form method="POST">
<table>
<caption>Modifier actualite</caption>
<tr>
<td>id produits</td>
<td><input type="number" name="nouv_produits" value="<?PHP echo $nouv_produits ?>"></td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<tr>
<td>duree</td>
<td><input type="text" name="duree" value="<?PHP echo $duree ?>"></td>
</tr>
<tr>
<td> titre</td>
<td><input type="text" name="titre" value="<?PHP echo $titre ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="nouv_produits" value="<?PHP echo $_GET['nouv_produits'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$actualite=new actualite($_POST['nouv_produits'],$_POST['type'],$_POST['duree'],$_POST['titre']);
	$actualiteC1->modifieractualite($actualite,$_POST['nouv_produits']);
	echo $_POST['nouv_produits'];
	header('Location: testaffiche.php');
}
?>
</body>
</HTMl>