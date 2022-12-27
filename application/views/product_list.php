<?php
$domain_id = $this->domain_id;
?>
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
    .product_black_section .product_hover {
  background: #242424;
  left: -17px;
  width: 113%!important;
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
                            <li><a href="<?php echo site_url('home')?>">home</a></li>
                            <li>></li>
                            <li><?php echo $this->uri->segment('2')?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--shop  area start-->
    <div class="shop_area shop_reverse product_black_section  whitebg">
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
                                $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/350'.$value['main_image']:base_url().'assets/img/350x350.png';
                                $price_json = json_decode($value['price_json'],true);
                                //   print_r($price_json);
                                  $quantity = $price_json['quantity'][$domain_id];
                                  $mrp = $price_json['mrp'][$domain_id];
                                  $sellprice = $price_json['sellprice'][$domain_id];  
                                  
                            ?>
                                <div class="Featured_item bottom1">
                                   <div class="Featured_img">
                                       <a href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img src="<?php echo $main_image?>" alt=""></a>
                                   </div>
                                    <div class="Featured_info">
                                        <h3><a href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><?php echo $value['name']?></a></h3>   
                                        <!-- <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div> -->
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

                                     <?php
                                     $sort = (!empty($sort)) ? $sort : '';
                                     ?>
                                        <select name="orderby"  id="orderby" class="form-select"  onchange="document.location.href=this.value">
                                        <option value="<?php echo site_url($fun_name)?>"  <?php if($sort==""){ echo " selected";}?>>Default</option>
                                        <option value="<?php echo site_url($fun_name)?>&amp;sort=name&amp;order=ASC"  <?php if($sort=="name"  && $order=="ASC"){ echo " selected";}?>>Name (A - Z)</option>
                                        <option value="<?php echo site_url($fun_name)?>&amp;sort=name&amp;order=DESC"  <?php if($sort=="name" && $order=="DESC"){ echo " selected";}?>>Name (Z - A)</option>
                                        <option value="<?php echo site_url($fun_name)?>&amp;sort=price&amp;order=ASC"  <?php if($sort=="price" && $order=="ASC"){ echo " selected";}?>>Price (Low &gt; High)</option>
                                        <option value="<?php echo site_url($fun_name)?>&amp;sort=price&amp;order=DESC"  <?php if($sort=="price" && $order=="DESC"){ echo " selected";}?>>Price (High &gt; Low)</option>
                                        <!-- <option value="<?php echo site_url($fun_name)?>&amp;sort=rating&amp;order=DESC">Rating (Highest)</option>
                                        <option value="<?php echo site_url($fun_name)?>&amp;sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                         -->
                                        </select>
                                    

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
                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/350'.$value['main_image']:base_url().'assets/img/350x350.png';
                                     //   print_r($price_json);
                                     $price_json = json_decode($value['price_json'],true);
                                      //  print_r($price_json);
                                       $quantity = $price_json['quantity'][$domain_id];
                                       $mrp = $price_json['mrp'][$domain_id];
                                       $sellprice = $price_json['sellprice'][$domain_id];  
                                       
                                     
                                ?>
                                  <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                             
                                                <a class="primary_img" href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img src="<?php echo $main_image?>" alt=""></a>
                                                <a class="secondary_img" href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img src="<?php echo $main_image?>" alt=""></a>
                                                <div class="quick_button">
                                                    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                        data-placement="top" data-uuid="<?php echo $value['uuid']; ?>"
                                                        data-pdata="<?php echo json_encode($value); ?>" data-original-title="quick view"> quick view</a> -->
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <!-- <div class="tag_cate">
                                                    <a href="#">Clothing,</a>
                                                    <a href="#">Potato chips</a>
                                                </div> -->
                                                <h3><a href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><?php echo $value['name']?></a></h3>
                                                <div class="price_box">
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
                                                <div class="product_hover">
                                                    <!-- <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        </ul>
                                                    </div> -->
                                                    <div class="product_desc">
                                                        <p><?php echo $this->common->pdesc($value['description'])?></p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                             <li><a href="javascript:void(0);"  onclick="mgk_wishlist.add('<?php echo $value['product_id']?>');" data-placement="top" title="Add to Wishlist" data-bs-toggle="tooltip"><span class="icon icon-Heart"></span></a></li> 
                                                            <li class="add_to_cart"><a href="javascript:void(0);" class="btnAddCart" data-product_id='<?php echo $value['product_id']?>'   data-qty='1'  title="add to cart">add to cart</a></li>
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
                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/350'.$value['main_image']:base_url().'assets/img/350x350.png';
                                     //   print_r($price_json);
                                    $price_json = json_decode($value['price_json'],true);
                                       $quantity = $price_json['quantity'][$domain_id];
                                       $mrp = $price_json['mrp'][$domain_id];
                                       $sellprice = $price_json['sellprice'][$domain_id];  
                                       
                                ?>
                                <div class="single_product product_list_item">
                                   <div class="row">
                                       <div class="col-lg-4 col-md-5">
                                           <div class="product_thumb">
                                                <a class="primary_img" href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img src="<?php echo $main_image?>" alt=""></a>
                                                <a class="secondary_img" href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img src="<?php echo $main_image?>" alt=""></a>
                                                <div class="quick_button">
                                                    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  data-original-title="quick view" data-uuid="<?php echo $value['uuid']; ?>"
                                                        data-pdata="<?php echo json_encode($value); ?>"> quick view</a> -->
                                                </div>
                                            </div>
                                       </div>
                                       <div class="col-lg-8 col-md-7">
                                            <div class="product_content">               
                                              <h3><a href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><?php echo $value['name']?></a></h3>
                                                <!-- <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div> -->
                                                <div class="product_desc">
                                                    <p><?php echo $this->common->pdesc($value['description'])?> </p>
                                                </div>
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
                                                
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="javascript:void(0);" class="btnAddCart" data-product_id='<?php echo $value['product_id']?>'   data-qty='1'  title="add to cart">add to cart</a></li>
                                                          <li><a  href="javascript:void(0);"  onclick="mgk_wishlist.add('<?php echo $value['product_id']?>');" title="Wishlist"><span class="icon icon-Heart"></span></a></li> 
                                                        
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
                        <?php if($num_row>=$maxm){ ?>
            <div class="shop_toolbar t_bottom">
                <div class="pagination ">
                    <ul class="pagination ">
                        <?php //echo $this->common->ajaxpagingnation_lux_new($start,$num_row,$maxm,'',$fun_name,$other_para); ?>
                        <?php echo $this->common->ajaxpagingnation_lux_new($page,$num_row,$maxm,'7',$fun_name,$other_para); ?>
                    </ul>
                </div>
            </div>
            <?php } ?>
                      
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