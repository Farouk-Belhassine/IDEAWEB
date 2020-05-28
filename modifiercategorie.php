<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:17 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Modify category </title>

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

include 'C:/wamp64/www/projet_web/core/categorieC.php';
 include 'C:/wamp64/www/projet_web/entities/categorie.php';
if (isset($_GET['ID_categorie'])){
	$cC=new categorieC();
    $result=$cC->recuperercategorie($_GET['ID_categorie']);
	foreach($result as $row){
		$ID_categorie=$row['ID_categorie'];
		$nom_categorie=$row['nom_categorie'];
		

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
										<input type="text" name="ID_categorie" value="<?PHP echo $ID_categorie ?>">
									</div>
									<div class="passwd">
										<input type="text" name="nom_categorie" value="<?PHP echo $nom_categorie ?>">
									</div>

									
                                             
                                             <div class="submit">
										<input class="btn btn-primary btn-block" type="submit" name="modifier" value="modifier">
									</div>
									<tr>

<td><input type="hidden" name="ID_categorie11" value="<?PHP echo $_GET['ID_categorie'];?>"></td>
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
	$categorie=new categorie($_POST['ID_categorie'],$_POST['nom_categorie']);
	$cC->modifiercategorie($categorie,$_POST['ID_categorie11']);
	//echo $_POST['cin_client11'];
	header('Location: affichercategorie.php');
}
?>
	</body>

<!-- Mirrored from www.spruko.com/demo/splite/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:17 GMT -->
</html>


