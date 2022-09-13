<?php
$session_user_data = $this->session->userdata('user_data');
?>
<div class="navbar navbar-expand-md navbar-light bg-primary1" style="padding:0 0rem">
    <div class="navbar-brand">
        <a href="<?php echo site_url("dashboard");?>" class="d-inline-block">
            <img src="<?php echo base_url()?>global_assets/images/dash_logo_new.png" alt="" style="border-radius:.1875rem;height: 50px; width: 150px;">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

        </ul>


        <span class="badge bg-success1 ml-md-3  mr-md-auto"> </span>

        <ul class="navbar-nav">
        <li class="nav-item dropdown"><a href="#" id="driver_topmenunotificationid" class="navbar-nav-link dropdown-toggle caret-0 legitRipple" data-toggle="dropdown" aria-expanded="false">
                    <!-- <i class="icon-people"></i> -->
					<i class="fas fa-truck-moving"></i> <span class="d-md-none ml-2">Driver</span>
					<span id="topbell2" class="square-8 bg-danger1 pos-absolute t-15 r-5 rounded-circle"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
                    <div class="dropdown-content-header">
                        <span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Driver Notification</span>  
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                            <table id="driver_topnotificationlist" class="table table-hover datatablecustom_notification">
                            </table>
                           
                    </div>

                    <div class="dropdown-content-footer bg-light">
                       
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a href="#" id="topmenunotificationid" class="navbar-nav-link dropdown-toggle caret-0 legitRipple" data-toggle="dropdown" aria-expanded="false">
                    <!-- <i class="icon-people"></i> -->
					<i class="far fa-bell"></i> <span class="d-md-none ml-2">Order</span>
					<span id="topbell" class="square-8 bg-danger1 pos-absolute t-15 r-5 rounded-circle"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
                    <div class="dropdown-content-header">
                        <span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Order Notification</span> <!-- <a href="#" class="text-default">Mark All as Read</a> -->
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                            <table id="topnotificationlist" class="table table-hover datatablecustom_notification">
                            </table>
                           
                    </div>

                    <div class="dropdown-content-footer bg-light">
                       <!--  <a href="<?php echo site_url("orders/new_orders");?>" class="text-grey mr-auto">All Order</a> <a href="<?php echo site_url("orders/new_orders");?>" class="text-grey"><i class="icon-basket"></i></a> -->
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url()?>global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
                    <span><?php echo (isset($session_user_data['first_name']))?$session_user_data['first_name']:''?></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="<?php echo site_url("dashboard/logout");?>" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</div>