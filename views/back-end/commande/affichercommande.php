<?php
include "../../../core/commandeC.php";
include "../../../entities/commande.php";

   $pC=new commandeC();
   $mylist=$pC->affichercommandes();
?>
<!DOCTYPE html>
<html lang="en">
<title>Commandes</title>
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
	<script src="D:/apps/wamp64/www/sitweb/js/sorttable.min.js"></script>
	<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>
<body>
<?php include "../template.php";?>
<form>
<div class="app-content">
	<section class="section">
		<div class="page-header">
			<h4 class="page-title">Affichage</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#" class="text-light-color">Table Commande</a></li>
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
										<label class="col-md-3 col-form-label">Chercher une commande</label>
										<div class="col-md-9">
											<input name="refcommande" id="refcommande" type="number">
											<form method="POST" action="cherchercoupon.php"><input class="btn btn-danger btn-rounded btn-sm my-0" type="submit"  name="chercher" value="chercher"></form>
										</div>
									</div>
								</tr>
								<tr>
									<th class="text-center" onclick="sortTable(0)">reference de commande</th>
									<th class="text-center" onclick="sortTable(1)">cin</th>
									<th class="text-center" onclick="sortTable(2)">id panier</th>
									<th class="text-center" onclick="sortTable(3)">date limite</th>
									<th class="text-center" onclick="sortTable(4)">prix livraison</th>
								</tr>
		  						<tbody id="myTable">
									<?php
									foreach ($mylist as $row)
									{
									?>
									<tr>
										<td><?php echo $row['refcommande'];?></td>
										<td><?php echo $row['cin'];?></td>
										<td><?php echo $row['idpanier'];?></td>
										<td><?php echo $row['datelimite'];?></td>
										<td><?php echo $row['prixlivraison'];?></td>
										<td><form method="POST" action="supprimercommande.php"><input class="btn btn-danger btn-rounded btn-sm my-0" type="submit"  name="supprimer" value="supprimer"><input type="hidden" value="<?PHP echo $row['refcommande']; ?>"name="refcommande"></form></td>
										<td><form method="POST" action="modification.php"><input class="btn btn-danger btn-rounded btn-sm my-0" type="submit"  name="modifier" value="modifier"><input type="hidden" value="<?PHP echo $row['refcommande']; ?>"name="refcommande">
											<input type="hidden" value="<?PHP echo $row['cin']; ?>"name="cin">
											<input type="hidden" value="<?PHP echo $row['idpanier']; ?>"name="idpanier">
											<input type="hidden" value="<?PHP echo $row['datelimite']; ?>"name="datelimite">
											<input type="hidden" value="<?PHP echo $row['prixlivraison']; ?>"name="prixlivraison">
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