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
        <div class="row align-items-center">
            <div class="col-12">
                <!-- <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div> -->
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="welcome_text">
                    <p>Free Shipping On Order Over AED500</span></p>
                    </div>


                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="<?php echo site_url('home');?>" class="text-uppercase"> Home</a>
                            </li>
                            <?php
                foreach($product_category as $key => $menuCategory){
                    //print_r($menuCategory);
                        if(!empty($menuCategory['sub_category'])){
                    ?>
                            <li class="menu-item-has-children">
                                <a href="#" class="text-uppercase"><?php echo $menuCategory['name']?></a>
                                <ul class="sub-menu">
                                    <?php
                    foreach($menuCategory['sub_category'] as $key2 => $menuCategory2){
                    ?>
                                    <li><a class="text-uppercase"
                                            href="<?php echo site_url('category/'.$menuCategory2['slug_name'].'/'.$menuCategory['category_id'].'-'.$menuCategory2['category_id'])?>"><?php echo $menuCategory2['name']?></a>
                                    </li>
                                    <?php
                    }
                    ?>
                                </ul>
                            </li>
                            <?php
                        } else {
                     ?>
                            <!-- <li class="menu-item-has-children">
                        <a href="<?php echo site_url("contact-us")?>" class="text-uppercase"> Contact Us</a>
                    </li> -->
                            <li><a href="<?php echo site_url('category/'.$menuCategory['slug_name'])?>"
                                    class="text-uppercase"><?php echo $menuCategory['name']?></a></li>
                            <?php       
                        }
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
                                <a href="<?php echo site_url("login")?>"
                                    class="text-uppercase">Login/register</a>
                                <?php }?>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="<?php echo site_url("cart")?>" class="text-uppercase">Cart</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="<?php echo site_url("contact-us")?>" class="text-uppercase"> Contact
                                    Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="Offcanvas_footer">
                        <span><a href="tel:+971559632581"><i class="fa fa-phone"></i> +971 559632581</a></span>
                        <span><a href="mail:info@bondbeyond.ae"><i class="fa fa-envelope-o"></i>
                                info@bondbeyond.ae</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->

<!--header area start-->
<header class="header_area header_black black_two">
    <!--header top start-->
    <div class="header_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 texttopbar">
                    <div id="s0">

                        Free Shipping On Order Over AED500
                    </div>
                    <div id='s1'><a href="tel:+971559632581"><i class="fa fa-phone"></i>
                            +971 559632581</a> | <a href="<?php echo site_url('contact-us');?>"><i
                                class="fa fa-envelope-o"></i> Contact us</a></div>
                    <div id='s2'> &nbsp;</div>


                </div>
            </div>

        </div>
    </div>
    <!--header top start-->

    <!--header middel start-->
    <div class="header_middel sticky-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-1 col-md-2 col-sm-4 col-4">
                    <div class="logo">
                        <a href="<?php echo site_url('home');?>"><img
                                src="<?php echo base_url('assets/img/logo/logo.png')?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-11 col-md-10 col-sm-8 col-8">
                    <div class="main_menu_inner" style="text-align:center">

                        <div class="main_menu">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo site_url('home');?>" class="text-uppercase">Home</a>
                                    </li>
                                    <?php
                            foreach($product_category as $key => $menuCategory){
                                //print_r($menuCategory);
                                if(!empty($menuCategory['sub_category'])){

                                
                                ?>
                                    <li>
                                        <a href="#"
                                            class="text-uppercase"><?php echo $menuCategory['name']?></a>

                                        <ul class="sub_menu">
                                            <?php
                                foreach($menuCategory['sub_category'] as $key2 => $menuCategory2){
                                ?>
                                            <li><a class="text-uppercase"
                                                    href="<?php echo site_url('category/'.$menuCategory2['slug_name'].'/'.$menuCategory['category_id'].'-'.$menuCategory2['category_id'])?>"><?php echo $menuCategory2['name']?></a>
                                            </li>
                                            <?php
                                }
                                ?>
                                        </ul>
                                    </li>
                                    <?php
                                 } else{
                            ?>
                                    <li><a href="<?php echo site_url('category/'.$menuCategory['slug_name'])?>"
                                            class="text-uppercase"><?php echo $menuCategory['name']?></a></li>
                                    <?php        
                                 } 
                                }
                                ?>
                                 
                                    <li><a href="<?php echo site_url('contact-us');?>"
                                            class="text-uppercase">Contact
                                            Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="middel_right">
                    <div class="search_btn">
                            <a href="#"><i class="ion-ios-search-strong"></i></a>
                            <div class="dropdown_search">
                                <form action="<?php echo site_url('product/search')?>" method="get">
                                    <input placeholder="Search product..." name="search" id="search" type="text">
                                    <button type="submit" name="submit-button-search-header"
                                        id="submit-button-search-header"><i class="ion-ios-search-strong"></i></button>
                                </form>

                            </div>
                        </div>
                        <div class="box_setting">
                            <a href="#"><i class="ion-gear-b"></i></a>
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

                        <div class="cart_link">
                            <a href="#"><i class="ion-android-cart"></i></a>
                            <span class="cart_quantity" id="top_cart_quantity"><?php echo $carttotal?></span>
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
                                <div class="row">
                                    <div class="col-md-12" id="cartitems">

                                    </div>
                                </div>



                            </div>
                            <!--mini cart end-->
                        </div>
                        <div class="hemberburg canvas_open">
                            <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->

</header>
<!--header area end-->
