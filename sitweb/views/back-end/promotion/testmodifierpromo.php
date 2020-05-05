<HTML>
<head>
</head>
<body>
<?PHP
  include '../../../entities/promotion.php';
include '../../../core/promotionC.php';

if (isset($_GET['id_produit'])){
	$promoC1=new promotionC();
    $result=$promoC1->recupererpromotion($_GET['id_produit']);
	foreach($result as $row){
		$id_produit=$row['id_produit'];
		$duree=$row['duree'];
		$reduction=$row['reduction'];
		
?>
<form method="POST">
<table>
<caption>Modifier actualite</caption>
<tr>
<td>id produits</td>
<td><input type="number" name="id_produit" value="<?PHP echo $id_produit ?>"></td>
</tr>
<tr>
<td>duree</td>
<td><input type="text" name="duree" value="<?PHP echo $duree ?>"></td>
</tr>
<tr>
<td>reduction</td>
<td><input type="text" name="reduction" value="<?PHP echo $reduction ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_produit" value="<?PHP echo $_GET['id_produit'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$promo=new promotion($_POST['id_produit'],$_POST['duree'],$_POST['reduction']);
	$promoC1->modifierpromotion($promo,$_POST['id_produit']);
	echo $_POST['id_produit'];
	header('Location: testaffichepromo.php');
}
?>
</body>
</HTMl>