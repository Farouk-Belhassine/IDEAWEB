<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:13 GMT -->
<head>

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

 <form method="POST" action="ajouterfacture.php">
    <!--app open -->
		<div id="app" class="page">
			<section class="section">
				<div class="container">

				    <!--row open -->
					<div class="row">
						<div class="single-page">
							<div class="wrapper wrapper2">
								<form  class="card-body" tabindex="500">
									<h3 class="text-dark">Register</h3>
									<div class="passwd">
										<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter num" name="num">
									</div>
									<div class="passwd">
										<input type="number" class="form-control" id="exampleInputPassword1" placeholder="refcommande" name="refcommande">
									</div>

									<div class="passwd">
										<input type="date" class="form-control" id="exampleInputPassword1" placeholder="date commande" name="datecommande">
									</div>

									<div class="passwd">
										<input type="number" class="form-control" id="exampleInputPassword1" placeholder="prix total" name="prixtotal">
									</div>











                                      <div class="submit">
										<input class="btn btn-primary btn-block" type="submit" value="Register" name="ajouterfacture">
									</div>

                                       




                                 
							</div>
						</div>
					</div>
					<!--row closed -->

				</div>
			</section>
		</div>
	</form> 
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
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Othercharts js-->
		<script src="assets/plugins/othercharts/jquery.knob.js"></script>
		<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>
		<script src="assets/plugins/Chart.js/dist/Chart.min.js"></script>
		<script src="assets/plugins/Chart.js/dist/Chart.extension.js"></script>

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


	</body>

<!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:50 GMT -->
</html>