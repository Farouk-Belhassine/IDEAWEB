<?php

session_start();

if($_SESSION['ty']!="admin") header('Location: ../../fashe-colorlib/session.html');

?>
<!DOCTYPE html>
<html lang="en">
<title>Coupons</title>
<head>
		<script >
        function erreur(){   
		if (document.getElementById("num").value==""){
			alert("Entrez le numéro du coupon");
			return false;
		}
		if (document.getElementById("taux_reduction").value==""){
			alert("Entrez le taux de réduction");
			return false;
		}
		if (document.getElementById("taux_reduction").value>1||document.getElementById("taux_reduction").value<0){
			alert("Le taux de réduction doit être entre 1 et 0!");
			return false;
		}
	}
</script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Splite-Admin Dashboard</title>
		<link rel="icon" href="favicon.html" type="image/x-icon"/>
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/icons.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	</head>
<body>
<?php include "../template.php";?>
<form method="POST" onsubmit="return erreur()" action="ajoutcouponfunction.php">
<div class="app-content">
					<section class="section">
						<div class="page-header">
							<h4 class="page-title">Form Elements</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">COUPONS</li>
							</ol>
						</div>
						<div class="row">
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>AJOUTER COUPON</h4>
									</div>
									<div class="card-body">
										<form class="form-horizontal"  >
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Numero du coupon</label>
												<div class="col-md-9">
													<input name="num" id="num" type="number" class="form-control" onblur="verifnom(this);">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">taux de réduction</label>
												<div class="col-md-9">
													<input class="form-control" id="taux_reduction" type="text" name="taux_reduction" onblur="verifnom(this);">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">valabilité</label>
												<div class="col-md-9">
													<select class="form-control" id="valabilite" type="text" name="valabilite">
														<option>Valable</option>
														<option>Non valable</option>
													</select>
												</div>
											</div>
									         <input class="btn btn-primary btn-block" type="submit" name="ajouter" value="ajouter"></input>
										</form>
									</div>
								</div>
							</div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.js"></script>
		<script src="assets/js/tooltip.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>
		<script src="assets/plugins/othercharts/jquery.knob.js"></script>
		<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>
		<script src="assets/plugins/Chart.js/dist/Chart.min.js"></script>
		<script src="assets/plugins/Chart.js/dist/Chart.extension.js"></script>
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/morris/raphael.min.js"></script>
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="assets/js/dashboard2.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
		<script src="assets/js/sparkline.js"></script>
		<script src="assets/js/othercharts.js"></script>
		<script src="assets/js/scripts.js"></script>
	</body>
</html>