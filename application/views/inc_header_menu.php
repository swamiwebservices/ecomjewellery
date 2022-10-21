<?php
//print_r($home);
$product_category  = json_decode(file_get_contents('uploads/jsondata/product_category.json'), true);
$carttotal = (int)$this->services->addtocart();
//print_r($product_category);
// $popupdata = [];
// foreach($home_data['config_home'] as $key => $value){
//     $popupdata[$value['key_name']] = $value['value'];
// }
//print_r($popupdata);
$page_url = $this->uri->segment(1);
$session_user_data = $this->session->userdata('front_user_detail');
//print_r($session_user_data);

?>
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
                            <li class="menu-item-has-children">
                                <a href="<?php echo site_url('home');?>" class="text-uppercase"> Home</a>
                            </li>
                            <?php
                        foreach($product_category as $key => $menuCategory){
                            //print_r($menuCategory);
                            ?>
                            <li class="menu-item-has-children">
                                <a href="#" class="text-uppercase"><?php echo $menuCategory['name']?></a>
                                <ul class="sub-menu">
                                    <?php
                            foreach($menuCategory['sub_category'] as $key2 => $menuCategory2){
                            ?>
                                    <li><a class="text-uppercase" href="<?php echo site_url('category/'.$menuCategory2['slug_name'].'/'.$menuCategory['category_id'].'-'.$menuCategory2['category_id'])?>"><?php echo $menuCategory2['name']?></a>
                                    </li>
                                    <?php
                            }
                            ?>
                                </ul>
                            </li>
                            <?php
                            }
                            ?>
                            <li class="menu-item-has-children">
                            <?php
                                    if (isset($session_user_data['customer_id'])) {
                                    ?>
                                <a href="<?php echo site_url("account")?>" class="text-uppercase">My Account</a>
                                <?php    
                                    } else {
                                    ?>
                                     <a href="<?php echo site_url("login")?>" class="text-uppercase">Login/register</a>
                                    <?php }?>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="<?php echo site_url("about-us")?>" class="text-uppercase">About Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="<?php echo site_url("contact-us")?>" class="text-uppercase"> Contact Us</a>
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
    <div class="header_middel sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="logo">
                        <a href="<?php echo site_url("home")?>"><img src="<?php echo base_url('assets/img/logo/logo.png')?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-7 col-sm-12 col-6">
                    <div class="main_menu_inner">
                       <div class="logo_sticky">
                           <a href="<?php echo site_url("home")?>"><img src="<?php echo base_url('assets/img/logo/logo-3.png')?>" alt=""></a>
                       </div>
                        <div class="main_menu"> 
                            <nav>  
                            <ul>
                                    <li><a href="<?php echo site_url('home');?>" class="text-uppercase">Home</a></li>
                                    <?php
                                    foreach($product_category as $key => $menuCategory){
                                        //print_r($menuCategory);
                                        ?>
                                    <li>
                                        <a href="#" class="text-uppercase"><?php echo $menuCategory['name']?></a>
                                        <ul class="sub_menu">
                                            <?php
                                        foreach($menuCategory['sub_category'] as $key2 => $menuCategory2){
                                        ?>
                                            <li><a  class="text-uppercase"  href="<?php echo site_url('category/'.$menuCategory2['slug_name'].'/'.$menuCategory['category_id'].'-'.$menuCategory2['category_id'])?>"><?php echo $menuCategory2['name']?></a>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                        </ul>
                                    </li>
                                    <?php
                                        }
                                        ?>
                                    <li><a href="<?php echo site_url('home');?>" class="text-uppercase">Contact Us</a></li>
                                </ul>
                            </nav> 
                        </div>
                    </div> 
                    <div class="middel_right">
                        <div class="search_btn">
                            <a href="#"><i class="ion-ios-search-strong"></i></a>
                            <div class="dropdown_search">
                               
                                    <input placeholder="Search product..." name="keyword_search" id="top_keyword_search" type="text">
                                    <button type="button" name="btn_keyword_search" id="top_btn_keyword_search"><i class="ion-ios-search-strong"></i></button>
                                
                            </div>
                        </div>
                       
                        <!-- <div class="wishlist_btn">
                            <a href="wishlist.html"><i class="ion-heart"></i></a>
                        </div> -->
                        <div class="cart_link">
                            <a href="#"><i class="ion-android-cart"></i></a>
                            <span class="cart_quantity" id="top_cart_quantity"><?php echo $carttotal?></span>
                            <!--mini cart-->
                            <div class="mini_cart" id="mini_cart">
                                <div class="cart_close">
                                    <div class="cart_text">
                                        <h3>cart</h3>
                                    </div>
                                    <div class="mini_cart_close">
                                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" id="cartitems">

                                    </div>
                                </div>
                                 
                            </div>
                            <!--mini cart end-->
                        </div>
                        <div class="box_setting">
                            <a href="#"><i class="ion-person"></i></a>
                            <div class="dropdown_setting">
                                <ul>
                                    <?php
                                    if (isset($session_user_data['customer_id'])) {
                                    ?>
                                    <li><a href="<?php echo site_url("account")?>">My Account </a></li>
                                    <li><a href="<?php echo site_url("account/logout")?>">Logout</a></li>
                                     
                                    <?php    
                                    } else {
                                    ?>
                                    <li><a href="<?php echo site_url("login")?>">Login </a></li>
                                    <li><a href="<?php echo site_url("login/register")?>">Register</a></li>
                                    
                                    <?php    
                                    }
                                    ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->

     
</header>
<!--header area end-->
