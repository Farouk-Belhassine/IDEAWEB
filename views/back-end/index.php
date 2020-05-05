<?php include "../../core/calculer.php" ;?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:58 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Splite-Admin Dashboard</title>

		<!--Favicon -->
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

		<!--Chartist css-->
		<link rel="stylesheet" href="assets/plugins/chartist/chartist.css">
		<link rel="stylesheet" href="assets/plugins/chartist/chartist-plugin-tooltip.css">

		<!--Full calendar css-->
		<link rel="stylesheet" href="assets/plugins/fullcalendar/stylesheet1.css">

		<!--morris css-->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">


	</head>

	
				
 
    <div class="wave -three"></div>
    
            <div id="spinner"></div>
    
            <!--app open-->
            <div id="app" class="page">
                <div class="main-wrapper" >
    
                    <!--nav open-->
                    <nav class="navbar navbar-expand-lg main-navbar">
                        <a class="header-brand" href="index-2.html">
                            <img src="assets/img/brand/logo-white.png" class="header-brand-img" alt="Splite-Admin  logo">
                        </a>
                        <form class="form-inline mr-auto">
                            <ul class="navbar-nav mr-2">
                                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i class="fa fa-reorder"></i></a></li>
                                <li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fa fa-search"></i></a></li>
                            </ul>
                            <div class="search-element mr-3">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <span class="Search-icon"><i class="fa fa-search"></i></span>
                            </div>
                        </form>
                        <ul class="navbar-nav navbar-right">
                           
                            <li class="dropdown dropdown-list-toggle "><a href="message.html"  class="nav-link  nav-link-lg "><span class="badge badge-danger nav-link-badge">0</span><i class="hvr-buzz fa fa-envelope-o"></i></a>
                                
                                    
                            </li>

                            <li class="dropdown dropdown-list-toggle"><a href="notification.html" class="nav-link  nav-link-lg "><span class="badge badge-secondary nav-link-badge">0</span><i class="fa fa-bell-o"></i></a>
                               
                            </li>
                            <li class="dropdown dropdown-list-toggle d-none d-lg-block">
                                <a href="#" class="nav-link nav-link-lg full-screen-link">
                                    <i class="fa fa-expand " id="fullscreen-button"></i>
                                </a>
                            </li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg d-flex">
                                    <span class="mr-3 mt-2 d-none d-lg-block ">
                                        <span class="text-white">Hello,<span class="ml-1"> user</span></span>
                                    </span>
                                <span><img src="assets/img/avatar/avatar-3.jpg" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class=" dropdown-header noti-title text-center border-bottom pb-3">
                                        <h5 class="text-capitalize text-dark mb-1">user</h5>
                                        <small class="text-overflow m-0"> admin</small>
                                    </div>
                                    <a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
                                   
                                    <a class="dropdown-item" href="#"><i class=" mdi mdi-message-outline mr-2"></i> <span>Mails</span></a>
                                    
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <aside class="app-sidebar">
                        <div class="app-sidebar__user">
                            <div class="dropdown user-pro-body text-center">
                                <div class="nav-link pl-1 pr-1 leading-none ">
                                    <img src="assets/img/avatar/avatar-3.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1">
                                    <span class="pulse bg-success" aria-hidden="true"></span>
                                </div>
                                <div class="user-info">
                                    <h6 class=" mb-1 text-dark">user</h6>
                                    <span class="text-muted app-sidebar__user-name text-sm"> admin</span>
                                </div>
                            </div>
                        </div>

                        <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item"   href="index.php"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Dashboard</span><span class="angle fa fa-angle-right"></span></a>
                               
                            </li>
                            
                            
                            
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-truck"></i><span class="side-menu__label">delivery management</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="livreur/adddeleveyman.html" class="slide-item">add deliveryman</a></li>
                                    <li><a href="livreur/removedeleveryman.php" class="slide-item">remove deliveryman</a></li>
                                    <li><a href="livreur/showdeleryman.php" class="slide-item">show deliveryman</a></li>
                                    <li><a href="livreur/editdelevryman.php" class="slide-item">edit deliveryman</a></li>
                                    <li><a href="livreur/adddelevey.php" class="slide-item">add delivery</a></li>
                                    
                                    <li><a href="livreur/showdelery.php" class="slide-item">show deliveryman</a></li>
    
                                    <li><a href="livreur/maps.php" class="slide-item">maps</a></li>
                                    <li><a href="livreur/charts.php" class="slide-item">charts</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                 
                                <a  class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">product</span><span class="angle fa fa-angle-right"></span></a>
                                <ul class="slide-menu">
                                    <li><a href="produits/ajouterproduits.php" class="slide-item">add products</a></li>
                                    <li><a href="produits/afficherproduits.php" class="slide-item">show products</a></li>
                                    
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-list-alt"></i><span class="side-menu__label">ordered management</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    
                                    
                                    <li><a href="commande/afficher.php" class="slide-item">show ordered</a></li>
                                    <li><a href="commande/modifiercommande.php" class="slide-item">edit ordered</a></li>
                                    
                                    <li><a href="facture/afficherfacture.php" class="slide-item">show bill</a></li>
                                    <li><a href="facture/modifierfacture.php" class="slide-item">edit bill</a></li>
                                    
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-calendar-check-o"></i><span class="side-menu__label">event and promotion </span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="acctualite/ajout.php" class="slide-item">add event</a></li>
                                    <li><a href="acctualite/testaffiche.php" class="slide-item">show event</a></li>
                                    <li><a href="promotion/ajouterpromo.php" class="slide-item">add promotion</a></li>
                                    <li><a href="promotion/testaffichepromo.php" class="slide-item">show promotion</a></li>
                                    
                                    
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon  fa fa-gift"></i><span class="side-menu__label">coupon management</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="ajoutercoupon.php" class="slide-item">add coupon</a></li>
                                    <li><a href="coupon/affichercoupon.php" class="slide-item">show coupon</a></li>
                                    
                                   
                                    
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-users"></i><span class="side-menu__label">show all client</span></a>
                           
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-user-circle"></i><span class="side-menu__label">Custom Pages</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="register.html" class="slide-item"> Register</a></li>
                                    <li><a href="login.html" class="slide-item"> Login</a></li>
                                    <li><a href="forgot.html" class="slide-item"> Forgot Password</a></li>
                                    <li><a href="reset.html" class="slide-item"> Reset Password</a></li>
                                    <li><a href="under-construction.html" class="slide-item"> Under Construction</a></li>
                                    <li><a href="lockscreen.html" class="slide-item"> Lock Screen</a></li>
                                    <li><a href="404.html" class="slide-item"> 404</a></li>
                                    <li><a href="505.html" class="slide-item"> 505</a></li>
                                </ul>
                            </li>
                        </ul>
                    </aside>     
                    <?php
