<div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">

        <div class="ec-brand">
            <a href="index.php" title="Ekka">
                <img class="ec-brand-icon" src="assets/img/logo/ec-site-logo.png" alt="" />
                <span class="ec-brand-name text-truncate">Ekka</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard -->
                <li class="active">
                    <a class="sidenav-item-link" href="index.php">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>

                <!-- Admin -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-account-group-outline"></i>
                        <span class="nav-text">General Settings</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">

                            <li class="">
                                <a class="sidenav-item-link" href="profile.php">
                                    <span class="nav-text">Profile</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="addSlider.php">
                                    <span class="nav-text">Main Page Slider</span>

                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="about.php">
                                    <span class="nav-text">About us</span>

                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-account-group-outline"></i>
                        <span class="nav-text">Vendors</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">

                            <li class="">
                                <a class="sidenav-item-link" href="vendors.php">
                                    <span class="nav-text">Vendors</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="vendor-profile.php">
                                    <span class="nav-text">Vendors Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Users -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Users</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="users" data-parent="#sidebar-menu">

                            <li class="">
                                <a class="sidenav-item-link" href="user-list.php">
                                    <span class="nav-text">User List</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="user-profile.php">
                                    <span class="nav-text">Users Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                </li>

                <!-- Category -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Categories</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="main-category.php">
                                    <span class="nav-text">Main Category</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="sub-category.php">
                                    <span class="nav-text">Sub Category</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Products -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-palette-advanced"></i>
                        <span class="nav-text">Products</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="product-add.php">
                                    <span class="nav-text">Add Product</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="product-list.php">
                                    <span class="nav-text">List Product</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="product-grid.php">
                                    <span class="nav-text">Grid Product</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="product-detail.php">
                                    <span class="nav-text">Product Detail</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Orders -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Orders</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="new-order.php">
                                    <span class="nav-text">New Order</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="order-history.php">
                                    <span class="nav-text">Order History</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="order-detail.php">
                                    <span class="nav-text">Order Detail</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="invoice.php">
                                    <span class="nav-text">Invoice</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Reviews -->
                <li>
                    <a class="sidenav-item-link" href="review-list.php">
                        <i class="mdi mdi-star-half"></i>
                        <span class="nav-text">Reviews</span>
                    </a>
                </li>

                <!-- Brands -->
                <li>
                    <a class="sidenav-item-link" href="brand-list.php">
                        <i class="mdi mdi-tag-faces"></i>
                        <span class="nav-text">Brands</span>
                    </a>
                    <hr>
                </li>

                <!-- Authentication -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-login"></i>
                        <span class="nav-text">Authentication</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
                            <li class="">
                                <a href="sign-in.php">
                                    <span class="nav-text">Sign In</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="sign-up.php">
                                    <span class="nav-text">Sign Up</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Icons -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-diamond-stone"></i>
                        <span class="nav-text">Icons</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="icons" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="material-icon.php">
                                    <span class="nav-text">Material Icon</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="font-awsome-icons.php">
                                    <span class="nav-text">Font Awsome Icon</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="flag-icon.php">
                                    <span class="nav-text">Flag Icon</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Other Pages -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Other Pages</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="otherpages" data-parent="#sidebar-menu">
                            <li class="has-sub">
                                <a href="404.html">404 Page</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>