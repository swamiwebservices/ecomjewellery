<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>

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
        background: #05555c;
        /* background-image: url("<?php echo base_url();?>assets/img/logo/bg_breadcrum.jpg"); */
    }
    .whitebg {
        background: #ffffff;
        /* background-image: url("<?php echo base_url();?>assets/img/logo/bg_breadcrum.jpg"); */
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
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--shop  area start-->
    <div class="shop_area shop_reverse whitebg">
        <div class="container">
            <div class="row">
                    <div class="col-lg-3 col-md-12">
                       <!--sidebar widget start-->
                        <div class="sidebar_widget">
                          <!--    
                            <div class="widget_list widget_filter">
                                <h2>Filter by keyword</h2>
                                
                                    
                                    <input type="text" class="form-form-control border-11" name="text" id="keyword" />   
                                    <button class="submitbutton" type="submit">Search</button>
                                
                            </div>
                             -->
 
                            <?php
        if(isset($latestProduct)  && sizeof($latestProduct) > 0 ){
        ?>
                            <div class="widget_list Featured_p">
                                <h2>Featured Products</h2>
                                <?php
        
                            foreach($latestProduct as $key => $value){
                                $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/'.$value['main_image']:base_url().'assets/img/350x350.png';
                            ?>
                                <div class="Featured_item bottom1">
                                   <div class="Featured_img">
                                       <a href="<?php echo site_url('product-details/'.$value['slug_name']);?>"><img src="<?php echo $main_image?>" alt=""></a>
                                   </div>
                                    <div class="Featured_info">
                                        <h3><a href="#"><?php echo $value['name']?></a></h3>   
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$65.00</span>
                                            <span class="current_price">$60.00</span>
                                        </div>               
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <?php }?>
                        </div>
                        <!--sidebar widget end-->
                    </div>
                    <div class="col-lg-9 col-md-12">

                    <?php
                    if(isset($categoryProduct)  && sizeof($categoryProduct) > 0 ){
                    ?>
                        <!--shop wrapper start-->
                        <!--shop toolbar start-->
                        <div class="shop_toolbar">
                            <div class="list_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-bs-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="ion-grid"></i></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="ion-ios-list-outline"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="orderby_wrapper">
                                <h3>Sort By : </h3>
                                <div class=" niceselect_option">

                                    <form class="select_option" action="#">

                                        <select name="orderby" id="short">
                                            <option selected value="1">Sort by popularity</option>
                                            <option  value="2">Sort by popularity</option>
                                            <option value="3">Sort by newness</option>
                                            <option value="4">Sort by price: low to high</option>
                                            <option value="5">Sort by price: high to low</option>
                                            <option value="6">Product Name: Z</option>
                                        </select>
                                    </form>


                                </div>
                                <div class="page_amount">
                                    <p>Showing 1–9 of 21 results</p>
                                </div>
                            </div>
                        </div>
                        <!--shop toolbar end-->

                        <!--shop tab product start-->
                         <div class="tab-content">
                            <div class="tab-pane grid_view fade show active" id="large" role="tabpanel">
                                <div class="row">
                                <?php
                                foreach($categoryProduct as $key => $value){
                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/'.$value['main_image']:base_url().'assets/img/350x350.png';
                                ?>
                                   <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                             
                                                <a class="primary_img" href="<?php echo site_url('product-details/'.$value['slug_name']);?>"><img src="<?php echo $main_image?>" alt=""></a>
                                                <a class="secondary_img" href="<?php echo site_url('product-details/'.$value['slug_name']);?>"><img src="<?php echo $main_image?>" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                        data-placement="top" data-uuid="<?php echo $value['uuid']; ?>"
                                                        data-pdata="<?php echo json_encode($value); ?>" data-original-title="quick view"> quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <!-- <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div> -->
                                                <h3><a href="<?php echo site_url('product-details/'.$value['slug_name']);?>"><?php echo $value['name']?></a></h3>
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
                                                        <p><?php echo $this->common->pdesc($value['description'])?></p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-bs-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                           <!--  <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="tab-pane list_view fade" id="list" role="tabpanel">
                            <?php
                                foreach($categoryProduct as $key => $value){
                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/'.$value['main_image']:base_url().'assets/img/350x350.png';
                                ?>
                                <div class="single_product product_list_item">
                                   <div class="row">
                                       <div class="col-lg-4 col-md-5">
                                           <div class="product_thumb">
                                                <a class="primary_img" href="<?php echo site_url('product-details/'.$value['slug_name']);?>"><img src="<?php echo $main_image?>" alt=""></a>
                                                <a class="secondary_img" href="<?php echo site_url('product-details/'.$value['slug_name']);?>"><img src="<?php echo $main_image?>" alt=""></a>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  data-original-title="quick view" data-uuid="<?php echo $value['uuid']; ?>"
                                                        data-pdata="<?php echo json_encode($value); ?>"> quick view</a>
                                                </div>
                                            </div>
                                       </div>
                                       <div class="col-lg-8 col-md-7">
                                            <div class="product_content">               
                                              <h3><a href="<?php echo site_url('product-details/'.$value['slug_name']);?>"><?php echo $value['name']?></a></h3>
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
                                                    <p><?php echo $this->common->pdesc($value['description'])?> </p>
                                                </div>
                                               <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        
                                                        <!-- <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                       </div>
                                   </div>
                                </div>
                               <?php }?>
                            </div>

                        </div>
                        <!--shop tab product end-->
                        <!--shop toolbar start-->
                        <div class="shop_toolbar t_bottom">
                            <div class="pagination">
                                <ul>
                                    <li class="current">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#">next</a></li>
                                    <li><a href="#">>></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--shop toolbar end-->
                        <!--shop wrapper end-->
                        <?php }?>
                    </div>
                </div>    
        </div>
    </div>
    <!--shop  area end-->
    
        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>