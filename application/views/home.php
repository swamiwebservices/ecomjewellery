<?php
$domain_id = $this->domain_id;
?>
<?php
//print_r($home);
$popupdata = [];
foreach($config_home as $key => $value){
    $popupdata[$value['key_name']] = $value['value'];
}

$config_section1 =  (isset($popupdata['config_section1'])) ? json_decode($popupdata['config_section1'],true) : array();
//print_r($config_section1);
$box1 =  (isset($config_section1['box1'])) ? $config_section1['box1'] : array();
$box2 =  (isset($config_section1['box2'])) ? $config_section1['box2'] : array();
 

$product_category  = json_decode(file_get_contents('uploads/jsondata/product_category.json'), true);
$carttotal = (int)$this->services->addtocart();


$page_url = $this->uri->segment(1);
$session_user_data = $this->session->userdata('front_user_detail');
//print_r($session_user_data);

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>

    <style>
    .product_black_section .product_content h3 {
        height: 50px;
    }

    .product_container.categorybottom button {
        display: block !important;
        position: absolute;
        top: 105px;
        /* right: 0px; */
        z-index: 99;
        border: 0;
        background: inherit;
        font-size: 23px;
        background: #FEC210;
    }

    .product_container.categorybottom button.next_arrow {
        right: 0px;
    }

    .texttopbar {

        text-align: center;

        line-height: 18px;
    }

    #s1 {
        text-align: right;
        margin-top: -18px;
    }

    #s2 {
        text-align: left;
        margin-top: -18px;
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

        <section class="banner_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title" style="margin-bottom:5px">
                            <h2>Shop By Category</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center bd-highlight mb-3">
                    <?php
           
           //  echo $this->domain_id; exit;
           $product_category  = json_decode(file_get_contents('uploads/jsondata/product_category.json'), true);
           //print_r($product_category);
           foreach($product_category as $key => $menuCategory){
            $main_image = (isset($menuCategory['main_image']) && $menuCategory['main_image']!="" ) ? base_url().'uploads/category/'.$menuCategory['main_image']:'https://via.placeholder.com/150x100';
              
          ?>
                    <div class="col-lg-4 col-md-4 mt-2 ">
                        <div class="single_banner" style="text-align:center;">
                            <div class="banner_thumb">
                                <a href="<?php echo site_url('category/'.$menuCategory['slug_name'])?>"><img
                                        src="<?php echo $main_image?>" alt=""
                                        style="width:400x;height:240px; border-radius:5px"></a>

                            </div>
                            <h2 style="text-align:center;  color: #00535a;font-weight:600">
                                <?php echo $menuCategory['name']?></h2>
                        </div>

                    </div>

                    <?php }?>
                </div>


            </div>
        </section>
        <!--shipping area start-->
        <div class="shipping_area shipping_black ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-shipping">
                            <h3><?php  echo (!empty($box1['text1'])) ? base64_decode($box1['text1']) : ' ';?></h3>
                            <p><?php  echo (!empty($box1['text2'])) ? base64_decode($box1['text2']) : ' ';?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-shipping">
                            <h3><?php  echo (!empty($box2['text1'])) ? base64_decode($box2['text1']) : ' ';?></h3>
                            <p><?php  echo (!empty($box2['text2'])) ? base64_decode($box2['text2']) : ' ';?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--shipping area end-->




        <!--product section area start-->
        <section class="product_section p_section1 product_black_section bottom_two ">
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
                                    <!-- <li>
                                        <a data-bs-toggle="tab" href="#onsale" role="tab" aria-controls="onsale"
                                            aria-selected="false">Onsale</a>
                                    </li> -->

                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="featured" role="tabpanel">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
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
                                            <div class="custom-col-5 ">
                                                <div class="single_product ">

                                                    <div class="product_thumb ">

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
                                                            <!-- <div class="product_ratings">
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
                                                            </div> -->
                                                            <div class="product_desc">
                                                                <p><?php echo $this->common->pdesc($value['description'])?>
                                                                </p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="javascript:void(0);"
                                                                            onclick="mgk_wishlist.add('<?php echo $value['product_id']?>');"
                                                                            data-placement="top" title="Add to Wishlist"
                                                                            data-bs-toggle="tooltip"><span
                                                                                class="icon icon-Heart"></span></a></li>
                                                                    <li class="add_to_cart"><a
                                                                            href="javascript:void(0);"
                                                                            class="btnAddCart"
                                                                            data-product_id='<?php echo $value['product_id']?>'
                                                                            data-qty='1' title="add to cart">add to
                                                                            cart</a></li>
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
                                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/350'.$value['main_image']:base_url().'assets/img/350x350.png';
                                                    
                                                    $quantity = $value['quantity'];
                                                    $mrp = $value['mrp'];
                                                    $sellprice = $value['sellprice'];  

                                                    $stock_status = $value['stock_status'];  
                                                    $stock_status_show = ($quantity<=0) ? $stock_status : ''; 
                                                      
                                                ?>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a class="primary_img"
                                                            href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img
                                                                src="<?php echo $main_image?>" alt=""></a>
                                                        <div class="product-labels">
                                                            <span
                                                                class="product-label product-label-29 product-label-default"><b>New</b></span>
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
                                                            <!-- <div class="product_ratings">
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
                                                            </div> -->
                                                            <div class="product_desc">
                                                                <p><?php echo $this->common->pdesc($value['description'])?>
                                                                </p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="javascript:void(0);"
                                                                            onclick="mgk_wishlist.add('<?php echo $value['product_id']?>');"
                                                                            data-placement="top" title="Add to Wishlist"
                                                                            data-bs-toggle="tooltip"><span
                                                                                class="icon icon-Heart"></span></a></li>
                                                                    <li class="add_to_cart"><a
                                                                            href="javascript:void(0);"
                                                                            class="btnAddCart"
                                                                            data-product_id='<?php echo $value['product_id']?>'
                                                                            data-qty='1' title="add to cart">add to
                                                                            cart</a></li>
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
                                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/350'.$value['main_image']:base_url().'assets/img/350x350.png';
                                                  
                                                    $quantity = $value['quantity'];
                                                    $mrp = $value['mrp'];
                                                    $sellprice = $value['sellprice'];  
                                                      
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
                                                                    <li><a href="javascript:void(0);"
                                                                            onclick="mgk_wishlist.add('<?php echo $value['product_id']?>');"
                                                                            data-placement="top" title="Add to Wishlist"
                                                                            data-bs-toggle="tooltip"><span
                                                                                class="icon icon-Heart"></span></a></li>
                                                                    <li class="add_to_cart"><a
                                                                            href="javascript:void(0);"
                                                                            class="btnAddCart"
                                                                            data-product_id='<?php echo $value['product_id']?>'
                                                                            data-qty='1' title="add to cart">add to
                                                                            cart</a></li>
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



        <?php $this->load->view('inc_whychooseus'); ?>

        <?php $this->load->view('inc_footer'); ?>



        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>
        <script>
        $('.autoplay').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '<button class="prev_arrow"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button class="next_arrow"><i class="fa fa-angle-right"></i></button>',
        });
        </script>

</body>

</html>