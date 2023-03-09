<?php
$domain_id = $this->domain_id;
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>
        .product_info_button ul {
            justify-content: start!important;
        }
    .submitbutton {
        background: #c09578;
        border: 0;
        color: #ffffff;
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        height: 34px;
        line-height: 21px;
        padding: 5px 20px;
        text-transform: uppercase;
        cursor: pointer;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        margin-left: 20px;
        border-radius: 20px;
    }

    .home_black_version {

        /* background-image: url("<?php echo base_url();?>assets/img/logo/bg_breadcrum.jpg"); */
    }

    .whitebg {
        background: #ffffff;
        /* background-image: url("<?php echo base_url();?>assets/img/logo/bg_breadcrum.jpg"); */
    }

    .dark {
        background: #05555c;
        /* background-image: url("<?php echo base_url();?>assets/img/logo/bg_breadcrum.jpg"); */
    }

    .breadcrum li,
    .breadcrum li a {
        text-transform: uppercase !important;
    }

    .single-zoom-thumb {
    margin-top: 0px !important;
    }
    .product-detail-tab{
        position: relative;
    }
    </style>
</head>

<body>
    <div class="home_black_version">

        <?php $this->load->view('inc_header_menu'); ?>


        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area whitebg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul class="breadcrum">
                                <li><a href="index.html">home</a></li>
                                <li>></li>
                                <?php
                            foreach($productdetail['product_category'] as $key => $value) {
                            ?>
                                <li><a href="<?php echo site_url('category/'.$key)?>"><?php echo $value?></a></li>
                                <li>></li>
                                <?php }?>
                                <li><?php echo $this->uri->segment('2')?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->


        <?php
                                

                                    $quantity = $productdetail['quantity'];
                                    $mrp = $productdetail['mrp'];
                                    $sellprice = $productdetail['sellprice'];  

                                    $stock_status = $productdetail['stock_status'];  
                                    $stock_status_show = ($quantity<=0) ? $stock_status : '';  
                                    $random = rand(0,100);
                                    $stock_status_new = "";
                                    if ($random % 2 == 0) {
                                    $stock_status_new = "new";  
                                    }
                                ?>
        <!--product details start-->
        <div class="product_details whitebg">
            <div class="container">
                <div class="row">
                 
                <div class="col-lg-6 col-md-6 text-center">
                    <?php 
                       //print_r($productdetail);
                    ?>
                   <div class="product-detail-tab p-4"  id="img-1">

                        <div class="zoomWrapper single-zoom ">
                            <a href="javascript:void(0);">
                                <img id="zoom1" src="<?php echo base_url()?>uploads/prod_images/<?php echo $productdetail['main_image']?>" data-zoom-image="<?php echo base_url()?>uploads/prod_images/<?php echo $productdetail['main_image']?>" alt="big-1">
                            </a>
                                
                        </div>

                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                   
                                    <?php
                                    if(isset($productdetail['other_images'])){
                                     ?>
                                      <li>
                                        <a href="javascript:void(0);" class="elevatezoom-gallery active" data-update="" data-image="<?php echo base_url()?>uploads/prod_images/<?php echo $productdetail['main_image']?>"  data-zoom-image="<?php echo base_url()?>uploads/prod_images/<?php echo $productdetail['main_image']?>">
                                            <img src="<?php echo base_url()?>uploads/prod_images/<?php echo $productdetail['main_image']?>"   alt="<?php echo $productdetail['main_image']?>" />
                                        </a>

                                    </li>
                                     <?php
                                    
                                    foreach($productdetail['other_images'] as $key => $valueImage){
                                    ?>
                                    <li>
                                        <a href="javascript:void(0);" class="elevatezoom-gallery active" data-update=""
                                            data-image="<?php echo base_url()?>uploads/prod_images/<?php echo $valueImage['image_name']?>"
                                            data-zoom-image="<?php echo base_url()?>uploads/prod_images/<?php echo $valueImage['image_name']?>">
                                            <img src="<?php echo base_url()?>uploads/prod_images/<?php echo $valueImage['image_name']?>"
                                                alt="<?php echo $valueImage['image_name']?>" />
                                        </a>

                                    </li>
                                    <?php
                                    }
                                }?>
                            </ul>
                        </div>
                        <div class="product-labels">
                        <?php
                          if($stock_status_show!=""){
                            ?>
                            <span
                                class="product-label product-label-30 product-label-diagonal"><b>Out
                                    Of Stock</b></span>
                            <?php }?>
                        
                        
                        </div> 
                        
                    </div>
                    
                </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product_d_right">
                            <form action="#">

                                <h1><?php echo $productdetail['name']?></h1>
                                <!-- <div class="product_nav">
                                <ul>
                                    <li class="prev"><a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="next"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div> -->
                                <!-- <div class=" product_ratting">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
                                        <li><a href="javascript:void(0);"> (customer review ) </a></li>
                                    </ul>
                                </div> -->
                                <div class="product_d_meta">
                                    <span>Model: <?php echo $productdetail['item_code']?></span>
                                    <span>Availability: <?php echo ($quantity>0) ? 'In Stock' : $stock_status_show ?></span>

                                </div>
                                <div class="product_price">

                                    <?php
                                        if($sellprice<$mrp){
                                        ?>
                                    <span class="old_price"><?php echo $this->services->format($mrp)?></span>
                                    <span class="current_price"><?php echo $this->services->format($sellprice)?></span>
                                    <?php    
                                        }else {
                                        ?>
                                    <span class="current_price"><?php echo $this->services->format($sellprice)?></span>
                                    <?php    
                                        }
                                        ?>
                                </div>
                                <!-- <div class="product_desc">
                                    <p><?php //echo $productdetail['description']?> </p>
                                </div> -->

                                <div class="product_variant quantity">
                                    <label>quantity</label>
                                    <input name="quantity" min="1" max="<?php echo $quantity?>" value="1" type="number">
                                    <button class="button btnAddCart" type="button"    data-product_id='<?php echo $productdetail['product_id']?>'   data-qty='1' >add to cart</button>

                                </div>
                                <div class=" product_d_action">
                                    <ul>
                                        <!-- <li><a href="javascript:void(0);" title="Add to wishlist">+ Add to Wishlist</a></li> -->
                                        <!-- <li><a href="javascript:void(0);" title="Add to wishlist">+ Compare</a></li> -->
                                    </ul>
                                </div>

                                <div class="product_meta">
                                    <span>Category: <?php
                            foreach($productdetail['product_category'] as $key => $value) {
                            ?><a href="<?php echo site_url('category/'.$key)?>"
                                            class="text-capitalize"><?php echo $value?></a><?php }?></span>
                                </div>

                            </form>
                            <!-- <div class="priduct_social">
                                <ul>
                                    <li><a href="javascript:void(0);" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="javascript:void(0);" title="google +"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:void(0);" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div> -->

                        </div>

                        <!--product info start-->
        <?php
        
        $specification = json_decode($productdetail['specification'],true);
        ?>
        <div class="product_d_info whitebg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_d_inner">
                            <div class="product_info_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-bs-toggle="tab" href="#info" role="tab"
                                            aria-controls="info" aria-selected="false">Description</a>
                                    </li>
                                    <?php
                                    if(sizeof($specification) > 0){
                                    ?>
                                    <li>
                                        <a data-bs-toggle="tab" href="#specification" role="tab" aria-controls="specification"
                                            aria-selected="false">Specification</a>
                                    </li>
                                    <?php }?>
                                    <!-- <li>
                                        <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                            aria-selected="false">Reviews (1)</a>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="info" role="tabpanel">
                                    <div class="product_info_content">
                                        <p><?php echo $productdetail['description']?></p>
                                       
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="specification" role="tabpanel">
                                    <div class="product_info_content">
                                    <div class="product_d_table">
                                        <table>
                                            <tbody>
                                        <?php
                                       
                                       // print_r($specification);
                                        foreach($specification['title'] as $key => $value) {
                                            if($value!=""){

                                            
                                        ?>
                                         
                                                <tr>
                                                    <td class="first_child"><?php echo $value?></td>
                                                    <td><?php echo $specification['value'][$key]?></td>
                                                </tr>
                                                
                                           
                                        <?php
                                            }    
                                        }
                                        ?>
                                         </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                              
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product info end-->
                    </div>
                </div>
            </div>
        </div>
        <!--product details end-->

        

        <!--product section area start-->
        <section class="product_section  p_section1 product_black_section whitebg">
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
                                <?php
        
        foreach($latestProduct as $key => $value){
            $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/350'.$value['main_image']:base_url().'assets/img/350x350.png';
           
            $quantity = $value['quantity'];
            $mrp = $value['mrp'];
            $sellprice = $value['sellprice'];  
            
            $stock_status = $value['stock_status'];  
            $stock_status_show = ($quantity<=0) ? $stock_status : '';  
            $random = rand(0,100);
            $stock_status_new = "";
            if ($random % 2 == 0) {
              $stock_status_new = "new";  
            }
        ?>
    <div class="custom-col-5">
        <div class="single_product">
            <div class="product_thumb">
                <a class="primary_img"
                    href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img
                        src="<?php echo $main_image?>" alt=""></a>
                        <div class="product-labels">
                                                        <?php
                                                            if($stock_status_new!=""){
                                                            ?>
                                                            <span
                                                                class="product-label product-label-29 product-label-default"><b>New</b></span>
                                                                <?php }?>
                                                            <?php
                                                            if($stock_status_show!=""){
                                                            ?>
                                                            <span
                                                                class="product-label product-label-30 product-label-diagonal"><b>Out
                                                                    Of Stock</b></span>
                                                            <?php }?>
                                                        </div>
                
            </div>
            <div class="product_content">
                <!--  <div class="tag_cate">
            <a href="javascript:void(0);">Clothing,</a>
            <a href="javascript:void(0);">Potato chips</a>
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
                    <!-- <div class="product_ratings">
                        <ul>
                            <li><a href="javascript:void(0);"><i
                                        class="ion-ios-star-outline"></i></a>
                            </li>
                            <li><a href="javascript:void(0);"><i
                                        class="ion-ios-star-outline"></i></a>
                            </li>
                            <li><a href="javascript:void(0);"><i
                                        class="ion-ios-star-outline"></i></a>
                            </li>
                            <li><a href="javascript:void(0);"><i
                                        class="ion-ios-star-outline"></i></a>
                            </li>
                            <li><a href="javascript:void(0);"><i
                                        class="ion-ios-star-outline"></i></a>
                            </li>
                        </ul>
                    </div> -->
                    <div class="product_desc">
                        <p><?php echo $this->common->pdesc($value['description'])?>
                        </p>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li><a href="javascript:void(0);"  onclick="mgk_wishlist.add('<?php echo $value['product_id']?>');" data-placement="top"
                                    title="Add to Wishlist"
                                    data-bs-toggle="tooltip"><span
                                        class="icon icon-Heart"></span></a></li>
                            <li class="add_to_cart"><a href="javascript:void(0);" class="btnAddCart" data-product_id='<?php echo $value['product_id']?>'   data-qty='1' 
                                    title="add to cart">add to cart</a></li>
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
        </section>
        <!--product section area end-->

        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>