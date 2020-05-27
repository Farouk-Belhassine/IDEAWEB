<?php
	session_start();

	if($_SESSION['ty']!="admin") header('Location: ../../fashe-colorlib/session.html');

	include '../../../core/couponC.php';

	$coupon1C=new couponC();
	$mylist=$coupon1C->afficherstatcoupon();
?>

<!DOCTYPE html>
<html lang="en">
<title>Statistiques coupons</title>
<head>
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
    <body class="app ">
       
	<?php include "../template.php";?>
                <!--app-content open-->
				<div class="app-content">
					<section class="section">
                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title"> Charts</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Chart</a></li>
								<li class="breadcrumb-item active" aria-current="page">High Charts</li>
							</ol>
						</div>
						<!--page-header closed-->

						<!--row open-->
						<div class="row">
							<div class="col-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4>Bar Chart</h4>
									</div>
									<div class="card-body">
										<div id="highchart7"></div>
										
										<button id="inverted" class="btn btn-primary btn-sm">Inverted</button>
										<button id="polar" class="btn btn-primary btn-sm">Polar</button>	
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<script>
		</script>
	<!--Scripts js-->
	<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
		

	
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

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/accordiation.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>

		<?PHP		$i=0	;								foreach($mylist as $row){
			$i++;
	${'numero' . $i} = $row['num'];
	${'taux_reduction' . $i} = $row['taux_reduction']*1;
}

	?>
		<script >		$(function(e){
  

  /* ---hightchart7----*/
  var chart = Highcharts.chart('highchart7', {

  title: {
	  text: ''
  },

  subtitle: {
	  text: 'Plain'
  },
  exporting: { enabled: false },
  credits: {
	  enabled: false
  },
  xAxis: {
	  categories: ['<?php echo $numero1?>', '<?php echo $numero2?>', '<?php echo $numero3?>', '<?php echo $numero4?>','<?php echo $numero5?>', '<?php echo $numero6?>', '<?php echo $numero7?>', '<?php echo $numero8?>']
  },
  colors: ['#7673e6', '#f47b25', '#21cb95', '#00bcd4', '#5e5baa', '#FF9655', '#f1c40f', '#6AF9C4'],
  series: [{
	  type: 'column',
	  colorByPoint: true,
	  data:[<?php echo json_encode($taux_reduction1)?>, <?php echo json_encode($taux_reduction2)?>,<?php echo json_encode($taux_reduction3)?>, <?php echo json_encode($taux_reduction4)?>,<?php echo json_encode($taux_reduction5)?>, <?php echo json_encode($taux_reduction6)?>, <?php echo json_encode($taux_reduction7)?>, <?php echo json_encode($taux_reduction8)?>],
	  showInLegend: false
  }]

});


$('#plain').on("click", function () {
  chart.update({ 
	chart: {
		  inverted: false,
		  polar: false,
		  
	  },
	  subtitle: {
		  text: 'Inverted'
	  }
  
  });
});

$('#inverted').on("click", function () {
  chart.update({
	  chart: {
		  inverted: true,
		  polar: false
	  },
	  subtitle: {
		  text: 'Inverted'
	  }
  });
});

$('#polar').on("click", function () {
  chart.update({
	  chart: {
		  inverted: false,
		  polar: true
	  },
	  subtitle: {
		  text: 'Polar'
	  }
  });
});



});
///////////



/////

</script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.js"></script>
		<script src="assets/js/tooltip.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>
		<script src="assets/plugins/highcharts/highcharts.js"></script>
		<script src="assets/plugins/highcharts/exporting.js"></script>
		<script src="assets/plugins/highcharts/export-data.js"></script>
		<script src="assets/plugins/highcharts/histogram-bellcurve.js"></script>
		<script src="assets/plugins/highcharts/solid-gauge.js"></script>
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
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
		<script src="assets/js/othercharts.js"></script>
	</body>
</html>