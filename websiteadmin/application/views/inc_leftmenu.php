<?php
$session_user_data = $this->session->userdata('admin_user_data');
$where="where user_id='".$session_user_data['user_id']."'  ";	
$user_data = $this->common->getOneRow("user_master",$where);
 //print_r($user_data);
if($user_data['access_ids']!=''){
    $permission = explode(",",$user_data['access_ids']);
} else {
    $permission = [];
}

//print_r($permission);
 

?> <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">




        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->

                <li class="nav-item">
                    <a href="<?php echo site_url("dashboard"); ?>" class="nav-link <?php if (isset($activaation_id) && $activaation_id == 100) {echo " active";}?>">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>

              
                
                
            <?php if (1){?>
                <li class="nav-item nav-item-submenu <?php if(isset($activaation_id) && $activaation_id==22){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-basket"></i> <span>Orders</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <li class="nav-item"><a href="<?php echo site_url('orders/new_orders') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='22_1'){ echo 'active';}?>">New Orders</a></li>
                    <li class="nav-item"><a href="<?php echo site_url('orders/confirmed_orders') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='22_2'){ echo 'active';}?>">Confirmed Orders</a></li>
                    <li class="nav-item"><a href="<?php echo site_url('orders/delivered') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='22_3'){ echo 'active';}?>">Delivered</a></li>
                    <!-- <li class="nav-item"><a href="<?php echo site_url('orders/reviewpending') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='22_4'){ echo 'active';}?>">Review Pending</a></li>
                    <li class="nav-item"><a href="<?php echo site_url('orders/reviewlist') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='22_5'){ echo 'active';}?>">Review List</a></li> -->
                    <li class="nav-item"><a href="<?php echo site_url('orders/allorders') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='22_6'){ echo 'active';}?>">All Order</a></li>
                        
                    </ul>
                </li>
                <?php } ?>

                <?php if (in_array("25", $permission)){?>
                <li class="nav-item nav-item-submenu <?php if(isset($activaation_id) && $activaation_id==10){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-accessibility2"></i> <span>Administration</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo site_url('administration') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='10_2'){ echo 'active';}?>">Staff List</a></li>

                    </ul>
                </li>
                <?php }?>
                <?php if (in_array("26", $permission) || in_array("27", $permission) || in_array("28", $permission) || in_array("29", $permission) || in_array("30", $permission) || in_array("31", $permission) || in_array("32", $permission)){?>
                <!-- <li class="nav-item nav-item-submenu <?php if(isset($activaation_id) && $activaation_id==8){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-graph"></i> <span>Reports</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <?php if (in_array("26", $permission)){?>
                        <li class="nav-item"><a href="<?php //echo site_url('reports/order') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id==1){ echo 'active';}?>">Order</a></li>
                        <?php }?>
                        <?php if (in_array("27", $permission)){?> 
                        <li class="nav-item"><a href="<?php //echo site_url('reports/customers') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id==2){ echo 'active';}?>">Customers</a></li>
                        <?php }?>
                        <?php if (in_array("28", $permission)){?> 
                        <li class="nav-item"><a href="<?php //echo site_url('reports/products') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id==3){ echo 'active';}?>">Products</a></li>
                        <?php }?>
                    
                       
                    </ul>
                </li> -->

                <?php }?>
                <?php if (in_array("33", $permission)){?>
                <li class="nav-item nav-item-submenu <?php if(isset($activaation_id) && $activaation_id==21){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-man "></i> <span>Customers</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo site_url('customers') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='21_2'){ echo 'active';}?>">Customers List</a></li>
                    </ul>
                </li>
                <?php }?>

                   <?php 
                    
                   if (in_array("34", $permission) || in_array("35", $permission) || in_array("36", $permission) ){?>
                

                <li class="nav-item nav-item-submenu <?php if(isset($activaation_id) && $activaation_id==1011){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-bag"></i> <span>Products</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    
                        <?php if (in_array("34", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('products/categorylistall') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='1011_1'){ echo 'active';}?>">Category</a></li>
                        <?php }?>
                        <?php if (in_array("35", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('products') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='1011_2'){ echo 'active';}?>">Products</a></li>
                        <?php }?>
                        <?php if (in_array("34", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('products/productgroup') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='1011_4'){ echo 'active';}?>">Product Group</a></li>
                        <?php }?>
                        <?php if (in_array("36", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('coupon') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id=='1011_3'){ echo 'active';}?>">Coupon</a></li>
                        <?php }?>
                        
                    </ul>
                </li>
            <?php }?>

           

                

                <li class="nav-item nav-item-submenu <?php if (isset($activaation_id) && $activaation_id == "101") {echo " nav-item-expanded nav-item-open";}?>">
                    <a href="#" class="nav-link"><i class="icon-file-text2"></i> <span>CMS</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo site_url('cms/banner') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id== "101_8"){ echo 'active';}?>">Home Slider</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('cms/homepage') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id== "101_18"){ echo 'active';}?>">Home Page</a></li>
                         <li class="nav-item"><a href="<?php echo site_url('cms/aboutus') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id== "101_1"){ echo 'active';}?>">About-us</a></li> 
                        <li class="nav-item"><a href="<?php echo site_url('cms/termscondtion') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id== "101_2"){ echo 'active';}?>">Terms Condtion</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('cms/privacy') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id== "101_3"){ echo 'active';}?>">Privacy</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('cms/refund') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id== "101_6"){ echo 'active';}?>">Refund/Return</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('cms/shippingpolicy') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id== "101_7"){ echo 'active';}?>">Shipping Policy</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('cms/address') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id== "101_4"){ echo 'active';}?>">Address</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('cms/metatags') ?>" class="nav-link <?php if(isset($sub_activaation_id) && $sub_activaation_id== "101_5"){ echo 'active';}?>">Meta Tags</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu <?php if (isset($activaation_id) && $activaation_id == "1101") {echo " nav-item-expanded nav-item-open";}?>">
                    <a href="#" class="nav-link"><i class=" icon-cog3  "></i> <span>Setting</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                      <!--   <li class="nav-item"><a href="<?php echo site_url('sitecontrol/sociallinks') ?>" class="nav-link  <?php if (isset($sub_activaation_id) && $sub_activaation_id == "1101_1") {echo " active";}?>"><i class="icon-share3 "></i>Social Links</a>
                        </li> -->
                        <li class="nav-item"><a href="<?php echo site_url('sitecontrol/sitemail') ?>" class="nav-link <?php if (isset($sub_activaation_id) && $sub_activaation_id == "1101_2") {echo " active";}?>">Mail Setting</a>
                        </li>
                        <li class="nav-item"><a href="<?php echo site_url('payment/') ?>" class="nav-link <?php if (isset($sub_activaation_id) && $sub_activaation_id == "1101_5") {echo " active";}?>">Payment Method</a>
                        </li>
                        <li class="nav-item"><a href="<?php echo site_url('shipping/listall') ?>" class="nav-link <?php if (isset($sub_activaation_id) && $sub_activaation_id == "1101_6") {echo " active";}?>">Shipping</a>
                        </li>
                       <li class="nav-item"><a href="<?php echo site_url('sitecontrol/maintenancemode') ?>" class="nav-link  <?php if (isset($sub_activaation_id) && $sub_activaation_id == "1101_3") {echo " active";}?>">Maintenance Mode</a>
                        </li>  
                       <!--  <li class="nav-item"><a href="<?php echo site_url('sitecontrol/list_all')?>" class="nav-link <?php if (isset($sub_activaation_id) &&  $sub_activaation_id == "1101_4") {echo " active";}?>"><i class="icon-cog3 " aria-hidden="true"></i>Settings</a></li> -->
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?php echo site_url("dashboard/logout"); ?>" class="nav-link">
                        <i class="icon-switch2"></i>
                        <span>Logout</span>
                    </a>
                </li>
                <!-- /page kits -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>