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
                            <span class="ec-header-count">4</span>
                        </a>
                        <!-- Header Cart End -->
                        <!-- Header Cart Start -->
                        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                            <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg"
                                    alt="" /></div>
                            <span class="ec-header-count cart-count-lable">3</span>
                        </a>
                        <!-- Header Cart End -->
                        <a href="javascript:void(0)" class="ec-header-btn ec-sidebar-toggle">
                            <img src="assets/images/icons/category-icon.svg" class="svg_img header_svg" alt="icon" />
                        </a>
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
                                <span class="ec-header-count">4</span>
                            </a>
                            <!-- Header wishlist End -->
                            <!-- Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><img src="assets/images/icons/cart.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count cart-count-lable">3</span>
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
                <!-- Ec Header Search Start -->
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
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">Classic
                                                    Variation</a></li>
                                            <li><a href="shop.php">Left sidebar 3 column</a>
                                            </li>
                                            <li><a href="shop-left-sidebar-col-4.php">Left sidebar 4 column</a>
                                            </li>
                                            <li><a href="shop-right-sidebar-col-3.php">Right sidebar 3 column</a>
                                            </li>
                                            <li><a href="shop-right-sidebar-col-4.php">Right sidebar 4 column</a>
                                            </li>
                                            <li><a href="shop-full-width.php">Full width 4 column</a></li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">Classic
                                                    Variation</a></li>
                                            <li><a href="shop-banner.php">Banner left sidebar 3
                                                    column</a></li>
                                            <li><a href="shop-banner-left-sidebar-col-4.php">Banner left sidebar 4
                                                    column</a></li>
                                            <li><a href="shop-banner-right-sidebar-col-3.php">Banner right sidebar
                                                    3 column</a></li>
                                            <li><a href="shop-banner-right-sidebar-col-4.php">Banner right sidebar
                                                    4 column</a></li>
                                            <li><a href="shop-banner-full-width.php">Banner Full width 4 column</a>
                                            </li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">Columns
                                                    Variation</a></li>
                                            <li><a href="shop-full-width-col-3.php">3 Columns full width</a></li>
                                            <li><a href="shop-full-width-col-4.php">4 Columns full width</a></li>
                                            <li><a href="shop-full-width-col-5.php">5 Columns full width</a></li>
                                            <li><a href="shop-full-width-col-6.php">6 Columns full width</a></li>
                                            <li><a href="shop-banner-full-width-col-3.php">Banner 3 Columns</a>
                                            </li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">List Variation</a>
                                            </li>
                                            <li><a href="shop-list-left-sidebar.php">Shop left sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.php">Shop right sidebar</a></li>
                                            <li><a href="shop-list-banner-left-sidebar.php">Banner left sidebar</a>
                                            </li>
                                            <li><a href="shop-list-banner-right-sidebar.php">Banner right
                                                    sidebar</a></li>
                                            <li><a href="shop-list-full-col-2.php">Full width 2 columns</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="ec-main-banner w-100">
                                            <li><a class="p-0" href="shop.php"><img class="img-responsive"
                                                        src="assets/images/menu-banner/1.jpg" alt=""></a></li>
                                            <li><a class="p-0" href="shop-left-sidebar-col-4.php"><img
                                                        class="img-responsive" src="assets/images/menu-banner/2.jpg"
                                                        alt=""></a></li>
                                            <li><a class="p-0" href="shop-right-sidebar-col-3.php"><img
                                                        class="img-responsive" src="assets/images/menu-banner/3.jpg"
                                                        alt=""></a></li>
                                            <li><a class="p-0" href="shop-right-sidebar-col-4.php"><img
                                                        class="img-responsive" src="assets/images/menu-banner/4.jpg"
                                                        alt=""></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <!-- <li class="dropdown"><a href="blog.php">Blog</a>
                                </li> -->
                            <li class="dropdown"><a href="about-us.php">About Us</a>

                            </li>
                            <li><a href="offer.php">Hot Offers</a></li>
                            <li><a href="contact-us.php">CONTACT US</a></li>



                            <li class="dropdown scroll-to"><a href="javascript:void(0)"><img
                                        src="assets/images/icons/scroll.svg" class="svg_img header_svg scroll"
                                        alt="" /></a>
                                <ul class="sub-menu">
                                    <li class="menu_title">Scroll To Section</li>
                                    <li><a href="javascript:void(0)" data-scroll="collection" class="nav-scroll">Top
                                            Collection</a></li>
                                    <li><a href="javascript:void(0)" data-scroll="categories"
                                            class="nav-scroll">Categories</a></li>
                                    <li><a href="javascript:void(0)" data-scroll="offers" class="nav-scroll">Offers</a>
                                    </li>
                                    <li><a href="javascript:void(0)" data-scroll="vendors" class="nav-scroll">Top
                                            Vendors</a></li>
                                    <li><a href="javascript:void(0)" data-scroll="services"
                                            class="nav-scroll">Services</a></li>
                                    <li><a href="javascript:void(0)" data-scroll="arrivals" class="nav-scroll">New
                                            Arrivals</a></li>
                                    <li><a href="javascript:void(0)" data-scroll="reviews" class="nav-scroll">Client
                                            Review</a></li>
                                    <li><a href="javascript:void(0)" data-scroll="insta" class="nav-scroll">Instagram
                                            Feed</a></li>
                                </ul>
                            </li>
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
                            <li>
                                <a href="javascript:void(0)">Classic Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.php">Left sidebar 3 column</a></li>
                                    <li><a href="shop-left-sidebar-col-4.php">Left sidebar 4 column</a></li>
                                    <li><a href="shop-right-sidebar-col-3.php">Right sidebar 3 column</a></li>
                                    <li><a href="shop-right-sidebar-col-4.php">Right sidebar 4 column</a></li>
                                    <li><a href="shop-full-width.php">Full width 4 column</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Classic Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-banner.php">Banner left sidebar 3
                                            column</a></li>
                                    <li><a href="shop-banner-left-sidebar-col-4.php">Banner left sidebar 4
                                            column</a></li>
                                    <li><a href="shop-banner-right-sidebar-col-3.php">Banner right sidebar 3
                                            column</a></li>
                                    <li><a href="shop-banner-right-sidebar-col-4.php">Banner right sidebar 4
                                            column</a></li>
                                    <li><a href="shop-banner-full-width.php">Banner Full width 4 column</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Columns Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-full-width-col-3.php">3 Columns full width</a></li>
                                    <li><a href="shop-full-width-col-4.php">4 Columns full width</a></li>
                                    <li><a href="shop-full-width-col-5.php">5 Columns full width</a></li>
                                    <li><a href="shop-full-width-col-6.php">6 Columns full width</a></li>
                                    <li><a href="shop-banner-full-width-col-3.php">Banner 3 Columns</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">List Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-list-left-sidebar.php">Shop left sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.php">Shop right sidebar</a></li>
                                    <li><a href="shop-list-banner-left-sidebar.php">Banner left sidebar</a></li>
                                    <li><a href="shop-list-banner-right-sidebar.php">Banner right sidebar</a></li>
                                    <li><a href="shop-list-full-col-2.php">Full width 2 columns</a></li>
                                </ul>
                            </li>
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
                    <li><a href="javascript:void(0)">Others</a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0)">Mail Confirmation</a>
                                <ul class="sub-menu">
                                    <li><a href="email-template-confirm-1.php">Mail Confirmation 1</a></li>
                                    <li><a href="email-template-confirm-2.php">Mail Confirmation 2</a></li>
                                    <li><a href="email-template-confirm-3.php">Mail Confirmation 3</a></li>
                                    <li><a href="email-template-confirm-4.php">Mail Confirmation 4</a></li>
                                    <li><a href="email-template-confirm-5.php">Mail Confirmation 5</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Mail Reset password</a>
                                <ul class="sub-menu">
                                    <li><a href="email-template-forgot-password-1.php">Reset password 1</a></li>
                                    <li><a href="email-template-forgot-password-2.php">Reset password 2</a></li>
                                    <li><a href="email-template-forgot-password-3.php">Reset password 3</a></li>
                                    <li><a href="email-template-forgot-password-4.php">Reset password 4</a></li>
                                    <li><a href="email-template-forgot-password-5.php">Reset password 5</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Mail Promotional</a>
                                <ul class="sub-menu">
                                    <li><a href="email-template-offers-1.php">Offer Mail 1</a></li>
                                    <li><a href="email-template-offers-2.php">Offer Mail 2</a></li>
                                    <li><a href="email-template-offers-3.php">Offer Mail 3</a></li>
                                    <li><a href="email-template-offers-4.php">Offer Mail 4</a></li>
                                    <li><a href="email-template-offers-5.php">Offer Mail 5</a></li>
                                    <li><a href="email-template-offers-6.php">Offer Mail 6</a></li>
                                    <li><a href="email-template-offers-7.php">Offer Mail 7</a></li>
                                    <li><a href="email-template-offers-8.php">Offer Mail 8</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Vendor Account Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="vendor-dashboard.php">Vendor Dashboard</a></li>
                                    <li><a href="vendor-profile.php">Vendor Profile</a></li>
                                    <li><a href="vendor-uploads.php">Vendor Uploads</a></li>
                                    <li><a href="vendor-settings.php">Vendor Settings</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">User Account Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="user-profile.php">User Profile</a></li>
                                    <li><a href="user-history.php">User History</a></li>
                                    <li><a href="wishlist.php">Wishlist</a></li>
                                    <li><a href="track-order.php">Track Order</a></li>
                                    <li><a href="invoice.php">User Invoice</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Construction Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="404-error-page.php">404 Error Page</a></li>
                                    <li><a href="under-maintenance.php">Maintenance Page</a></li>
                                    <li><a href="coming-soon.php">Comming Soon Page</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Vendor Catalog Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="catalog-single-vendor.php">Catalog Single Vendor</a></li>
                                    <li><a href="catalog-multi-vendor.php">Catalog Multi Vendor</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                            <li><a href="compare.php">Compare</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="track-order.php">Track Order</a></li>
                            <li><a href="terms-condition.php">Terms Condition</a></li>
                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-left-sidebar.php">Blog left sidebar</a></li>
                            <li><a href="blog-right-sidebar.php">Blog right sidebar</a></li>
                            <li><a href="blog-detail-left-sidebar.php">Blog detail left sidebar</a></li>
                            <li><a href="blog-detail-right-sidebar.php">Blog detail right sidebar</a></li>
                            <li><a href="blog-full-width.php">Blog full width</a></li>
                            <li><a href="blog-detail-full-width.php">Blog detail full width</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                        <ul class="sub-menu">
                            <li><a href="elemets-products.php">Products</a></li>
                            <li><a href="elemets-typography.php">Typography</a></li>
                            <li><a href="elemets-title.php">Titles</a></li>
                            <li><a href="elemets-categories.php">Categories</a></li>
                            <li><a href="elemets-buttons.php">Buttons</a></li>
                            <li><a href="elemets-tabs.php">Tabs</a></li>
                            <li><a href="elemets-accordions.php">Accordions</a></li>
                            <li><a href="elemets-blog.php">Blogs</a></li>
                        </ul>
                    </li>
                    <li><a href="offer.php">Hot Offers</a></li>
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