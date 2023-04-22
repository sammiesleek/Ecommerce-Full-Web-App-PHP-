 <div class="ec-nav-toolbar">
     <div class="container">
         <div class="ec-nav-panel">
             <div class="ec-nav-panel-icons">
                 <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                         src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" /></a>
             </div>
             <div class="ec-nav-panel-icons">
                 <a href="cart.php" class=" ec-header-btn "><img
                         src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="icon" /><span
                         class="ec-cart-noti ec-header-count cart-count-lable">0</span></a>
             </div>
             <div class="ec-nav-panel-icons">
                 <a href="index.php" class="ec-header-btn"><img src="assets/images/icons/home.svg"
                         class="svg_img header_svg" alt="icon" /></a>
             </div>
             <div class="ec-nav-panel-icons">
                 <a href="wishlist.php" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg"
                         class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
             </div>
             <div class="ec-nav-panel-icons">

                 <?php

                if(isset($_SESSION['email'])){
                    echo '  <a href="user-profile.php" class="ec-header-btn"><img src="assets/images/icons/user.svg"
                            class="svg_img header_svg" alt="icon" /></a>  ';
                }else{
                    echo '   <a href="login.php" class="ec-header-btn"><img src="assets/images/icons/user.svg"
                            class="svg_img header_svg" alt="icon" /></a>';
                }

                ?>

             </div>

         </div>
     </div>
 </div>