$nombre =new calculer();
$livreur=$nombre->livreur();
$produits=$nombre->produit();
$livraison=0;


?>

                <!--app-content-->
				<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Dashboard </h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard 02</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
								<div class="widget-card card">
									<div class="text-center mx-auto server mb-3">
									<i class="fab fa-affiliatetheme"></i>
									</div>
									<div class="text">
										<h3><?php echo $livreur;  ?></h3>
										<label class="text-muted mb-0">numbers of delivererman</label>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
								<div class="widget-card card">
									<div class="text-center mx-auto server mb-3">
										
									</div>
									<div class="text">
										<h3><?php echo $livraison;  ?></h3>
										<label class="text-muted mb-0">numbers of deliverers</label>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
								<div class="widget-card card">
									<div class="text-center mx-auto server mb-3">
										
									</div>
									<div class="text">
										<h3>7,153</h3>
										<label class="text-muted  mb-0">account number</label>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
								<div class="widget-card card">
									<div class="text-center mx-auto server mb-3">
										
									</div>
									<div class="text">
										<h3><?php echo $produits;  ?></h3>
										<label class="text-muted mb-0">number of products</label>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

                        <!--row open-->
						<div class="row row-deck ">
							<div class="col-lg-7 col-xl-7 col-md-12 col-12 col-sm-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h4>Website Visits</h4>
									</div>
									<div class="card-body">
										<div id="echart" class="chart-dropshadow h-300"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-xl-5 col-md-12 col-12 col-sm-12">
								<div class="card sourcechart">
									<div class="card-header">
										<h4>Source Trend</h4>
									</div>
									<div class="card-body">
										<div id="echart2" class="chart-dropshadow h-300"></div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

                        <!--row open-->
						<div class="row row-deck">
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4>Browser traffic</h4>
									</div>
									<div class="card-body p-0" >
										<div class="browser-stats">
                                            <ul class="list-unstyled">
                                                <li class="pl-4 pr-4 pt-3 pb-3 border-bottom"><i class="fa fa-chrome text-orange mr-2"></i> Chrome<div class="text-success pull-right">52%<i class="fa fa-level-up"></i></div></li>
                                                <li class="pl-4 pr-4 pt-3 pb-3 border-bottom"><i class="fa fa-firefox text-danger mr-2"></i> Firefox<div class="text-danger pull-right">5%<i class="fa fa-level-down"></i></div></li>
                                                <li class="pl-4 pr-4 pt-3 pb-3 border-bottom"><i class="fa fa-edge text-darkblue mr-2"></i> Edge<div class="text-success pull-right">26%<i class="fa fa-level-up"></i></div></li>
                                                <li class="pl-4 pr-4 pt-3 pb-3 border-bottom"><i class="fa fa-safari text-indigo mr-2"></i> Safari<div class="text-danger pull-right">3%<i class="fa fa-level-down"></i></div></li>
												<li class="pl-4 pr-4 pt-3 pb-3 border-bottom"><i class="fa fa-internet-explorer text-blue mr-2"></i>Internet-explorer<div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div></li>
												<li class="pl-4 pr-4 pt-3 pb-3"><i class="fa fa-opera text-danger mr-2"></i> Opera<div class="text-danger pull-right">13%<i class="fa fa-level-down"></i></div></li>
                                            </ul>
                                        </div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-8 col-md-12 col-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Facebook Page Visits</h4>
									</div>
									<div class="card-body">
										<div id="echart6" class="chart-dropshadow h-270"></div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

                        <!--row open-->
					
						<!--row closed-->

					
						<!--row closed-->
					</section>
				</div>
				<!--app-content closed-->
				

			</div>
		</div>
		<!--app closed-->


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

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- jQuery Sparklines -->
		<script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

		<!-- ECharts -->
		<script src="assets/plugins/echarts/dist/echarts.js"></script>

        <!--Jquery.knob js-->
		<script src="assets/plugins/othercharts/jquery.knob.js"></script>

		<!--Othercharts js-->
		<script src="assets/plugins/othercharts/jquery.knob.js"></script>
		<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!--Morris js-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/morris/raphael.min.js"></script>

		<!-- ECharts -->
		<script src="assets/plugins/echarts/echarts.js"></script>

		<!-- Chart.js -->
		<script src="assets/plugins/Chart.js/dist/Chart.bundle.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>

		<!-- ECharts -->
		<script src="assets/plugins/echarts/echarts.js"></script>

		<!--Dashboard js-->
		<script src="assets/js/dashboard5.js"></script>
		<script src="assets/js/sparkline.js"></script>

		<!--OtherCharts js-->
		<script src="assets/js/othercharts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>

	</body>

<!-- Mirrored from www.spruko.com/demo/splite/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:33:03 GMT -->
</html>