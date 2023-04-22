<?php
    $query ="SELECT * FROM categories ";
    $stmt=$conn->prepare($query);
    $stmt->execute();
    $catresult= $stmt->get_result();


    $query ="SELECT * FROM categories ";
    $stmt=$conn->prepare($query);
    $stmt->execute();
    $cartresult= $stmt->get_result();
?>

<header class="ec-header">
    <!--Ec Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <!-- Header Top social Start -->
                <div class="col text-left header-top-left d-none d-lg-block">
                    <div class="header-top-social">
                        <span class="social-text text-upper">Follow us on:</span>
                        <ul class="mb-0">
                            <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                        class="ecicon eci-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                        class="ecicon eci-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                        class="ecicon eci-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                        class="ecicon eci-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Top social End -->
                <!-- Header Top Message Start -->
                <div class="col text-center header-top-center">
                    <div class="header-top-message text-upper">
                        <span>Free Shipping</span>This Week Order Over - $75
                    </div>
                </div>
                <!-- Header Top Message End -->
                <!-- Header Top Language Currency -->
                <div class="col header-top-right d-none d-lg-block">
                    <div class="header-top-lan-curr d-flex justify-content-end">
                        <!-- Currency Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->
                        <!-- Language Start -->
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->

                    </div>
                </div>
                <!-- Header Top Language Currency -->
                <!-- Header Top responsive Action -->
                <div class="col d-lg-none ">
                    <div class="ec-header-bottons">
                        <!-- Header User Start -->
                        <div class="ec-header-user dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                    src="assets/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>

                            <?php 

                                    if(isset($_SESSION['email'])){
                                        echo    '
                                        <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a class="dropdown-item" href="user-profile.php">Profile</a></li>
                                        <li><a class="dropdown-item" href="checkout.php">Checkout</a></li>
                                        <li><a class="dropdown-item" href="controller/logout.php">Logout</a></li>
                                        </ul>

                                        ';
                                    }else{
                                        echo '

                                             <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a class="dropdown-item" href="register.php">Register</a></li>
                                                <li><a class="dropdown-item" href="checkout.php">Checkout</a></li>
                                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                            </ul>
                                        ';
                                    }

                                ?>
                        </div>
                        <!-- Header User End -->
                        <!-- Header Cart Start -->
                        <a href="wishlist.php" class="ec-header-btn ec-header-wishlist">
                            <div class="header-icon"><img src="assets/images/icons/wishlist.svg"
                                    class="svg_img header_svg" alt="" /></div>
                            <span class="ec-header-count">0</span>
                        </a>
                        <!-- Header Cart End -->
                        <!-- Header Cart Start -->
                        <a href="cart.php" class="ec-header-btn">
                            <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg"
                                    alt="" /></div>
                            <span class="ec-header-count cart-count-lable"></span>
                        </a>
                        <!-- Header Cart End -->
                        <!-- <a href="javascript:void(0)" class="ec-header-btn ec-sidebar-toggle">
                            <img src="assets/images/icons/category-icon.svg" class="svg_img header_svg" alt="icon" />
                        </a> -->
                        <!-- Header menu Start -->
                        <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                            <img src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" />
                        </a>
                        <!-- Header menu End -->
                    </div>
                </div>
                <!-- Header Top responsive Action -->
            </div>
        </div>
    </div>
    <!-- Ec Header Top  End -->
    <!-- Ec Header Bottom  Start -->
    <div class="ec-header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row">
                <div class="ec-flex">
                    <!-- Ec Header Logo Start -->
                    <div class="align-self-center">
                        <div class="header-logo">
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt="Site Logo" /><img
                                    class="dark-logo" src="assets/images/logo/dark-logo.png" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->

                    <!-- Ec Header Search Start -->
                    <div class="align-self-center">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control ec-search-bar" placeholder="Search products..." type="text">
                                <button class="submit" type="submit"><img src="assets/images/icons/search.svg"
                                        class="svg_img header_svg" alt="" /></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->

                    <!-- Ec Header Button Start -->
                    <div class="align-self-center">
                        <div class="ec-header-bottons">

                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                        src="assets/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>

                                <?php 

                                    if(isset($_SESSION['email'])){
                                        echo    '
                                        <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a class="dropdown-item" href="user-profile.php">Profile</a></li>
                                        <li><a class="dropdown-item" href="checkout.php">Checkout</a></li>
                                        <li><a class="dropdown-item" href="controller/logout.php">Logout</a></li>
                                        </ul>

                                        ';
                                    }else{
                                        echo '

                                             <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a class="dropdown-item" href="register.php">Register</a></li>
                                                <li><a class="dropdown-item" href="checkout.php">Checkout</a></li>
                                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                            </ul>
                                        ';
                                    }

                                ?>


                            </div>
                            <!-- Header User End -->
                            <!-- Header wishlist Start -->
                            <a href="wishlist.php" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count">0</span>
                            </a>
                            <!-- Header wishlist End -->
                            <!-- Header Cart Start -->
                            <a href="cart.php" class="ec-header-btn ">
                                <div class="header-icon"><img src="assets/images/icons/cart.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count cart-count-lable"></span>
                            </a>
                            <!-- Header Cart End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec Header Button End -->
    <!-- Header responsive Bottom  Start -->
    <div class="ec-header-bottom d-lg-none">
        <div class="container position-relative">
            <div class="row ">

                <!-- Ec Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/images/logo/logo.png" alt="Site Logo" /><img
                                class="dark-logo" src="assets/images/logo/dark-logo.png" alt="Site Logo"
                                style="display: none;" /></a>
                    </div>
                </div>
                <!-- Ec Header Logo End -->
                <!-- Ec Header Search for mobile Start -->
                <div class="col">
                    <div class="header-search">
                        <form class="ec-btn-group-form" action="#">
                            <input class="form-control ec-search-bar" placeholder="Search products..." type="text">
                            <button class="submit" type="submit"><img src="assets/images/icons/search.svg"
                                    class="svg_img header_svg" alt="icon" /></button>
                        </form>
                    </div>
                </div>
                <!-- Ec Header Search End -->
            </div>
        </div>
    </div>
    <!-- Header responsive Bottom  End -->
    <!-- EC Main Menu Start -->
    <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="ec-main-menu">
                        <a href="javascript:void(0)" class="ec-header-btn ec-sidebar-toggle">
                            <img src="assets/images/icons/category-icon.svg" class="svg_img header_svg" alt="icon" />
                        </a>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="dropdown position-static"><a href="javascript:void(0)">Categories</a>
                                <ul class="mega-menu d-block">
                                    <li class="d-flex">

                                        <?php 
                                        while($catdata= $catresult->fetch_assoc()){
                                            $name = $catdata['cat_title'];
                                            $cat_id = $catdata['cat_id'];


                                            echo '
                                            <ul id="'.$name.'" class="d-block parent_cat">
                                                <li class="menu_title"><a href="javascript:void(0)">'.$name.'</a></li>
                                                <span class="'.$name.'">
                                                   
                                                </span>
                                            </ul>

                                            ';
                                        }


                                    ?>

                                    </li>

                                </ul>
                            </li>

                            <!-- <li class="dropdown"><a href="blog.php">Blog</a>
                                </li> -->
                            <li class="dropdown"><a href="about-us.php">About Us</a>

                            </li>
                            <li><a href="offer.php">Hot Offers</a></li>
                            <li><a href="contact-us.php">CONTACT US</a></li>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec Main Menu End -->
    <!-- ekka Mobile Menu Start -->
    <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
        <div class="ec-menu-title">
            <span class="menu_title">My Menu</span>
            <button class="ec-close">×</button>
        </div>
        <div class="ec-menu-inner">
            <div class="ec-menu-content">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="javascript:void(0)">Categories</a>
                        <ul class="sub-menu">
                            
                                        <?php 
                                        while($cartdata= $cartresult->fetch_assoc()){
                                            $name = $cartdata['cat_title'];
                                            $cat_id = $cartdata['cat_id'];



                                          echo '  <li class="mbcatbd">
                                                <a class="tra_cker" href="javascript:void(0)">'. $name.'</a>
                                                <ul class="sub-menu">
                                                  
                                                </ul>
                                            </li>
                                            ';

                                        }

                                 ?>



                            
                            <li><a class="p-0" href="shop.php"><img class="img-responsive"
                                        src="assets/images/menu-banner/1.jpg" alt=""></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Products</a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0)">Product page</a>
                                <ul class="sub-menu">
                                    <li><a href="product.php">Product left sidebar</a></li>
                                    <li><a href="product-right-sidebar.php">Product right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product 360</a>
                                <ul class="sub-menu">
                                    <li><a href="product-360-left-sidebar.php">360 left sidebar</a></li>
                                    <li><a href="product-360-right-sidebar.php">360 right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product vodeo</a>
                                <ul class="sub-menu">
                                    <li><a href="product-video-left-sidebar.php">vodeo left sidebar</a></li>
                                    <li><a href="product-video-right-sidebar.php">vodeo right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product gallery</a>
                                <ul class="sub-menu">
                                    <li><a href="product-gallery-left-sidebar.php">Gallery left sidebar</a></li>
                                    <li><a href="product-gallery-right-sidebar.php">Gallery right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="product-full-width.php">Product full width</a></li>
                            <li><a href="product-360-full-width.php">360 full width</a></li>
                            <li><a href="product-video-full-width.php">Video full width</a></li>
                            <li><a href="product-gallery-full-width.php">Gallery full width</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <div class="header-res-lan-curr">
                <div class="header-top-lan-curr">
                    <!-- Language Start -->
                    <div class="header-top-lan dropdown">
                        <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-menu">
                            <li class="active"><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Italiano</a></li>
                        </ul>
                    </div>
                    <!-- Language End -->
                    <!-- Currency Start -->
                    <div class="header-top-curr dropdown">
                        <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-menu">
                            <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                            <li><a class="dropdown-item" href="#">EUR €</a></li>
                        </ul>
                    </div>
                    <!-- Currency End -->
                </div>
                <!-- Social Start -->
                <div class="header-res-social">
                    <div class="header-top-social">
                        <ul class="mb-0">
                            <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                        class="ecicon eci-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                        class="ecicon eci-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                        class="ecicon eci-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                        class="ecicon eci-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Social End -->
            </div>
        </div>
    </div>
    <!-- ekka mobile Menu End -->
</header>