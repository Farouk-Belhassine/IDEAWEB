<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:13 GMT -->
<head>
	<script >
	function controle()
	{
        
		if (document.getElementById("c0").value=="") 
		{
			alert("please enter your e-mail !");
			return false;
		}
		if (document.getElementById("c1").value=="") 
		{
			alert("please enter your password !");
			return false;
		}
		//if ((string(document.getElementById("c2").value).length) > 8) 
		if (document.getElementById("c2").value=="")
		{
			alert("please enter your cin !");
			return false;
		}
		if (document.getElementById("c3").value=="") 
		{
			alert("please enter your last name !");
			return false;
		}
		if (document.getElementById("c4").value=="") 
		{
			alert("please enter your first name !");
			return false;
		}
		if (document.getElementById("c5").value=="") 
		{
			alert("please enter your address !");
			return false;
		}
		if (document.getElementById("c6").value=="") 
		{
			alert("please enter your number !");
			return false;
		}
		if (document.getElementById("c7").value=="") 
		{
			alert("please enter your type !");
			return false;
		}
		var a = document.getElementById("c2").value;
		if (a.length!=8 )
		{
			alert(" cin length incorrect !");
			//a.style.backgroundColor="red";
			return false;
		}
		if (isNaN(a) )
		{
			//a.style.backgroundColor="red";
			alert(" MUST BE A NUMBER !");
			
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
		
    

<form method="POST" onsubmit="return controle()" action="test_ajouter.php">
    <!--app open-->
		<div id="app" class="page">
			<section class="section">
				<div class="container">

				    <!--row open-->
					<div class="row">
						<div class="single-page">
							<div class="wrapper wrapper2">
								<form  class="card-body" tabindex="500">
									<h3 class="text-dark">Register</h3>
									<div class="mail">
										<input id="c0" type="email"  class="form-control"  placeholder="Enter email" name="E_mail">
									</div>
									<div class="passwd">
										<input id="c1" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp">
									</div>

									<div class="passwd">
										<input id="c2" type="text" class="form-control"  placeholder="Cin" name="cin_client">
									</div>

									<div class="passwd">
										<input id="c3" type="text" class="form-control"  placeholder="Last name" name="nom">
									</div>

									<div class="passwd">
										<input id="c4" type="text" class="form-control"  placeholder="First name" name="prenom">
									</div>

									<div class="passwd">
										<input id="c5" type="text" class="form-control"  placeholder="Adress" name="adresse">
									</div>

									<div class="passwd">
										<input id="c6" type="text" class="form-control"  placeholder="Number" name="numero">
									</div>

									<div class="passwd">
										<input id="c7" type="text" class="form-control"  placeholder="Type" name="type">
									</div>












                                      <div class="submit">
										<input class="btn btn-primary btn-block" type="submit" value="Register" name="ajouter"  >
									</div>

                                       




                                     
									
									<p class="text-dark mb-0">Already have account?<a href="login.html" class="text-primary ml-1">Sign In</a></p>

								</form>
								<div class="card-body border-top">
									<a class="btn  btn-social btn-google btn-block"><i class="fa fa-google-plus"></i> Sign up with Google</a>
									<a class="btn  btn-social btn-facebook btn-block mt-2"><i class="fa fa-facebook"></i> Sign in with Facebook</a>
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

</form>
	</body>

<!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:50 GMT -->
</html>