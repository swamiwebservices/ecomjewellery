<?php
$session_user_data = $this->session->userdata('user_data');
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
                    <a href="<?php echo site_url("dashboard"); ?>" class="nav-link <?php if ($this->m_act == 0) {echo " active";}?>">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>

              
                <?php if (in_array("12", $permission) || in_array("13", $permission) || in_array("14", $permission) || in_array("15", $permission) || in_array("16", $permission) || in_array("17", $permission)){?>
                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==4){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="fas fa-people-carry"></i> <span>Resource Manage</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <?php if (in_array("12", $permission)){?>
                        <li class="nav-item"><a href="<?php echo site_url('drivers') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==1){ echo 'active';}?>">Drivers List</a></li>
                        <?php }?>
                        <?php if (in_array("13", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('carry_boy') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==2){ echo 'active';}?>">Carry Boy List</a></li>
                        <?php }?>
                        <?php if (in_array("14", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('security') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==3){ echo 'active';}?>">Security List</a></li>
                        <?php }?>
                        <?php if (in_array("15", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('security/coolbox') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==5){ echo 'active';}?>">Manage Cool Boxes</a></li>
                        <?php }?>
                        <?php if (in_array("16", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('security/inventory') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==4){ echo 'active';}?>">Manage Inventory</a></li>
                        <?php }?>
                        <?php if (in_array("17", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('security/checkout_in') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==6){ echo 'active';}?>">Security Check Out/In Report</a></li>
                        <?php }?>
                        
                    </ul>
                </li>
                <?php } ?>
                <?php if (in_array("18", $permission)){?>
                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==5){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="fas fa-shuttle-van"></i> <span>Vehicles</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo site_url('vehicles') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==1){ echo 'active';}?>">Vehicles List</a></li>
                    </ul>
                </li>
                <?php } ?>
  <?php if (in_array("19", $permission) || in_array("20", $permission) || in_array("21", $permission) || in_array("22", $permission) || in_array("23", $permission) || in_array("24", $permission)){?>
                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==6){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-basket"></i> <span>Orders</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <?php if (in_array("19", $permission)){?>
                        <li class="nav-item"><a href="<?php echo site_url('orders/new_orders') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==1){ echo 'active';}?>">New Orders</a></li>
                        <?php }?>
                        <?php if (in_array("20", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('orders/confirmed_orders') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==2){ echo 'active';}?>">Confirmed Orders</a></li>
                        <?php }?>
                        <?php if (in_array("21", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('orders/delivered') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==3){ echo 'active';}?>">Delivered</a></li>
                        <?php }?>
                        <?php if (in_array("22", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('orders/reviewpending') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==4){ echo 'active';}?>">Review Pending</a></li>
                        <?php }?>
                        <?php if (in_array("23", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('orders/reviewlist') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==5){ echo 'active';}?>">Review List</a></li>
                        <?php }?>
                        <?php if (in_array("24", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('orders/allorders') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==6){ echo 'active';}?>">All Order</a></li>
                        <?php }?>
                        
                    </ul>
                </li>
                <?php } ?>

                <?php if (in_array("25", $permission)){?>
                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==10){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-accessibility2"></i> <span>Administration</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo site_url('administration') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==1){ echo 'active';}?>">Staff List</a></li>

                    </ul>
                </li>
                <?php }?>
                <?php if (in_array("26", $permission) || in_array("27", $permission) || in_array("28", $permission) || in_array("29", $permission) || in_array("30", $permission) || in_array("31", $permission) || in_array("32", $permission)){?>
                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==8){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-graph"></i> <span>Reports</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <?php if (in_array("26", $permission)){?>
                        <li class="nav-item"><a href="<?php echo site_url('reports/order') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==1){ echo 'active';}?>">Order</a></li>
                        <?php }?>
                        <?php if (in_array("27", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('reports/customers') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==2){ echo 'active';}?>">Customers</a></li>
                        <?php }?>
                        <?php if (in_array("28", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('reports/products') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==3){ echo 'active';}?>">Products</a></li>
                        <?php }?>
                        <?php if (in_array("29", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('reports/driver') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==4){ echo 'active';}?>">Driver</a></li>
                        <?php }?>
                        <?php if (in_array("30", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('reports/carryboy') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==5){ echo 'active';}?>">Carry Boy</a></li>
                        <?php }?>
                        <?php if (in_array("31", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('reports/driverwages') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==6){ echo 'active';}?>">Driver Wages</a></li>
                        <?php }?>
                        <?php if (in_array("32", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('reports/carryboywages') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==7){ echo 'active';}?>">Carryboy Wages</a></li>
                        <?php }?>
                        
                       
                    </ul>
                </li>

                <?php }?>
                <?php if (in_array("33", $permission)){?>
                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==1){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-man "></i> <span>Customers</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo site_url('customers') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==1){ echo 'active';}?>">Customers List</a></li>
                    </ul>
                </li>
                <?php }?>

                   <?php if (in_array("34", $permission) || in_array("35", $permission) || in_array("36", $permission) ){?>
                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==8){ echo ' nav-item-expanded nav-item-open';}?>">

                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==2){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-bag"></i> <span>Products</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    
                        <?php if (in_array("34", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('products/categorylistall') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==3){ echo 'active';}?>">Category</a></li>
                        <?php }?>
                        <?php if (in_array("35", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('products') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==1){ echo 'active';}?>">Products</a></li>
                        <?php }?>
                        <?php if (in_array("36", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('coupon') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==2){ echo 'active';}?>">Coupon</a></li>
                        <?php }?>
                        
                    </ul>
                </li>
            <?php }?>

            <?php if (in_array("37", $permission) || in_array("38", $permission) ){?>
                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==8){ echo ' nav-item-expanded nav-item-open';}?>">
                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==3){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-database"></i> <span>Province</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <?php if (in_array("37", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('zone/province') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==4){ echo 'active';}?>">Province List</a></li>
                        <?php }?>
                        <?php if (in_array("38", $permission)){?> 
                        <li class="nav-item"><a href="<?php echo site_url('zone/district') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==5){ echo 'active';}?>">District List</a></li>
                        <?php }?>

                        <!--   <li class="nav-item"><a href="<?php echo site_url('zone') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==1){ echo 'active';}?>">City List</a></li> -->
                        <!-- <li class="nav-item"><a href="<?php echo site_url('zone/zonearea') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==2){ echo 'active';}?>">Zone List</a></li> -->
                        <!-- <li class="nav-item"><a href="<?php echo site_url('mobile_phones') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==3){ echo 'active';}?>">Mobile Phones List</a></li> -->
                    </ul>
                </li>
                <?php }?>

                <?php if (in_array("39", $permission)){?>
                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==9){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-images2 "></i> <span>Media</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo site_url('media') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==1){ echo 'active';}?>">Media List</a></li>
                    </ul>
                </li>
                <?php }?>

                <?php if (in_array("40", $permission) || in_array("41", $permission)){?>
                <li class="nav-item nav-item-submenu <?php if(isset($this->m_act) && $this->m_act==11){ echo ' nav-item-expanded nav-item-open';}?>">
                    <a href="#" class="nav-link"><i class="icon-file-text2"></i> <span>CMS</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                       
                    <?php if (in_array("40", $permission)){?>
                        <li class="nav-item"><a href="<?php echo site_url('cms/faq') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==4){ echo 'active';}?>">FAQ</a></li>
                        <?php }?>
                        <?php if (in_array("41", $permission)){?>

                        <li class="nav-item"><a href="<?php echo site_url('cms/aboutus') ?>" class="nav-link <?php if(isset($l_s_act) && $l_s_act==5){ echo 'active';}?>">About US</a></li>
                        <?php }?>
                    </ul>
                </li>
                <?php }?>


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