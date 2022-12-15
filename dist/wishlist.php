<?php

require_once('includes/htmlheader.php') ;




?>

<body class="shop_page">
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <!-- Header start  -->
    <?php include('includes/header.php') ?>
    <!-- Header End  -->

    <!-- ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <?php include('includes/sidebar.php') ?>
    <!-- ekka Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Wishlist</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Wishlist</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- User history section -->
    <section class="ec-page-content ec-vendor-uploads ec-user-account wishlist-2 section-space-p">
        <div class="container">
            <div class="row">
                <!-- Sidebar Area Start -->
                <div class="ec-shop-leftside ec-vendor-sidebar col-lg-3 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-vendor-block">
                                <div class="ec-vendor-block-items">
                                    <ul>
                                        <li><a href="user-profile.html">User Profile</a></li>
                                        <li><a href="user-history.html">History</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="user-invoice.html">Invoice</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-shop-rightside col-lg-9 col-md-12">
                    <div class="ec-vendor-dashboard-card">
                        <div class="ec-vendor-card-header">
                            <h5>Wishlist</h5>
                            <div class="ec-header-btn">
                                <a class="btn btn-lg btn-primary" href="#">Shop Now</a>
                            </div>
                        </div>
                        <div class="ec-vendor-card-body">
                            <div class="ec-vendor-card-table">
                                <table class="table ec-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="wish-empt">
                                        <tr class="pro-gl-content">
                                            <th scope="row"><span>225</span></th>
                                            <td><img class="prod-img" src="assets/images/product-image/1.jpg"
                                                    alt="product image"></td>
                                            <td><span>Stylish baby shoes</span></td>
                                            <td><span>16 Jul 2021</span></td>
                                            <td><span>$65</span></td>
                                            <td><span class="avl">Available</span></td>
                                            <td><span class="tbl-btn">
                                                    <a class="btn btn-lg btn-primary" href="javascript:void(0)"
                                                        title="Add To Cart">
                                                        <img src="assets/images/icons/pro_cart.svg"
                                                            class="svg_img pro_svg" alt="" />
                                                    </a>
                                                    <a class="btn btn-lg btn-primary ec-com-remove ec-remove-wish"
                                                        href="javascript:void(0)" title="Remove From List">×</a></span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <th scope="row"><span>548</span></th>
                                            <td><img class="prod-img" src="assets/images/product-image/2.jpg"
                                                    alt="product image"></td>
                                            <td><span>Sweat Pullover Hoodie</span></td>
                                            <td><span>13 Aug 2016</span></td>
                                            <td><span>$68</span></td>
                                            <td><span class="out">Out Of Stock</span></td>
                                            <td><span class="tbl-btn">
                                                    <a class="btn btn-lg btn-primary" href="javascript:void(0)"
                                                        title="Add To Cart">
                                                        <img src="assets/images/icons/pro_cart.svg"
                                                            class="svg_img pro_svg" alt="" />
                                                    </a>
                                                    <a class="btn btn-lg btn-primary ec-com-remove ec-remove-wish"
                                                        href="javascript:void(0)" title="Remove From List">×</a></span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <th scope="row"><span>684</span></th>
                                            <td><img class="prod-img" src="assets/images/product-image/3.jpg"
                                                    alt="product image"></td>
                                            <td><span>T-shirt for girl</span></td>
                                            <td><span>20 Jul 2015</span></td>
                                            <td><span>$360</span></td>
                                            <td><span class="avl">Available</span></td>
                                            <td><span class="tbl-btn">
                                                    <a class="btn btn-lg btn-primary" href="javascript:void(0)"
                                                        title="Add To Cart">
                                                        <img src="assets/images/icons/pro_cart.svg"
                                                            class="svg_img pro_svg" alt="" />
                                                    </a>
                                                    <a class="btn btn-lg btn-primary ec-com-remove ec-remove-wish"
                                                        href="javascript:void(0)" title="Remove From List">×</a></span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <th scope="row"><span>987</span></th>
                                            <td><img class="prod-img" src="assets/images/product-image/4.jpg"
                                                    alt="product image"></td>
                                            <td><span>Wool hat for men</span></td>
                                            <td><span>05 Feb 2014</span></td>
                                            <td><span>$584</span></td>
                                            <td><span class="out">Out Of Stock</span></td>
                                            <td><span class="tbl-btn">
                                                    <a class="btn btn-lg btn-primary" href="javascript:void(0)"
                                                        title="Add To Cart">
                                                        <img src="assets/images/icons/pro_cart.svg"
                                                            class="svg_img pro_svg" alt="" />
                                                    </a>
                                                    <a class="btn btn-lg btn-primary ec-com-remove ec-remove-wish"
                                                        href="javascript:void(0)" title="Remove From List">×</a></span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <th scope="row"><span>225</span></th>
                                            <td><img class="prod-img" src="assets/images/product-image/5.jpg"
                                                    alt="product image"></td>
                                            <td><span>Women leather purse</span></td>
                                            <td><span>23 Jul 2013</span></td>
                                            <td><span>$65</span></td>
                                            <td><span class="out">Out Of Stock</span></td>
                                            <td><span class="tbl-btn">
                                                    <a class="btn btn-lg btn-primary" href="javascript:void(0)"
                                                        title="Add To Cart">
                                                        <img src="assets/images/icons/pro_cart.svg"
                                                            class="svg_img pro_svg" alt="" />
                                                    </a>
                                                    <a class="btn btn-lg btn-primary ec-com-remove ec-remove-wish"
                                                        href="javascript:void(0)" title="Remove From List">×</a></span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <th scope="row"><span>548</span></th>
                                            <td><img class="prod-img" src="assets/images/product-image/6.jpg"
                                                    alt="product image"></td>
                                            <td><span>Doctor kit toy</span></td>
                                            <td><span>28 Mar 2011</span></td>
                                            <td><span>$68</span></td>
                                            <td><span class="dis">Disabled</span></td>
                                            <td><span class="tbl-btn">
                                                    <a class="btn btn-lg btn-primary" href="javascript:void(0)"
                                                        title="Add To Cart">
                                                        <img src="assets/images/icons/pro_cart.svg"
                                                            class="svg_img pro_svg" alt="" />
                                                    </a>
                                                    <a class="btn btn-lg btn-primary ec-com-remove ec-remove-wish"
                                                        href="javascript:void(0)" title="Remove From List">×</a></span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <th scope="row"><span>684</span></th>
                                            <td><img class="prod-img" src="assets/images/product-image/7.jpg"
                                                    alt="product image"></td>
                                            <td><span>Teddy bear for baby</span></td>
                                            <td><span>16 Apr 2010</span></td>
                                            <td><span>$360</span></td>
                                            <td><span class="avl">Available</span></td>
                                            <td><span class="tbl-btn">
                                                    <a class="btn btn-lg btn-primary" href="javascript:void(0)"
                                                        title="Add To Cart">
                                                        <img src="assets/images/icons/pro_cart.svg"
                                                            class="svg_img pro_svg" alt="" />
                                                    </a>
                                                    <a class="btn btn-lg btn-primary ec-com-remove ec-remove-wish"
                                                        href="javascript:void(0)" title="Remove From List">×</a></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End User history section -->

    <!-- Footer Start -->
    <?php include('includes/footer.php') ?>
    <!-- Footer Area End -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.html" class="ec-header-btn"><img src="assets/images/icons/home.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg"
                            class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.html" class="ec-header-btn"><img src="assets/images/icons/user.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <div class="recent-purchase">
        <img src="assets/images/product-image/1.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>stylish baby shoes</h6>
            <p>10 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Cart Floating Button -->
    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /></div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>
    <!-- Cart Floating Button end -->

    <!-- Whatsapp -->
    <div class="ec-style ec-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="ec-panel">
            <!-- Panel Header -->
            <div class="ec-header">
                <strong>Need Help?</strong>
                <p>Chat with us on WhatsApp</p>
            </div>
            <!-- Panel Content -->
            <div class="ec-body">
                <ul>
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_01.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Sahar Darya</span>
                                    <p>Sahar left 7 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_02.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-online"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Yolduz Rafi</span>
                                    <p>Yolduz is online</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_03.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Nargis Hawa</span>
                                    <p>Nargis left 30 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_04.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Khadija Mehr</span>
                                    <p>Khadija left 50 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                </ul>
            </div>
        </div>
        <!--/ End Floating Panel Container -->
        <!-- Start Right Floating Button-->
        <div class="ec-right-bottom">
            <div class="ec-box">
                <div class="ec-button rotateBackward">
                    <img class="whatsapp" src="assets/images/common/whatsapp.png" alt="whatsapp icon" />
                </div>
            </div>
        </div>
        <!--/ End Right Floating Button-->
    </div>
    <!-- Whatsapp end -->

    <!-- Feature tools -->
    <div class="ec-tools-sidebar-overlay"></div>
    <div class="ec-tools-sidebar">
        <div class="tool-title">
            <h3>Features</h3>
        </div>
        <a href="#" class="ec-tools-sidebar-toggle in-out">
            <img alt="icon" src="assets/images/common/settings.png" />
        </a>
        <div class="ec-tools-detail">
            <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
                <h3>Color Scheme</h3>
                <ul class="bg-panel">
                    <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                    <li data-color="02"><a href="#" class="colorcode2"></a></li>
                    <li data-color="03"><a href="#" class="colorcode3"></a></li>
                    <li data-color="04"><a href="#" class="colorcode4"></a></li>
                    <li data-color="05"><a href="#" class="colorcode5"></a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Backgrounds</h3>
                <ul class="bg-panel">
                    <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                    <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                    <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                    <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Full Screen mode</h3>
                <div class="ec-fullscreen-mode">
                    <div class="ec-fullscreen-switch">
                        <div class="ec-fullscreen-btn">Mode</div>
                        <div class="ec-fullscreen-on">On</div>
                        <div class="ec-fullscreen-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Dark mode</h3>
                <div class="ec-change-mode">
                    <div class="ec-mode-switch">
                        <div class="ec-mode-btn">Mode</div>
                        <div class="ec-mode-on">On</div>
                        <div class="ec-mode-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>RTL mode</h3>
                <div class="ec-change-rtl">
                    <div class="ec-rtl-switch">
                        <div class="ec-rtl-btn">Rtl</div>
                        <div class="ec-rtl-on">On</div>
                        <div class="ec-rtl-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Language</h3>
                <div class="ec-change-lang">
                    <span id="google_translate_element"></span>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Clear local storage</h3>
                <a class="clear-cach" href="javascript:void(0)">Clear Cache & Default</a>
            </div>
        </div>
    </div>
    <!-- Feature tools end -->

    <?php include('includes/htmlfooter.php') ?>

</body>

</html>