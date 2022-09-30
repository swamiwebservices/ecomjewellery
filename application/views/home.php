<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
</head>

<body>

    <!-- Main Wrapper Start -->
    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    <div class="Offcanvas_menu Offcanvas_two">
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
                        <div class="welcome_text">
                            <!-- <p>Free shipping on all domestic orders with coupon code <span>“Watches2018”</span></p> -->
                        </div>

                        <div class="top_right text-right">
                            <ul>
                                <!--  <li class="language"><a href="#"> English <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#"> French</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Japanese</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="home">Home</a>

                                </li>

                                <li class="menu-item-has-children">
                                    <a href="my-account">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact"> Contact Us</a>
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
    <header class="header_area header_two">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="top_right text-left">
                            <ul>
                                <!-- <li class="language"><a href="#"> English <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#"> French</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Japanese</a></li>
                                    </ul>
                                </li> -->
                                <!--   <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li> -->

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="social_icone text-right">
                            <ul>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middel">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="logo">
                            <a href="index"><img src="<?php echo base_url();?>assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-7 col-6">
                        <div class="middel_right">

                            <div class="search_btn mobail_none2">
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
                                            <a href="cart">View cart</a>
                                        </div>
                                        <div class="cart_button checkout">
                                            <a class="active" href="checkout">Checkout</a>
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
                                <a href="index"><img src="<?php echo base_url();?>assets/img/logo/logo.png"
                                        alt=""></a>
                            </div>
                            <div class="main_menu">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="index">Home</a>
                                        </li>
                                        <li class="active"><a href="index">About</a>
                                        </li>
                                        <li class="active"><a href="index">Category</a>
                                        </li>
                                        <li class="active"><a href="index">Product</a>
                                        </li>
                                        <li class="active"><a href="index">Contact</a>
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

    <!--slider area start-->
    <?php
    //print_r($wti_banners);
    if(isset($wti_banners)  && sizeof($wti_banners) > 0 ){
    ?>
    <div class="slider_area home_slider_two owl-carousel">
        <?php
        
        foreach($wti_banners as $key => $value){
            $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().$value['main_image']:base_url().'assets/images/70X70.png';
        ?>
        <div class="single_slider" data-bgimg="<?php echo $main_image?>">
            <div class="container">
                <div class="row align-items-center">
                     
                </div>
            </div>
        </div>
        <?php }?>    
    </div>
    <?php }?>
    <!--slider area end-->

    <!--banner area start-->
    <!-- <section class="banner_section home_banner_two">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop"><img src="<?php echo base_url();?>assets/img/bg/banner5.jpg" alt=""></a>
                            <div class="banner_content">
                                <p>Design Creative</p>
                                <h2>Modern and Clean</h2>
                                <span>From $60.99 – Sale 20%</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop"><img src="<?php echo base_url();?>assets/img/bg/banner6.jpg" alt=""></a>
                            <div class="banner_content">
                                <p>Bestselling Products</p>
                                <h2>Jewelry and Diamonds</h2>
                                <span>Only from $89.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <!--banner area end-->

    <!--product section area start-->
    <section class="product_section  p_section1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Latest Products</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="product_area ">
                        <div class="product_container bottom">
                            <div class="custom-row product_row1">
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product13.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product14.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details">Aliquam furniture</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" data-placement="top"
                                                                title="Add to Wishlist" data-bs-toggle="tooltip"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product1.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product2.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details">Dummy animal</a></h3>
                                            <span class="current_price">$65.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" title="Wishlist"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product10.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product11.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women</a>
                                            </div>
                                            <h3><a href="product-details">Furniture</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" title="Wishlist"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product12.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product13.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Men,</a>
                                            </div>
                                            <h3><a href="product-details">Letraset animal</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$70.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" title="Wishlist"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product15.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product14.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women</a>
                                            </div>
                                            <h3><a href="product-details">Aliquam furniture</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" title="Wishlist"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product16.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product11.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details">Natural Lorem Ipsum</a></h3>
                                            <span class="current_price">$65.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" title="Wishlist"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                            </div>
                                            <h3><a href="product-details">Furniture</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" title="Wishlist"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product16.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product15.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details">Letraset animal</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" title="Wishlist"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product8.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product3.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">men</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details">Aliquam furniture</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" title="Wishlist"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product10.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product12.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">men</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details">Natural Contrary</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" title="Wishlist"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product3.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details">Donec eu furniture</a></h3>
                                            <span class="current_price">$62.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" title="Wishlist"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product16.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details"><img
                                                    src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                    alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-placement="top" data-original-title="quick view"> quick
                                                    view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women</a>
                                            </div>
                                            <h3><a href="product-details">Duis pulvinar</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$70.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist" title="Wishlist"><span
                                                                    class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart"
                                                                title="add to cart">add to cart</a></li>
                                                        <li><a href="compare" title="compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product section area end-->

    <!--shipping area start-->
    <div class="shipping_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-shipping">
                        <h3>Money Return Guarantee</h3>
                        <p>Back guarantee under 30 days</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-shipping">
                        <h3>Free Shipping On Order Over $120</h3>
                        <p>Free shipping on all order</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->

    <!--product section area start-->
    <section class="product_section p_section1 product_bottom_two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_area">
                        <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#featured" role="tab"
                                        aria-controls="featured" aria-selected="true">Featured</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#arrivals" role="tab" aria-controls="arrivals"
                                        aria-selected="false">New Arrivals</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#onsale" role="tab" aria-controls="onsale"
                                        aria-selected="false">Onsale</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="featured" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product1.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product2.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="#" data-placement="top" title=""
                                                                        data-bs-toggle="tooltip"
                                                                        data-original-title="Add to Wishlist"
                                                                        tabindex="0"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product3.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product4.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product7.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product8.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Men,</a>
                                                    </div>
                                                    <h3><a href="product-details">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$60.00</span>
                                                        <span class="current_price">$55.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product9.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product10.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product12.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product11.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$50.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product3.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product1.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="product-details">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$62.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product4.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product7.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product11.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product13.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product12.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="arrivals" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product10.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product11.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" data-placement="top"
                                                                        title="Add to Wishlist"
                                                                        data-bs-toggle="tooltip"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product9.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product8.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product7.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product4.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Men,</a>
                                                    </div>
                                                    <h3><a href="product-details">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product3.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product2.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$75.00</span>
                                                        <span class="current_price">$70.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product1.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product13.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product3.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="product-details">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product4.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product11.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$55.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product13.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product12.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="onsale" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product4.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$60.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" data-placement="top"
                                                                        title="Add to Wishlist"
                                                                        data-bs-toggle="tooltip"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product7.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$45.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product8.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product9.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product10.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product4.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Men,</a>
                                                    </div>
                                                    <h3><a href="product-details">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$62.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product11.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product12.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product13.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product2.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product3.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product1.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="product-details">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product4.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product10.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product13.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$85.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product11.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product13.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product12.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product6.jpg"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details"><img
                                                            src="<?php echo base_url();?>assets/img/product/product5.jpg"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-placement="top" data-original-title="quick view"> quick
                                                            view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart"
                                                                        title="add to cart">add to cart</a></li>
                                                                <li><a href="compare" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--product section area end-->

    <!--blog section area start-->
    <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Monsta News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_wrapper blog_column3 owl-carousel">
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details"><img src="<?php echo base_url();?>assets/img/blog/blog1.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details">Blog image post</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>

                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details"><img src="<?php echo base_url();?>assets/img/blog/blog2.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details">Post with Gallery</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details"><img src="<?php echo base_url();?>assets/img/blog/blog3.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details">Post with Video</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details"><img src="<?php echo base_url();?>assets/img/blog/blog2.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details">Maecenas ultricies</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section area end-->

    <!--Newsletter area start-->
    <div class="newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter_content">
                        <h2>Our Newsletter</h2>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-newsletter">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Email address..." />
                                <button id="mc-submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Newsletter area start-->

    <!--footer area start-->
    <?php $this->load->view('inc_footer'); ?>
    <!--footer area end-->

    <!-- modal area start-->

    <!-- modal area start-->


    <!-- JS ============================================ -->
    <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>