
    
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
                                <a class="side-menu__item"  href="../index.php"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Dashboard</span><span class="angle fa fa-angle-right"></span></a>
                                
                            </li>
                            
                            
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-truck"></i><span class="side-menu__label">delivery management</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="../livreur/adddeleveyman.html" class="slide-item">add deliveryman</a></li>
                                    <li><a href="../livreur/removedeleveryman.php" class="slide-item">remove deliveryman</a></li>
                                    <li><a href="../livreur/showdeleryman.php" class="slide-item">show deliveryman</a></li>
                                    <li><a href="../livreur/editdelevryman.php" class="slide-item">edit deliveryman</a></li>
                                    <li><a href="../livreur/adddelevey.php" class="slide-item">add delivery</a></li>
                                    
                                    <li><a href="../livreur/showdelery.php" class="slide-item">show deliveryman</a></li>
    
                                    <li><a href="../livreur/maps.php" class="slide-item">maps</a></li>
                                    <li><a href="../livreur/charts.php" class="slide-item">charts</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                 
                                <a  class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">product</span><span class="angle fa fa-angle-right"></span></a>
                                <ul class="slide-menu">
                                    <li><a href="index.php" class="slide-item">add products</a></li>
                                   
                                    <li><a href="afficher.php" class="slide-item">show products</a></li>
                                    <li><a href="fajoutcateg.php" class="slide-item">add category</a></li>
                                    <li><a href="#" class="slide-item">remove category</a></li>
                                    <li><a href="affichercategorie.php" class="slide-item">show category</a></li>
                                    <li><a href="#" class="slide-item">edit category</a></li>
                                    
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-list-alt"></i><span class="side-menu__label">ordered management</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    
                                    
                                    <li><a href="../commande/afficher.php" class="slide-item">show ordered</a></li>
                                    <li><a href="../commande/modifiercommande.php" class="slide-item">edit ordered</a></li>
                                    
                                    <li><a href="../facture/afficherfacture.php" class="slide-item">show bill</a></li>
                                    <li><a href="../facture/modifierfacture.php" class="slide-item">edit bill</a></li>
                                    
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-calendar-check-o"></i><span class="side-menu__label">event and promotion </span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="../acctualite/ajout.php" class="slide-item">add event</a></li>
                                    <li><a href="../acctualite/testaffiche.php" class="slide-item">show event</a></li>
                                    <li><a href="../promotion/ajouterpromo.php" class="slide-item">add promotion</a></li>
                                    <li><a href="../promotion/testaffichepromo.php" class="slide-item">show promotion</a></li>
                                    
                                    
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon  fa fa-gift"></i><span class="side-menu__label">coupon management</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="../ajoutercoupon.php" class="slide-item">add coupon</a></li>
                                    <li><a href="../coupon/affichercoupon.php" class="slide-item">show coupon</a></li>
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
                    
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------->













<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
       