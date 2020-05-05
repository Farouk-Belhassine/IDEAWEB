<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:13 GMT -->
<head>

	 <script src="ajout.js"></script>




		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Splite-Admin Dashboard</title>

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

		<!--Morris css-->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

	</head>

	<body>
		
    <?php include "../template.php";?>

<form method="POST" action="ajoutProduit.php">
    <!--app open-->
		<div id="app" class="page">
			<section class="section">
				<div class="container">

				    <!--row open-->
					<div class="row">
						<div class="single-page">
							<div class="wrapper wrapper2">
								<form  class="card-body" tabindex="500">
									<h3 class="text-dark">Ajouter PRODUIT</h3>
									<div class="passwd">
										<input type="number" class="form-control" id="idproduit" placeholder="Enter id" name="idproduit">
									</div>
									<div class="passwd">
										<input type="text" class="form-control" id="Libelle" placeholder="Libelle" name="Libelle">
									</div>

									<div class="passwd">
										  
										<tr>
										<td><input type="checkbox" name="Sexe" value="FEMME">FEMME</td>
       									 <td><input type="checkbox" name="Sexe" value="HOMME">HOMME</td>
       									 <td><input type="checkbox" name="Sexe" value="ENFANT">ENFANT</td></tr>
									</div>

									<div class="passwd">
										<input type="number" class="form-control" id="Prix" placeholder="$" name="Prix">
									</div>

									<div class="passwd">
										
										<tr><td><input type="checkbox" name="Taille" value="M">M</td>
       									 <td><input type="checkbox" name="Taille" value="S">S</td>
       									 <td><input type="checkbox" name="Taille" value="L">L</td></tr>
									</div>

									<form action="upload.php" method="post" enctype="multipart/form-data">
    									Select image to upload:
    									<input type="file" name="urlImage" id="urlImage">
    							

									<div class="passwd">

										<input type="number" class="form-control" id="quantite" placeholder="quantite" name="quantite">
									</div>

									<div class="passwd">
										<input type="text" class="form-control" id="description" placeholder="description" name="description">
									</div>












                                      <div class="submit">
										<input class="btn btn-primary btn-block" type="submit" onclick="controle();return false;" value="Ajouter" name="ajouterproduit">
									</div>

                                       




                                 
							</div>
						</div>
					</div>
					<!--row closed-->

				</div>
			</section>
		</div>
		<!--app closed-->

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
		<script src="assets/plugins/scroll-up-bar/urlImaget/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Othercharts js-->
		<script src="assets/plugins/othercharts/jquery.knob.js"></script>
		<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>
		<script src="assets/plugins/Chart.js/urlImaget/Chart.min.js"></script>
		<script src="assets/plugins/Chart.js/urlImaget/Chart.extension.js"></script>

		<!--Morris js-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/morris/raphael.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Scripts js-->
		<script src="assets/js/dashboard2.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
		<script src="assets/js/sparkline.js"></script>

		<!--OtherCharts js-->
		<script src="assets/js/othercharts.js"></script>
		
		<!--Custom js-->
		<script src="assets/js/scripts.js"></script>

</form>
	</body>

<!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:50 GMT -->
</html>