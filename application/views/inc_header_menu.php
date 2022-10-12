<?php
//print_r($home);
$home_data  = json_decode(file_get_contents('uploads/jsondata/homejosn.json'), true);
$product_category = $home_data['product_category'];
//print_r($product_category);
// $popupdata = [];
// foreach($home_data['config_home'] as $key => $value){
//     $popupdata[$value['key_name']] = $value['value'];
// }
//print_r($popupdata);
$page_url = $this->uri->segment(1);
?>
        <!-- Main Wrapper Start -->
        <!--Offcanvas menu area start-->
        <div class="off_canvars_overlay">

        </div>
        <div class="Offcanvas_menu Offcanvas_two Offcanvas_black2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="canvas_open">
                            <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                        </div>
                        <div class="Offcanvas_menu_wrapper">
                            <div class="canvas_close">
                                <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                            </div>



                            <div id="menu" class="text-left ">
                                <ul class="offcanvas_main_menu">
                                    <li class="menu-item-has-children ">
                                        <a href="home" class="text-uppercase">Home</a>

                                    </li>
                                    <?php
                                    foreach($product_category as $key => $menuCategory){
                                        if($menuCategory['parent_id']==0){
                                        ?>
                                         <li class="menu-item-has-children ">
                                        <a href="<?php echo site_url('category/'.$menuCategory['slug_name'])?>" class="text-uppercase"><?php echo $menuCategory['name']?></a>
                                    </li>
                                        <?php
                                        }
                                    }
                                    ?>
                                   
                                    <li class="menu-item-has-children">
                                        <a href="about" class="text-uppercase">About Us</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="contact" class="text-uppercase"> Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="Offcanvas_footer">
                                <span><a href="#"><i class="fa fa-envelope-o"></i> demo@example.com</a></span>
                                <ul>
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Offcanvas menu area end-->

        <!--header area start-->
        <header class="header_area header_black black_two">

            <!--header middel start-->
            <div class="header_middel">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3 col-4">
                            <div class="logo">
                                <a href="index"><img src="<?php echo base_url();?>assets/img/logo/logo.jpg"
                                        style="height:90px;width:auto" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-7 col-sm-12 col-6">
                            <div class="middel_right">
                                <div class="search_btn">
                                    <form action="#">
                                        <input placeholder="Search product..." type="text">
                                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                </div>
                                <div class="box_setting">
                                    <a href="#"><i class="ion-gear-b"></i></a>
                                    <div class="dropdown_setting">
                                        <ul>
                                            <li><a href="checkout">Checkout </a></li>
                                            <li><a href="my-account">My Account </a></li>
                                            <li><a href="cart">Shopping Cart</a></li>
                                            <li><a href="wishlist">Wishlist</a></li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="wishlist_btn">
                                    <a href="wishlist.html"><i class="ion-heart"></i></a>
                                </div>
                                <div class="cart_link">
                                    <a href="#"><i class="ion-android-cart"></i><span class="cart_text_quantity">
                                            $138.00</span> <i class="fa fa-angle-down"></i></a>
                                    <span class="cart_quantity">2</span>
                                    <!--mini cart-->
                                    <div class="mini_cart">
                                        <div class="cart_close">
                                            <div class="cart_text">
                                                <h3>cart</h3>
                                            </div>
                                            <div class="mini_cart_close">
                                                <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img
                                                        src="<?php echo base_url();?>assets/img/s-product/product.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Letraset animal</a>

                                                <span class="quantity">Qty: 1</span>
                                                <span class="price_cart">$60.00</span>

                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img
                                                        src="<?php echo base_url();?>assets/img/s-product/product2.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Natural passages</a>
                                                <span class="quantity">Qty: 1</span>
                                                <span class="price_cart">$69.00</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_total">
                                            <span>Subtotal:</span>
                                            <span>138.00</span>
                                        </div>
                                        <div class="mini_cart_footer">
                                            <div class="cart_button view_cart">
                                                <a href="cart.html">View cart</a>
                                            </div>
                                            <div class="cart_button checkout">
                                                <a class="active" href="checkout.html">Checkout</a>
                                            </div>

                                        </div>

                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->

            <!--header bottom satrt-->
            <div class="header_bottom sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="main_menu_inner">
                                <div class="logo_sticky">
                                    <a href="home"><img src="<?php echo base_url();?>assets/img/logo/logo-w.jpg"
                                            style="height:70px;width:auto" alt="logo"></a>
                                </div>
                                <div class="main_menu">
                                    <nav>
                                        <ul>
                                            <li  class="active "><a href="index" class="text-uppercase">Home</a>
                                            </li>
                                            <?php
                                    foreach($product_category as $key => $menuCategory){
                                        if($menuCategory['parent_id']==0){

                                         
                                        ?>
                                         <li class="menu-item-has-children ">
                                        <a href="<?php echo site_url('category/'.$menuCategory['slug_name'])?>" class="text-uppercase"><?php echo $menuCategory['name']?></a>
                                    </li>
                                        <?php
                                    }
                                    }
                                    ?>
                                            <li class="text-uppercase"><a href="index" class="text-uppercase">About</a>
                                            </li>
                                            
                                            
                                            <li class="text-uppercase"><a href="index" class="text-uppercase">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </header>
        <!--header area end-->