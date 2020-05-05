<HTML>
<head>
</head>
<body>
<?PHP
include '../../../entities/produit.php';
include '../../../core/produitC.php';

if (isset($_GET['idproduit'])){
	$pC=new produitC();
    $result=$pC->recupererproduit($_GET['idproduit']);
	foreach($result as $row){
		$idproduit=$row['idproduit'];
		$Libelle=$row['Libelle'];
		$Sexe=$row['Sexe'];
		$Prix=$row['Prix'];
		$Taille=$row['Taille'];
		$urlImage=$row['urlImage'];
		$quantite=$row['quantite'];
		$description=$row['description'];

?>

<form method="POST">
<table>
<caption>Modifier produit</caption>
<tr>
<td>idproduit</td>
<td><input type="text" name="idproduit" value="<?PHP echo $idproduit ?>"></td>
</tr>
<tr>
<td>Libelle</td>
<td><input type="text" name="Libelle" value="<?PHP echo $Libelle ?>"></td>
</tr>
<tr>
<td>Sexe</td>

										<tr>
										<td><input type="checkbox" name="Sexe" value="FEMME">FEMME</td>
       									 <td><input type="checkbox" name="Sexe" value="HOMME">HOMME</td>
       									 <td><input type="checkbox" name="Sexe" value="ENFANT">ENFANT</td></tr>
<tr>
<td> prix</td>
<td><input type="number" name="Prix" value="<?PHP echo $Prix ?>"></td>
</tr>
<tr>
<td> Taille</td>
<tr><td><input type="checkbox" name="Taille" value="M">M</td>
  <td><input type="checkbox" name="Taille" value="S">S</td>
 <td><input type="checkbox" name="Taille" value="L">L</td></tr></tr>
<tr>
  <td>Select image to upload:</td>
 <td> <form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="urlImage" value="<?PHP echo $urlImage ?>"></td>
    </form></tr>

<tr>
<td> quantite</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>

</tr>
<tr>
<td> description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idproduit1" value="<?PHP echo $_GET['idproduit'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit($_POST['idproduit'],$_POST['Libelle'],$_POST['Sexe'],$_POST['Prix'],$_POST['Taille'],$_POST['urlImage'],$_POST['quantite'],$_POST['description']);
	$pC->modifierproduit($produit,$_POST['idproduit1']);
	//echo $_POST['idproduit1'];
	//header('Location: afficherproduits.php');
}

?>
</body>
</HTMl>