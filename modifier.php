

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:17 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Modify product</title>

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

	</head>

	<body class="bg-primary">
<?PHP
include 'C:/wamp64/www/projet_web/entities/produit.php';
include 'C:/wamp64/www/projet_web/core/produitC.php';
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
		<!--app open-->
		<div id="app" class="page">
			<section class="section">
				<div class="container">

				    <!--row open-->
					<div class="row">
						<div class="single-page">
							<div class="wrapper wrapper2">
								<form  class="card-body" tabindex="500">
									<h3 class="text-dark">modifier</h3>
									<div class="mail">
										<input type="text" name="idproduit" value="<?PHP echo $idproduit ?>">
									</div>
									<div class="passwd">
										<input type="text" name="Libelle" value="<?PHP echo $Libelle ?>">
									</div>
									<div class="passwd">
										<input type="text" name="Sexe" value="<?PHP echo $Sexe ?>">
									</div>
									<div class="passwd">
										<input type="text" name="Prix" value="<?PHP echo $Prix ?>">
									</div>
									<div class="passwd">
										<input type="text" name="Taille" value="<?PHP echo $Taille ?>">
									</div>
									<div class="passwd">
										<input type="text" name="urlImage" value="<?PHP echo $urlImage ?>">
									</div>
									<div class="passwd">
										<input type="text" name="quantite" value="<?PHP echo $quantite ?>">
									</div>
									<div class="passwd">
										<input type="text" name="description" value="<?PHP echo $description ?>">
									</div>

									
                                             
                                             <div class="submit">
										<input class="btn btn-primary btn-block" type="submit" name="modifier" value="modifier">
									</div>
									<tr>

<td><input type="hidden" name="idproduit11" value="<?PHP echo $_GET['idproduit'];?>"></td>
</tr>

									

								</form>
								
							</div>
						</div>
					</div>
					<!--row closed-->

				</div>
			</section>
		</div>
		<!--app closed-->

		<!--Jquery.min js-->
		<script src="assets/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="assets/js/popper.js"></script>

		<!--Tooltip js-->
		<script src="assets/js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Jquery star rating-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
		<script src="assets/js/moment.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
$produit=new produit($_POST['idproduit'],$_POST['Libelle'],$_POST['Sexe'],$_POST['Prix'],$_POST['Taille'],$_POST['urlImage'],$_POST['quantite'],$_POST['description']);
	$pC->modifierproduit($produit,$_POST['idproduit11']);
	//echo $_POST['cin_client11'];
	header('Location: afficher.php');
}
?>
	</body>

<!-- Mirrored from www.spruko.com/demo/splite/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:17 GMT -->
</html>

