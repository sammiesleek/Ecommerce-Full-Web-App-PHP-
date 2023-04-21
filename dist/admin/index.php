<?php

require_once('./includes/htmlheader.php') ;
require_once('./includes/header.php') ;

// if( !isset($_SESSION['emails'])){
//      header("Location:home.php");
//      exit();
// }


?>


<body>
    <div id="ec-overlay"><span class="loader_img"></span></div>


    <!-- ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>

    <!-- ekka Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Login</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Login</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec login page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Log In</h2>
                        <h2 class="ec-title">Log In</h2>
                        <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                    </div>
                </div>
                <div class="ec-login-wrapper">
                    <div class="ec-login-container">
                        <span id="error"
                            style="background: #ffd6d6;margin-bottom: 40px;display:block; color:black;padding:10px 0px; width:100%"
                            class="text-center ec-register-wrap ec-register-half">

                        </span>
                        <div class="ec-login-form">
                            <form id="login_form">
                                <span class="ec-login-wrap">
                                    <label>Email Address*</label>
                                    <input id="email" type="text" name="name" placeholder="Enter your email add..." />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Password*</label>
                                    <input id="password" type="password" name="password"
                                        placeholder="Enter your password" />
                                </span>
                                <span class="ec-login-wrap ec-login-fp">
                                    <label><a href="forgot_password.php">Forgot Password?</a></label>
                                </span>
                                <span class="ec-login-wrap ec-login-btn">
                                    <button id="logbtn" class="btn btn-primary" type="submit">Login</button>
                                    <a href="register.php" class="btn btn-secondary">Register</a>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <!-- Feature tools end -->
    <?php include('../includes/htmlfooter.php') ?>
    <script src="../controller/js/login.js"></script>

</body>

</html>