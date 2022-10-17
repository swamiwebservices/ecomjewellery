<?php
$domain_id = $this->domain_id;
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>
    .product_black_section .product_content h3 a {
        color: #fec210 !important;
    }

    .home_black_version {

/* background-image: url("<?php echo base_url();?>assets/img/logo/bg_breadcrum.jpg"); */
}

.whitebg {
background: #ffffff;
/* background-image: url("<?php echo base_url();?>assets/img/logo/bg_breadcrum.jpg"); */
}

.dark {
/* background: #05555c; */
/* background-image: url("<?php echo base_url();?>assets/img/logo/bg_breadcrum.jpg"); */
}
    </style>
</head>

<body>
    <!-- Main Wrapper Start -->
    <div class="home_black_version">

        <?php $this->load->view('inc_header_menu'); ?>

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
        <?php
        if(isset($latestProduct)  && sizeof($latestProduct) > 0 ){
        ?>
        <section class="product_section p_section1 product_black_section1 whitebg">
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
                                    <?php
                       
                                 //  echo $this->domain_id; exit;
                                 
                                foreach($latestProduct as $key => $value){
                                    //print_r($price_json);
                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/'.$value['main_image']:base_url().'assets/img/350x350.png';

                                    $price_json = json_decode($value['price_json'],true);
                                  //   print_r($price_json);
                                    $quantity = $price_json['quantity'][$domain_id];
                                    $mrp = $price_json['mrp'][$domain_id];
                                    $sellprice = $price_json['sellprice'][$domain_id];  
                                    
                                ?>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img"
                                                    href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img
                                                        src="<?php echo $main_image?>" alt=""></a>
                                                <a class="secondary_img"
                                                    href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img
                                                        src="<?php echo $main_image?>" alt=""></a>
                                                <div class="quick_button">
                                                    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" data-placement="top"  data-original-title="quick view" data-uuid="<?php echo $value['uuid']; ?>"
                                                        data-pdata="<?php echo json_encode($value); ?>"> quick view</a> -->
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <!--  <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div> -->
                                                <h3><a
                                                        href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><?php echo $value['name']?></a>
                                                </h3>
                                                <div class="price_box">
                                                    <?php
                                                    if($sellprice<$mrp){
                                                    ?>
                                                    <span
                                                        class="old_price"><?php echo $this->services->format($mrp)?></span>
                                                    <span
                                                        class="current_price"><?php echo $this->services->format($sellprice)?></span>
                                                    <?php    
                                                    }else {
                                                    ?>
                                                    <span
                                                        class="current_price"><?php echo $this->services->format($sellprice)?></span>
                                                    <?php    
                                                    }
                                                    ?>


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
                                                        <p><?php echo $this->common->pdesc($value['description'])?></p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" data-placement="top"
                                                                    title="Add to Wishlist"
                                                                    data-bs-toggle="tooltip"><span
                                                                        class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="javascript:void(0);" class="btnAddCrt" data-product_id='<?php echo $value['product_id']?>'   data-qty='1'    title="add to cart">add to cart</a></li>
                                                            <!-- <li><a href="compare.html" title="compare"><i
                                                                        class="ion-ios-settings-strong"></i></a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php }?>
        <!--product section area end-->

        <!--shipping area start-->
        <div class="shipping_area shipping_black whitebg">
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
                            <h3>Free Shipping On Order Over 11120</h3>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--shipping area end-->

        <!--product section area start-->
        <section class="product_section p_section1 product_black_section bottom_two whitebg">
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
                                            <?php
        
                                                foreach($latestProduct as $key => $value){
                                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/'.$value['main_image']:base_url().'assets/img/350x350.png';
                                                    $price_json = json_decode($value['price_json'],true);
                                                    //   print_r($price_json);
                                                      $quantity = $price_json['quantity'][$domain_id];
                                                      $mrp = $price_json['mrp'][$domain_id];
                                                      $sellprice = $price_json['sellprice'][$domain_id];  
                                                      
                                                ?>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a class="primary_img"
                                                            href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img
                                                                src="<?php echo $main_image?>" alt=""></a>
                                                        <a class="secondary_img"
                                                            href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img
                                                                src="<?php echo $main_image?>" alt=""></a>
                                                        <div class="quick_button">
                                                            <!-- <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" data-placement="top"
                                                                data-uuid="<?php echo $value['uuid']; ?>"
                                                                data-pdata="<?php echo json_encode($value); ?>"
                                                                data-original-title="quick view"> quick view</a> -->
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <!--  <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div> -->
                                                        <h3><a
                                                                href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><?php echo $value['name']?></a>
                                                        </h3>
                                                        <div class="price_box">
                                                            <?php
                                                            if($sellprice<$mrp){
                                                            ?>
                                                            <span
                                                                class="old_price"><?php echo $this->services->format($mrp)?></span>
                                                            <span
                                                                class="current_price"><?php echo $this->services->format($sellprice)?></span>
                                                            <?php    
                                                            }else {
                                                            ?>
                                                            <span
                                                                class="current_price"><?php echo $this->services->format($sellprice)?></span>
                                                            <?php    
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p><?php echo $this->common->pdesc($value['description'])?>
                                                                </p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="wishlist.html" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-bs-toggle="tooltip"><span
                                                                                class="icon icon-Heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="javascript:void(0);" class="btnAddCrt" data-product_id='<?php echo $value['product_id']?>'   data-qty='1'   title="add to cart">add to cart</a></li>
                                                                    <!-- <li><a href="compare.html" title="compare"><i
                                                                                class="ion-ios-settings-strong"></i></a> -->
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>



                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="arrivals" role="tabpanel">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
                                            <?php
        
                                                foreach($latestProduct as $key => $value){
                                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/'.$value['main_image']:base_url().'assets/img/350x350.png';
                                                    $price_json = json_decode($value['price_json'],true);
                                                    //   print_r($price_json);
                                                      $quantity = $price_json['quantity'][$domain_id];
                                                      $mrp = $price_json['mrp'][$domain_id];
                                                      $sellprice = $price_json['sellprice'][$domain_id];  
                                                      
                                                ?>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a class="primary_img"
                                                            href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img
                                                                src="<?php echo $main_image?>" alt=""></a>
                                                        <a class="secondary_img"
                                                            href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img
                                                                src="<?php echo $main_image?>" alt=""></a>
                                                        <div class="quick_button">
                                                            <!-- <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" data-placement="top"
                                                                data-uuid="<?php echo $value['uuid']; ?>"
                                                                data-pdata="<?php echo json_encode($value); ?>"
                                                                data-original-title="quick view"> quick view</a> -->
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <!--  <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div> -->
                                                        <h3><a
                                                                href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><?php echo $value['name']?></a>
                                                        </h3>
                                                        <div class="price_box">
                                                            <?php
                                                        if($sellprice<$mrp){
                                                        ?>
                                                            <span
                                                                class="old_price"><?php echo $this->services->format($mrp)?></span>
                                                            <span
                                                                class="current_price"><?php echo $this->services->format($sellprice)?></span>
                                                            <?php    
                                                        }else {
                                                        ?>
                                                            <span
                                                                class="current_price"><?php echo $this->services->format($sellprice)?></span>
                                                            <?php    
                                                        }
                                                        ?>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p><?php echo $this->common->pdesc($value['description'])?>
                                                                </p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="wishlist.html" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-bs-toggle="tooltip"><span
                                                                                class="icon icon-Heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="javascript:void(0);" class="btnAddCrt" data-product_id='<?php echo $value['product_id']?>'   data-qty='1'   title="add to cart">add to cart</a></li>
                                                                    <!-- <li><a href="compare.html" title="compare"><i
                                                                                class="ion-ios-settings-strong"></i></a> -->
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>



                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="onsale" role="tabpanel">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
                                            <?php
        
                                                foreach($latestProduct as $key => $value){
                                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/'.$value['main_image']:base_url().'assets/img/350x350.png';
                                                    $price_json = json_decode($value['price_json'],true);
                                                    //   print_r($price_json);
                                                      $quantity = $price_json['quantity'][$domain_id];
                                                      $mrp = $price_json['mrp'][$domain_id];
                                                      $sellprice = $price_json['sellprice'][$domain_id];  
                                                      
                                                ?>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a class="primary_img"
                                                            href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img
                                                                src="<?php echo $main_image?>" alt=""></a>
                                                        <a class="secondary_img"
                                                            href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img
                                                                src="<?php echo $main_image?>" alt=""></a>
                                                        <div class="quick_button">
                                                            <!-- <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" data-placement="top"
                                                                data-uuid="<?php echo $value['uuid']; ?>"
                                                                data-pdata="<?php echo json_encode($value); ?>"
                                                                data-original-title="quick view"> quick view</a> -->
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <!--  <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div> -->
                                                        <h3><a
                                                                href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><?php echo $value['name']?></a>
                                                        </h3>
                                                        <div class="price_box">
                                                            <?php
                                                        if($sellprice<$mrp){
                                                        ?>
                                                            <span
                                                                class="old_price"><?php echo $this->services->format($mrp)?></span>
                                                            <span
                                                                class="current_price"><?php echo $this->services->format($sellprice)?></span>
                                                            <?php    
                                                        }else {
                                                        ?>
                                                            <span
                                                                class="current_price"><?php echo $this->services->format($sellprice)?></span>
                                                            <?php    
                                                        }
                                                        ?>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p><?php echo $this->common->pdesc($value['description'])?>
                                                                </p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="wishlist.html" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-bs-toggle="tooltip"><span
                                                                                class="icon icon-Heart"></span></a></li>
                                                                    <li class="add_to_cart"><a  href="javascript:void(0);" class="btnAddCrt" data-product_id='<?php echo $value['product_id']?>' data-qty='1'    title="add to cart">add to cart</a></li>
                                                                    <!-- <li><a href="compare.html" title="compare"><i
                                                                                class="ion-ios-settings-strong"></i></a> -->
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>



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
        <section class="blog_section blog_black1 whitebg">
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
                                    <a href="blog-details.html"><img
                                            src="<?php echo base_url();?>assets/img/blog/blog4.jpg" alt=""></a>
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
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                            Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
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
                                    <a href="blog-details.html"><img
                                            src="<?php echo base_url();?>assets/img/blog/blog2.jpg" alt=""></a>
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
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                            Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
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
                                    <a href="blog-details.html"><img
                                            src="<?php echo base_url();?>assets/img/blog/blog5.jpg" alt=""></a>
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
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                            Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
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
                                    <a href="blog-details.html"><img
                                            src="<?php echo base_url();?>assets/img/blog/blog3.jpg" alt=""></a>
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
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                            Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
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
        <div class="instagram_area whitebg">
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
                                <form id="mc-form" class="mc-form footer-newsletter">
                                    <input id="mc-email" type="email" autocomplete="off"
                                        placeholder="Email address..." />
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

        <?php $this->load->view('inc_footer'); ?>
        <!--footer area end-->



        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>