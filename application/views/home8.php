<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <style>
    .home_black_version {
       
        background: #417060;
         
    }
    .header_black .sticky-header.sticky {
    background: #fff;
    box-shadow: 0 1px 3px rgb(0 0 0 / 11%);
    padding:7px;
}
.product_black_section.bottom_two {
    background: #ffffff;
    
}


.product_black_section .section_title h2 {
    color: #ffffff;
    
    background: none;
    font-weight:700;
}
.header_black .main_menu nav > ul > li.active > a {
    color: #ffffff;
}
.product_black_section .product_container.bottom button {
    color: #a8741a;
    background: none;
    top: -66px;
}

.product_black_section .section_title::before {
    background: none;
}

.product_black_section .product_content h3 a:hover {
    color: #a8741a;
}
.product_black_section .product_tab_button ul.nav li a.active {
    color: #a8741a;
}

.product_black_section .product_tab_button ul.nav li a {
    
    color: #074a2b;
   
}

.header_black .main_menu nav > ul > li > a {
    font-family:  'Prata', serif;
    font-weight: 600;
    text-transform: capitalize;
    font-size: 18px;
}
.product_black_section .product_content h3 a {
    color: #ffffff;
}

.blog_black .section_title h2 {
    color: #a8741a;
   
    background: none;
    font-weight: 700;
}

.blog_black .blog_wrapper .owl-nav {
    background: none;
    color: #a8741a;
}
.blog_black .blog_wrapper .owl-nav div {
    color: #cfc10b;
}
.blog_black .section_title::before {
    background: none;
}

.shipping_black .single-shipping {
    background: #cdac28;
}
.shipping_black .single-shipping h3 {
    color: #074a2b;
    font-family: "Prata", serif;
    font-weight: 400;
}
.shipping_black .single-shipping p {
    color: #ffffff;
}

.price_box > span.old_price {
    
    color: #070101;
       
}

.product_black_section .price_box span.current_price {
    color: #eed309;
}
    </style>
</head>

