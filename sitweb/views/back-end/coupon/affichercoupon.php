<?php
  include '../../../entities/coupon.php';
   include '../../../core/couponC.php';

   $coupon1C=new couponC();
   $mylist=$coupon1C->affichercouponA();
?>
<!DOCTYPE html>
<html lang="en">
<title>Coupons</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<body>
<?php include "../template.php";?>
<form>
<div class="app-content">
	<section class="section">
		<div class="page-header">
			<h4 class="page-title">Affichage</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#" class="text-light-color">Table Coupons</a></li>
				<li class="breadcrumb-item active" aria-current="page">Admin</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<span class="table-add float-right">
							<a href="#!" class="btn btn-icon"><i class="fa fa-plus fa-1x" aria-hidden="true"></i></a>
						</span>
						<h4>Table</h4>
					</div>
					<div class="card-body">
						<div id="table" class="table-responsive table-editable">
							<table  class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap" id="myTable">
								<tr>
									<div class="form-group row">
										<label class="col-md-3 col-form-label">Chercher un coupon</label>
										<div class="col-md-9">
											<input id="myInput" type="text">
										</div>
									</div>
								</tr>
									<tr>
									<th class="text-center" onclick="sortTable(0)">Numero du coupon</th>
									<th class="text-center" onclick="sortTable(1)">Taux de réduction</th>
									<th class="text-center" onclick="sortTable(2)">Date de création</th>
									<th class="text-center" onclick="sortTable(3)">Valabilite</th>
								</tr>
								<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable2");
  switching = true;
  dir = "asc";
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++;
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
								</script>
		  						<tbody id="myTable">
									<?php
									foreach ($mylist as $row)
									{
									?>
									<tr>
										<td><?php echo $row['num'];?></td>
										<td><?php echo $row['taux_reduction'];?></td>
										<td><?php echo $row['date_creation'];?></td>
										<td><?php echo $row['valabilite'];?></td>
										<td><form method="POST" action="supprimercoupon.php"><input class="btn btn-danger btn-rounded btn-sm my-0" type="submit"  name="supprimer" value="supprimer"><input type="hidden" value="<?PHP echo $row['num']; ?>"name="num"></form></td>
										<td><form method="POST" action="modifiercoupon.php"><input class="btn btn-danger btn-rounded btn-sm my-0" type="submit"  name="modifier" value="modifier"><form method="POST" action="modifiercouponfunction.php"><input type="hidden" value="<?PHP echo $row['num']; ?>"name="num"><input type="hidden" value="<?PHP echo $row['date_creation']; ?>"name="date_creation"></form></form></td>
									</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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