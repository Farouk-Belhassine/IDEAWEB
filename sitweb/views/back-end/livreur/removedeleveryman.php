<?php include "../../../core/livreurC.php";
 $livreur1C=new livreurC();
 $liste =$livreur1C->afficherlivreur();

?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:02 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>test </title>
		<!--favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets/css/icons.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

    </head>
    <body>
        
    <?php  include "../template.php" ?>
 
   <div class="app-content">
    <section class="section">

        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title">add deleveryman</h4>
            <ol class="breadcrumb">
               
            </ol>
        </div>
 <!--row open-->
 <div class="row">
								
    <div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											
										</div>
										<div  class="card-body">
											<div id="table" class="table-responsive table-editable" >
												<table  class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap" >
													<tr class="bg-primary">
														<th>CIN</th>
														<th>first name</th>
														<th>last name</th>
														<th>brithday</th>
														<th>phone number</th>
                                                        <th>region</th>
                                                        <th>availability</th>
                                                        <th>E-mail</th>
                                                        <th>permit number</th>
                                                        <th></th>
													</tr>
		<?PHP											foreach($liste as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['date_naissance']; ?></td>
	<td><?PHP echo $row['tel']; ?></td>
    <td><?PHP echo $row['secteur']; ?></td>
    <td><?PHP echo $row['dispo']; ?></td>
    <td><?PHP echo $row['mail']; ?></td>
    <td><?PHP echo $row['num_permis']; ?></td>
    <td><form class="card-body" action="removedeleveryman.php" method="GET">
	  <input type="submit" value="remove" class="btn btn-sm btn-danger m-b-5 m-t-5">
	  <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
        </form></td>
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

                            <?PHP


?>
    <?PHP

$livreurC=new livreurC();
if (isset($_GET['cin'])){
	$livreurC->Supprimerlivreur($_GET['cin']);
	
}

?>
                       
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

</body>

<!-- Mirrored from www.spruko.com/demo/splite/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:02 GMT -->
</html>