<body>
    <div class="home_black_version">
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
        <header class="header_area header_black black_two">

            <!--header middel start-->
            <div class="header_middel">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3 col-4">
                            <div class="logo">
                                <a href="index"><img src="<?php echo base_url();?>assets/img/logo/logo-w.png"
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
                                                <a href="#"><img src="<?php echo base_url();?>assets/img/s-product/product.jpg" alt=""></a>
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
                                                <a href="#"><img src="<?php echo base_url();?>assets/img/s-product/product2.jpg" alt=""></a>
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
                                    <a href="home"><img src="<?php echo base_url();?>assets/img/logo/logo.png" style="height:70px;width:auto"  alt="logo"></a>
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
 

        <!--product section area start-->
        <section class="product_section p_section1 product_black_section">
            <div class="container">
                <div class="row">  
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Latest Products</h2>
                        </div> 
                    </div> 
                    <div class="col-12">
                        <div class="product_area"> 
                            <div class="product_container bottom">
                                <div class="custom-row product_row1">
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jp" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-bs-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image3.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image3.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="product-details.html">Dummy animal</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image5.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image5.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="product-details.html">Furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Men,</a>
                                                </div>
                                                <h3><a href="product-details.html">Letraset animal</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$75.00</span>
                                                    <span class="current_price">$70.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                </div>
                                                <h3><a href="product-details.html">Furniture</a></h3>
                                               <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image3.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image3.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="product-details.html">Letraset animal</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$70.00</span>
                                                    <span class="current_price">$65.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image5.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image5.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">men</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image6.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image6.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">men</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="product-details.html">Natural Contrary</a></h3>
                                                <div class="price_box">
                                                    <span class="current_price">$55.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <h3><a href="product-details.html">Donec eu furniture</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$89.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jpg" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <h3><a href="product-details.html">Duis pulvinar</a></h3>
                                               <div class="price_box">
                                                    <span class="old_price">$70.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                            <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
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
        <div class="shipping_area shipping_black">
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
        <section class="product_section p_section1 product_black_section bottom_two">
            <div class="container">
                <div class="row">   
                    <div class="col-12">
                        <div class="product_area"> 
                            <div class="product_tab_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-bs-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">Featured</a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#arrivals" role="tab" aria-controls="arrivals" aria-selected="false">New Arrivals</a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#onsale" role="tab" aria-controls="onsale" aria-selected="false">Onsale</a>
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
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage1.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage1.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$86.00</span>
                                                                <span class="current_price">$60.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-bs-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage2.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage2.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Dummy animal</a></h3>
                                                             <div class="price_box">
                                                                <span class="current_price">$65.00</span>
                                                            </div>
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
                                                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage3.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage3.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Women</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$65.00</span>
                                                                <span class="current_price">$60.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage4.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage4.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Men,</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Letraset animal</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$60.00</span>
                                                                <span class="current_price">$55.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage6.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage6.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Women</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$80.00</span>
                                                                <span class="current_price">$60.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage1.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage1.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>
                                                             <div class="price_box">
                                                                <span class="current_price">$50.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage2.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage2.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="current_price">$62.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage3.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage3.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Letraset animal</a></h3>
                                                             <div class="price_box">
                                                                <span class="old_price">$70.00</span>
                                                                <span class="current_price">$65.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage4.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage4.jp" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">men</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$80.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage6.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage6.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">men</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Natural Contrary</a></h3>
                                                             <div class="price_box">
                                                                <span class="current_price">$60.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage1.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage1.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Donec eu furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$86.00</span>
                                                                <span class="current_price">$60.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Women</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Duis pulvinar</a></h3>
                                                             <div class="price_box">
                                                                <span class="old_price">$86.00</span>
                                                                <span class="current_price">$60.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
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
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jp" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$89.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-bs-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image3.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image3.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Dummy animal</a></h3>
                                                            <div class="price_box">
                                                                <span class="current_price">$65.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image5.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image5.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Women</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="current_price">$65.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image5.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product33.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Men,</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Letraset animal</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$89.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage1.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage1.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Women</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$75.00</span>
                                                                <span class="current_price">$70.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage2.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage2.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$89.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Furniture</a></h3>
                                                           <div class="price_box">
                                                                <span class="current_price">$65.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage1.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/simage1.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Letraset animal</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$70.00</span>
                                                                <span class="current_price">$65.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product24.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product23.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">men</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$89.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product25.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product26.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">men</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Natural Contrary</a></h3>
                                                            <div class="price_box">
                                                                <span class="current_price">$55.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product27.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Donec eu furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$89.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product29.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product30.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Women</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Duis pulvinar</a></h3>
                                                           <div class="price_box">
                                                                <span class="old_price">$70.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
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
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product30.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product31.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$60.00</span>
                                                                <span class="current_price">$65.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-bs-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product32.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product33.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Dummy animal</a></h3>
                                                            <div class="price_box">
                                                                <span class="current_price">$45.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image5.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image5.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Women</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$89.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image3.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image3.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Men,</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Letraset animal</a></h3>
                                                            <div class="price_box">
                                                                <span class="current_price">$62.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jp" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image2.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Women</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$80.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product30.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product29.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>
                                                            <div class="price_box">
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image1.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product27.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$89.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product26.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product25.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Letraset animal</a></h3>
                                                           <div class="price_box">
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product24.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product23.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">men</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$85.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image5.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image3.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">men</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Natural Contrary</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$89.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/image3.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product27.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Clothing,</a>
                                                                <a href="#">Potato chips</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Donec eu furniture</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$70.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product31.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="<?php echo base_url();?>assets/img/product/product32.jpg" alt=""></a>
                                                            <div class="quick_button">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Women</a>
                                                            </div>
                                                            <h3><a href="product-details.html">Duis pulvinar</a></h3>
                                                            <div class="price_box">
                                                                <span class="old_price">$89.00</span>
                                                                <span class="current_price">$75.00</span>
                                                            </div>
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
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
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
        <section class="blog_section blog_black">
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
                                    <a href="blog-details.html"><img src="<?php echo base_url();?>assets/img/blog/blog4.jpg" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="blog-details.html">Blog image post</a></h3>
                                    <div class="author_name">
                                       <p> 
                                            <span>by</span>
                                            <span class="themes">admin</span>
                                            / 30 Oct 2018
                                       </p>

                                    </div>

                                    <div class="post_desc">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="blog-details.html">Continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="<?php echo base_url();?>assets/img/blog/blog2.jpg" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                    <div class="author_name">
                                       <p> 
                                            <span>by</span>
                                            <span class="themes">admin</span>
                                            / 30 Oct 2018
                                       </p>

                                    </div>
                                    <div class="post_desc">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="blog-details.html">Continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="<?php echo base_url();?>assets/img/blog/blog5.jpg" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="blog-details.html">Post with Video</a></h3>
                                    <div class="author_name">
                                       <p> 
                                            <span>by</span>
                                            <span class="themes">admin</span>
                                            / 30 Oct 2018
                                       </p>

                                    </div>
                                    <div class="post_desc">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="blog-details.html">Continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="<?php echo base_url();?>assets/img/blog/blog3.jpg" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="blog-details.html">Maecenas ultricies</a></h3>
                                    <div class="author_name">
                                       <p> 
                                            <span>by</span>
                                            <span class="themes">admin</span>
                                            / 30 Oct 2018
                                       </p>

                                    </div>
                                    <div class="post_desc">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="blog-details.html">Continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--blog section area end-->
         
        <!--indtagram area start-->
        <div class="instagram_area">
             <div class="container">
                 <div class="row">
                    <div class="col-12">
                        <div class="instagram_wrapper_new">
                            <div id="instagramFeed"></div>
                            <div class="instagram_btn">
                                <a href="#"><i class="fa fa-instagram"></i> Follow on Instagram</a>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
         </div>
        <!--indtagram area end-->

         <!--Newsletter area start-->
        <div class="newsletter_area newsletter_black">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="newsletter_content">
                            <h2>Subscribe for Newsletter</h2>
                            <p>Get E-mail updates about our latest shop and special offers.</p>
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter" >
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
        <footer class="footer_widgets footer_black">
            <div class="container">  
                <div class="footer_top">
                    <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="widgets_container contact_us">
                                    <h3>About Monsta</h3>
                                    <div class="footer_contact">
                                        <p>Address: Your address goes here.</p>
                                        <p>Phone: <a href="tel:0123456789">0123456789</a></p>
                                        <p>Email: demo@example.com</p>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>

                                            <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-4 col-6">
                                <div class="widgets_container widget_menu">
                                    <h3>Information</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="#">Sample Page</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-5 col-6">
                                <div class="widgets_container widget_menu">
                                    <h3>My Account</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="faq.html">Frequently Questions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-7">
                                <div class="widgets_container product_widget">
                                    <h3>Top Rated Products</h3>
                                    <div class="simple_product">
                                        <div class="simple_product_items">
                                            <div class="simple_product_thumb">
                                                <a href="#"><img src="<?php echo base_url();?>assets/img/s-product/product3.jpg" alt=""></a>
                                            </div>
                                            <div class="simple_product_content">
                                                 <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div>
                                                <div class="product_name">
                                                    <h3><a href="#">Donec eu animal</a></h3>
                                                </div>
                                                <div class="product_price">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simple_product_items">
                                            <div class="simple_product_thumb">
                                                <a href="#"><img src="<?php echo base_url();?>assets/img/s-product/product4.jpg" alt=""></a>
                                            </div>
                                            <div class="simple_product_content">
                                                 <div class="tag_cate">
                                                    <a href="#">Women</a>
                                                </div>
                                                <div class="product_name">
                                                    <h3><a href="#">Dummy animal</a></h3>
                                                </div>
                                                <div class="product_price">
                                                    <span class="old_price">$74.00</span>
                                                    <span class="current_price">$69.00</span>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                 
                <div class="footer_bottom">
                   <div class="row">
                        <div class="col-12">
                            <div class="copyright_area">
                                 
                                <img src="<?php echo base_url();?>assets/img/icon/papyel2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
        </footer>
        <!--footer area end-->
   


        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>