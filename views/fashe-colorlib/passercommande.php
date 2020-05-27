<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include '../../entities/panier.php';
	include '../../core/panierC.php';

	$pC=new panierC();

	if( isset($_POST['num']) ){
		$resultcoupon=$pC->recherchecoupon($_POST['num']);
		if($resultcoupon!="empty"){
			foreach ($resultcoupon as $row){
				if($row[0]){
					$rc=$row[2];
					if($rc!="Non valable"){
						$r=$row[1]*100;
						$rc="Réduction de ${r}%";
					}
					else $rc="coupon non valable";
				}
			}
		}
		else $rc="Pas de coupon";
	}

	$prixtotal=$pC->totalpanier();
	foreach ($prixtotal as $row){
		if($row[0]){
			$pt=$row[0];
			if(!empty($r)) $pt=$pt-($pt*($r/100));
		}
		else $pt="Panier vide!";
	}

	?>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="animsition">
	<div class="wrap_header fixed-header2 trans-0-4">
		<a href="home-02.html" class="logo">
			<img src="images/icons/logo.png" alt="IMG-LOGO">
		</a>
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li><a href="home-02.html">Home</a></li>
					<li><a href="product.html">Shop</a></li>
					<li><a href="cart.html">Features</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>

		<div class="header-icons">
			<a href="#" class="header-wrapicon1 dis-block">
				<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
			</a>

			<span class="linedivide1"></span>

			<div class="header-wrapicon2">
				<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
				<span class="header-icons-noti">0</span>

				<!-- Header cart noti -->
				<div class="header-cart header-dropdown">
					<ul class="header-cart-wrapitem">
						<li class="header-cart-item">
							<div class="header-cart-item-img">
								<img src="images/item-cart-01.jpg" alt="IMG">
							</div>

						
						</li>

						<li class="header-cart-item">
							<div class="header-cart-item-img">
								<img src="images/item-cart-02.jpg" alt="IMG">
							</div>
						</li>

						<li class="header-cart-item">
							<div class="header-cart-item-img">
								<img src="images/item-cart-03.jpg" alt="IMG">
							</div>

							
						</li>
					</ul>

					<div class="header-cart-total">
						Total: $75.00
					</div>

					<div class="header-cart-buttons">
						<div class="header-cart-wrapbtn">
							<!-- Button -->
							<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
								View Cart
							</a>
						</div>

						<div class="header-cart-wrapbtn">
							<!-- Button -->
							<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
								Check Out
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<!-- Logo2 -->
				<a href="home-02.html" class="logo2">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<div class="topbar-child2">
					

					<!--  -->
					
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2 m-r-13">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="home-02.html">Home</a>
								<ul class="sub_menu">
									
									<li><a href="home-02.html">Homepage </a></li>
									
								</ul>
							</li>

							<li>
								<a href="product.html">Shop</a>
							</li>

							

							<li>
								<a href="cart.html">Features</a>
							</li>

							<li>
								<a href="blog.html">Blog</a>
							</li>

							<li>
								<a href="about.html">About</a>
							</li>

							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>
    
   <script>
	   function verif()
	   {
		   alert("commande arrive dans 3 jours");
	   }
	   </script>

    <div  class="t-center ">
        
	<!-- Total -->
	<div class>
				<h5 class="m-text20 p-b-24">
					Total du panier
				</h5>

					<div class="flex-w flex-sb-m p-b-12">
						<span class="s-text18 w-size19 w-full-sm">Coupon:</span>
						<span class="m-text21 w-size20 w-full-sm"><?php echo $rc;?></span>
					</div>
					
					<div class="flex-w flex-sb-m p-b-12">
						<span class="s-text18 w-size19 w-full-sm">Total:</span>
						<span class="m-text21 w-size20 w-full-sm"><?php echo $pt;?>DT</span>
					</div>
				
			
				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Livraison:
					</span>
					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							Pour passer la commande, vous devez vous connecter.
						</p>
					<form onsubmit="return verif()" method="POST" action="ajouterlivraison.php">
        <table>
                
                <tr>
                <td><input class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit" name="passer" value="passercommande"></td>
				</tr>
				<div class="col-md-9">
					
                                    <select class="form-control"  name="secteur" type="text" id="secteur" valeur=""   >
                                        <option>secteur</option>
                                        <option>Ariana</option>
                                        <option>Beja</option>
                                        <option>Ben Arous</option>
                                        <option>Bizerte</option>
                                        <option>Gabes</option>
                                        <option>Gafsa</option>
                                        <option>Jenbouda</option>
                                        <option>Kairouan</option>
                                        <option>Kasserine</option>
                                        <option>Kef</option>
                                        <option>Mahdiya</option>
                                        <option>Manouba</option>
                                        <option>Medenine</option>
                                        <option>Monastir</option>
                                        <option>Nabeul</option>
                                        <option>Sfax</option>
                                        <option>Sidi Bouzid</option>
                                        <option>Siliana</option>
                                        <option>Sousse</option>
                                        <option>Tatouine</option>
                                        <option>Tozeur</option>
                                        <option>Tunis</option>
                                        <option>Zaghouan</option>
                                    
                                    </select>
                                </div>
                            </div>
        </table>
    </form>
    <form method="POST" action="ajoutercommande.php">

     <table>
                <tr>
                <td><input class="sizefull s-text7 p-l-15 p-r-15" type="number" name="cin" placeholder="cin" value="$_GET['$cin_client']"></td>
                </tr>
                <tr>
                <td><input class="sizefull s-text7 p-l-15 p-r-15" type="hidden" name="idpanier" value="1"></td>
                </tr>
                <tr>
                <td><input id="Aujourdhui" class="sizefull s-text7 p-l-15 p-r-15" type="date" name="datelimite" value="DD-MM-YYYY">
                <script>
				document.getElementById("Aujourdhui").valueAsDate = new Date();
				</script>
                </td>
                </tr>
                <tr>
                <td><input class="sizefull s-text7 p-l-15 p-r-15" type="hidden" name="prixlivraison" value="6"></td>
                </tr>
                <tr>
                <td><input class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit" name="ajouter" value="ajouter"></td>
                </tr>
        </table>
    </form>

					</div>
				</div>
				<div class="flex-w flex-sb-m p-b-12">
					<?php
				foreach ($prixtotal as $row){ 
				if($row[0]) $pt=$row[0];
				else $pt=0;
				?>
					<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">Total:</span>
					<span class="m-text21 w-size20 w-full-sm"><?php echo $pt;?>DT</span>
				</div>
				<?php } ?>
					
				</div>
			</div>
		</div>
	</section>

  </div>


<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
