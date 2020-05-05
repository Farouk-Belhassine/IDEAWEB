<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:13 GMT -->
<head>
		<script >
        function erreur()
	{   
		if (document.getElementById("id_produit").value=="") 
		{
			alert("please enter your id du produit");
			return false;
		}
		if (document.getElementById("reduction").value=="") 
		{
			alert("please enter your reduction value");
			return false;
		}
		if (document.getElementById("duree").value=="") 
		{
			alert("please enter your duree");
			return false;
		}

		var nouv_produits2 = document.getElementById("id_produit").value;
       if ( nouv_produits2.length!=4 || isNaN(nouv_produits2) )
       {
        alert('l id du produit doit contenir 4 chiffres ') ;
        	return false;   
       } 
        var duree2= document.getElementById("duree").value;
       if ( isNaN(duree2) || duree2.length!=2 )
       {
        alert('la duree est en nombre de jours  ') ;
        	return false;   
       }
        var reduction= document.getElementById("reduction").value;
       if ( isNaN(reduction) || reduction.length!=2 || reduction<10 )
       {
        alert('la reduction est en nombre de jours  ') ;
        	return false;   
       }

	}
   

</script>
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

<form method="POST" onsubmit="return erreur()" action="testajoutpromo.php">

<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Form Elements</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">ACTUALITE</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>AJOUTER PROMOTION</h4>
									</div>
									<div class="card-body">
										<form class="form-horizontal"  >
											<div class="form-group row">
												<label class="col-md-3 col-form-label"  >id du promo </label>
												<div class="col-md-9">
												<form name="id_produit">	<input name="id_produit" id="id_produit" type="text" class="form-control" onblur="verifnom(this);"> </form>
												</div>
											</div>
																<div class="form-group row">
												<label class="col-md-3 col-form-label">duree</label>
												<div class="col-md-9">
													<input class="form-control" id="duree" type="text" name="duree" onblur="verifnom(this);">
												</div>
											</div>
														<div class="form-group row">
												<label class="col-md-3 col-form-label">reduction</label>
												<div class="col-md-9">
													<input class="form-control" id="reduction" type="text" name="reduction" onblur="verifnom(this);">
												</div>
											</div>
												
									                                         <input class="btn btn-primary btn-block" type="submit" name="ajouter" value="ajouter" > </input>
										</form>
									</div>
								</div>
							</div>
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