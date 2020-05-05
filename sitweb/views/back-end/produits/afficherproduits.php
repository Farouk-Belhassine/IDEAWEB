<?php
   include '../../../entities/produit.php';
include '../../../core/produitC.php';

   $pC=new produitC();
   $mylist=$pC->afficherproduits();
?>



<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:13 GMT -->
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#Search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
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

		
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("Mytable");
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

  <?php include "../template.php" ;?>

                <!--app-content open-->
				<div class="app-content">
					<section class="section">


						<!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">ADMIN</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Admin</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<span class="table-add float-right">
											<a href="#!" class="btn btn-icon"><i class="fa fa-plus fa-1x" aria-hidden="true"></i></a>
										</span>
										<h4>Admin Table</h4>
									</div>
									<div class="card-body">
										<div id="table" class="table-responsive table-editable">

                                          


											
											<table  id="Mytable" class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
												<tr>
													
													<th  onclick="sortTable(0)"class="text-center">idproduit</th>
													<th  onclick="sortTable(1)"class="text-center">Libelle</th>
													<th onclick="sortTable(2)" class="text-center">Sexe</th>
													<th  onclick="sortTable(3)"class="text-center">Prix</th>
													<th  onclick="sortTable(4)"class="text-center">Taille</th>
													<th  class="text-center">urlImage</th>
													<th onclick="sortTable(6)"class="text-center">quantite</th>
													<th onclick="sortTable(7)"class="text-center">description</th>
													<th class="text-center">supprimer</th>
													<th class="text-center">Modifier</th>
													
                                                   	<form class="form-inline mr-auto" method="POST"  >
                            <ul class="navbar-nav mr-2">
                                
                            </ul>
                            <div class="search-element mr-2">
								<input class="form-control" type="search" placeholder="Search" aria-label="Search"  name="idproduit" id="Search" >
                               
                            </div></form>
												</tr>
												
												<?php




foreach ($mylist as $row)       /*pour connaitre le nombre de lignes dans la table a afficher*/
{
?>
<tr>
	<td><?php echo $row['idproduit'];   ?></td>
	<td><?php echo $row['Libelle'];   ?></td>
	<td><?php echo $row['Sexe'];   ?></td>
	<td><?php echo $row['Prix'];   ?></td>
	<td><?php echo $row['Taille'];   ?></td>
	<td><?php echo $row['urlImage'];   ?></td>
	<td><?php echo $row['quantite'];   ?></td>
	<td><?php echo $row['description'];   ?></td>
	<td><form method="POST" action="supprimer.php"> 
    <input class="btn btn-danger btn-rounded btn-sm my-0" type="submit"  name="supprimer" value="supprimer">
   <input type="hidproduitden" value="<?PHP echo $row['idproduit']; ?>"name="idproduit">
	 </form>
  </td>
  <td><form method="GET" action="modifier.php"> 
    <input class="btn btn-danger btn-rounded btn-sm my-0" type="submit"  name="modifierproduit" value="modifierproduit">
   <input type="hidproduitden" value="<?PHP echo $row['idproduit']; ?>"name="idproduit">
	 </form>
  </td>
</tr>
<?php
}
?>
												
												
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->

				<!-- Popupchat closed -->

			</div>
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