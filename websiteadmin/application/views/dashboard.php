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
 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('inc_metacss');?>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datepicker.css" type="text/css" />

        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>

        <!-- Theme JS files -->
        <script src="<?php echo base_url() ?>global_assets/js/plugins/visualization/d3/d3.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/visualization/c3/c3.min.js"></script>
        <style>

        .bg-bg1-400 {
            background-color: #005534;
        }
        .bg-bg2-400{
            background-color: #efd406;
        }
        .bg-bg3-400{
            background-color: #c4c5c5;
        }
        .row-sm>div {
            padding-left: 10px;
            padding-right: 10px;
        }
        .rounded {
            border-radius: 3px !important;
        }
        .t-15 {
            top: 16px;
        }
        .r-5 {
            right: 12px;
        }
        .pos-absolute {
            position: absolute;
        }
        .square-8 {
            display: inline-block;
            width: 8px;
            height: 8px;
        }
        .rounded-circle {
            border-radius: 50%;
        }
        .bg-danger {
            background-color: #dc3545 !important;
        }
        .pd-25 {
            padding: 25px;
        }
        .align-items-center {
            align-items: center !important;
        }
        .d-flex {
            display: flex !important;
        }
        .tx-60 {
            font-size: 60px;
        }
        .lh-0 {
            line-height: 0;
        }
        .tx-white {
            color: #fff;
        }
        .op-7 {
            opacity: 0.7;
        }
        .ion-bag:before {
            content: "\f110";
        }
        .mg-l-20 {
            margin-left: 20px;
        }
        .tx-10 {
            font-size: 10px;
        }
        .tx-uppercase {
            text-transform: uppercase;
        }
        .tx-spacing-1 {
            letter-spacing: 0.5px;
        }
        .tx-white-8 {
            color: rgba(255, 255, 255, 0.8);
        }
        .tx-mont {
            font-family: "Montserrat", "Fira Sans", "Helvetica Neue", Arial, sans-serif;
        }
        .tx-medium {
            font-weight: 500;
        }
        .mg-b-10 {
            margin-bottom: 10px;
        }
        .tx-24 {
            font-size: 24px;
        }
        .lh-1 {
            line-height: 1.1;
        }
        .tx-white {
            color: #fff;
        }
        .tx-lato {
            font-family: "Lato", "Helvetica Neue", Arial, sans-serif;
        }
        .tx-bold {
            font-weight: 700;
        }
        .mg-b-2 {
            margin-bottom: 2px;
        }
        .tx-11 {
            font-size: 11px;
        }
        .tx-white-6 {
            color: rgba(255, 255, 255, 0.6);
        }
        .tx-roboto {
            font-family: "Roboto", "Helvetica Neue", Arial, sans-serif;
        }
        .tileswti .card-body{
            height: 108px;
        }
        .neworder{
            background-image: url("<?php echo base_url()?>global_assets/basket-cart.png");
            background-repeat: no-repeat;
            background-position-y:center;
        }
        .totalorder{
            background-image: url("<?php echo base_url()?>global_assets/shop44-512.png");
            background-repeat: no-repeat;
            background-position-y:center;
        }
        .revenue{
            background-image: url("<?php echo base_url()?>global_assets/cash2.png");
            background-repeat: no-repeat;
            background-position-y:center;
        }
        .customers{
            background-image: url("<?php echo base_url()?>global_assets/customer.png");
            background-repeat: no-repeat;
            background-position-y:center;
        }
        .products{
            background-image: url("<?php echo base_url()?>global_assets/cube-icon-ice-png-clip-art.png");
            background-repeat: no-repeat;
            background-position-y:center;
        }
        .driver{
            background-image: url("<?php echo base_url()?>global_assets/driver-icon-10.png");
            background-repeat: no-repeat;
            background-position-y:center;
            
        }
        .carryboy{
            background-image: url("<?php echo base_url()?>global_assets/carry-box-1649174-1399164.png");
            background-repeat: no-repeat;
            background-position-y:center;
            
        }
        .inventory{
            background-image: url("<?php echo base_url()?>global_assets/ice-and-meltwater-thumbnail.jpg");
            background-repeat: no-repeat;
            background-position-y:center;
            
        }
        .driverslocation1{
            background-image: url("<?php echo base_url()?>global_assets/location.png");
            background-repeat: no-repeat;
            background-position-y:center;
            
        }
        .bag{
            background-image: url("<?php echo base_url()?>global_assets/bag.png");
            background-repeat: no-repeat;
            background-position-y:center;
            
        }
        .bag2{
            background-image: url("<?php echo base_url()?>global_assets/bag2.png");
            background-repeat: no-repeat;
            background-position-y:center;
            
        }
        .location{
            background-image: url("<?php echo base_url()?>global_assets/placeholder-filled-point.png");
            background-repeat: no-repeat;
            background-position-y:center;
            
        }
        </style>
    </head>
    <body>
        <!-- Main navbar -->
        <?php $this->load->view('inc_topmenu');?>
        <!-- /main navbar -->
        <!-- Page content -->
        <div class="page-content">
            <!-- Main sidebar -->
            <?php $this->load->view('inc_leftmenu');?>
            <!-- /main sidebar -->
            <!-- Main content -->
            <div class="content-wrapper">
            <?php if (in_array("122", $permission)){?>
                <!-- Page header -->
                <div class="page-header page-header-light">
                    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="<?php echo site_url("home"); ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item active"><?php echo (isset($title)) ? $title : '' ?></span>
                            </div>
                            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /page header -->
                <!-- Content area -->
                <div class="content">
                    <!-- Quick stats boxes -->
                    <div class="row tileswti">
                    <div class="col">
                            <!-- Members online -->
                            <a href="<?php echo site_url("orders/new_orders?getdate=".$today_dateymd);?>">
                            <div class="card bg-bg1-400">
                                <div class="neworder card-body">
                                    <div class="d-flex align-items-center float-right">
                                       
                                            <div class="col-lg-12 ">
                                                <div class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10 text-right">New orders</div>
                                                <div class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1 text-right "><?php echo $today_total_order_pending?></div>
                                            </div>
                                      
                                    </div>
                                </div>
                            </div>
                            </a>
                            <!-- /members online -->
                        </div>
                        <div class="col">
                            <!-- Members online -->
                            <div class="card bg-teal-400">
                                <div class="totalorder card-body">
                                <div class="d-flex align-items-center float-right">
                                        <div class="mg-l-20">
                                            <div class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10 text-right">Total orders of today</div>
                                            <div class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1 text-right"><?php echo $today_total_order?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /members online -->
                        </div>
                        
                        <div class="col">
                           
                            <div class="card bg-bg2-400">
                                <div class="revenue card-body">
                                <div class="d-flex align-items-center float-right">
                                        
                                        <div class="mg-l-10">
                                            <div class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10 text-right">Total revenue of today</div>
                                            <div class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1 text-right"><?php echo $this->currencymodal->format($today_total_revenue, currency_code, 1);
?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                        <div class="col">
                        <a href="<?php echo site_url("customers");?>">
                            <div class="card bg-bg3-400">
                                <div class="customers card-body">
                                <div class="d-flex align-items-center float-right">
                                        <div class="mg-l-20">
                                            <div class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10 text-right">Total customers</div>
                                            <div class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1 text-right"><?php echo $cust_cnt?></div>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col">
                        <a href="<?php echo site_url("products");?>">
                            <div class="card bg-blue-400">
                                <div class="bag card-body">
                                    <div class="d-flex align-items-center float-right">
                                    
                                       
                                            <div class="mg-l-20">
                                                <div class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10 text-right">Manage products</div>
                                                <div class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1 text-right"><?php echo $prod_cnt?></div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="row tileswti">
                       
              
                       
   

                          
                    </div>
                    <!-- /quick stats boxes -->
                    <!-- Main charts -->
                    <div class="row d-none">
                        <div class="col-xl-12">
                            <!-- Support tickets -->
                            <!-- Pies -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header header-elements-inline">
                                            <h5 class="card-title">Sales Graph (<?php echo $date_sales_graph?>)</h5>
                                            <div class="header-elements">
                                            <form action="<?php echo site_url("dashboard")?>" method="POST">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <input type="text" name="monthyear_graph" id="monthyear_graph" class="form-control datepicker" value="<?php echo $monthyear_graph; ?>" data-min-view-mode="months" data-start-view="1" data-format="mm-yyyy">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="submit" class="btn btn-light" value="Go">
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container text-center">
                                                <div class="chart" id="c3-line-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header header-elements-inline">
                                            <h5 class="card-title">Top <?php echo sizeof($topproduct);?> products of this month</h5>
                                            <div class="header-elements">
                                            <form action="<?php echo site_url("dashboard")?>" method="POST">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <input type="text" name="monthyear_pie" id="monthyear_pie" class="form-control datepicker" value="<?php echo $monthyear_pie; ?>" data-min-view-mode="months" data-start-view="1" data-format="mm-yyyy">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="submit" class="btn btn-light" value="Go">
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container text-center">
                                                <div class="d-inline-block" id="c3-donut-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /pies -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header header-elements-inline">
                                            <h5 class="card-title">New Order</h5>
                                            <div class="header-elements">
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <?php
if (isset($oderlistnew) && sizeof($oderlistnew) > 0) {
    ?>
                                            <table class="table dashboarddatatable" width="100%">
                                                <thead>
                                                    <tr class="bg-blue ">
                                                        <th style="width:2%">#</th>
                                                        <th style="width:auto">Customer</th>
                                                        <th style="width:auto">Total</th>
                                                        <th>Mode</th>
                                                        <th>Order Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
$i = 0;
    foreach ($oderlistnew as $key => $value) {
        $i++;
        ?>
                                                    <tr>
                                                        <td><a href="<?php echo site_url($controller_order . '/orderdetail/' . $value['oorder_uid']."?l_s_act=".$l_s_act."&page=".$page) ?>"><?php echo stripslashes($value['invoice_no']) ?></a></td>
                                                        <td><?php echo stripslashes($value['payment_firstname']) ?> <?php echo stripslashes($value['payment_lastname']) ?></td>
                                                        <td><?php echo $this->currencymodal->format($value['total'], currency_code, 1);
        ?></td>
                                                        <td><?php echo stripslashes($value['payment_method']) ?></td>
                                                        <td>
                                                            <?php echo $this->common->getDateFormat($value['date_added'], 'd-m-Y'); ?>
                                                        </td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                   
                            </div>
                            <!-- /support tickets -->
                            <!-- Latest posts -->
                            <!-- /latest posts -->
                        </div>
                    </div>
                    <!-- /main charts -->
                </div>
                <?php }
                ?>
                <!-- /content area -->
                <!-- Footer -->
                <?php $this->load->view('inc_footer');?>
                <!-- /footer -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->
        
         
    </body>
    <script>
    // Datatable with saving state
    // Scrollable datatable
    var table = $('.dashboarddatatable').DataTable({
        columnDefs: [{
            orderable: false,
            targets: [0]
        }],
        autoWidth: true,
        scrollX: true,
        scrollY: '35vh',
        scrollCollapse: false,
        "paging": false,
        "bLengthChange": false, //thought this line could hide the LengthMenu
        "bInfo": false,
        "aaSorting": [],
        /*  fixedColumns : {
					leftColumns : 2,
					rightColumns : 1
				},  */
        "bFilter": false,
        responsive: true,
    });
 // Define charts elements
 var line_chart_element = document.getElementById('c3-line-chart');
        // Line chart
        if (line_chart_element) {
            // Generate chart
            var line_chart = c3.generate({
                bindto: line_chart_element,
                point: {
                    r: 4
                },
                color: {
                    pattern: ['#1075bd', '#F4511E', '#1E88E5']
                },
                data: {
                    x: 'x',
                    columns: [
                        ['x', <?php echo $days_str; ?>],
                        ["<?php echo $date_sales_graph?>", <?php echo $days_array_final_str; ?>]
                    ],
                    type: 'spline'
                },
                grid: {
                    y: {
                        show: true
                    }
                },
    axis: {
        x: {
            label: 'Month'
        },
        y: {
            label: 'Total Amount (In Kip)'
        } 
    }
            });
            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                line_chart.resize();
            });
        }
    var donut_chart_element = document.getElementById('c3-donut-chart');
    // Donut chart
    if (donut_chart_element) {
        var donut_chart = c3.generate({
            bindto: donut_chart_element,
            size: {
                width: 350
            },
            color: {
                pattern: ['#3F51B5', '#FF9800', '#4CAF50', '#00BCD4', '#F44336']
            },
            data: {
                columns: [
                    ["<?php echo (isset($topproduct[0]['name'])) ? $topproduct[0]['name']  :'' ?>", "<?php echo (isset($topproduct[0]['name'])) ? $topproduct[0]['topproduct']  :'' ?>"],
                    ["<?php echo (isset($topproduct[1]['name'])) ? $topproduct[1]['name']  :'' ?>", "<?php echo (isset($topproduct[1]['topproduct'])) ? $topproduct[1]['topproduct']  :0 ?>"],
                    ["<?php echo (isset($topproduct[2]['name'])) ? $topproduct[2]['name']  :'' ?>", "<?php echo (isset($topproduct[2]['topproduct'])) ? $topproduct[2]['topproduct']  :0 ?>"],
                    ["<?php echo (isset($topproduct[3]['name'])) ? $topproduct[3]['name']  :'' ?>", "<?php echo (isset($topproduct[3]['topproduct'])) ? $topproduct[3]['topproduct']  :0 ?>"],
                    ["<?php echo (isset($topproduct[4]['name'])) ? $topproduct[4]['name']  :'' ?>", "<?php echo (isset($topproduct[4]['topproduct'])) ? $topproduct[4]['topproduct']  :0 ?>"],
                ],
                type: 'donut'
            },
            donut: {
                title: "Top <?php echo sizeof($topproduct);?> products"
            }
        });
        // Resize chart on sidebar width change
        $('.sidebar-control').on('click', function() {
            donut_chart.resize();
        });
       
    }
     // Single picker
     $('.daterange-single').daterangepicker({
            singleDatePicker: true,
            locale: {
                format: 'YYYY-MM-DD'
            }
        });
    </script>
     <script>
    $(document).ready(function() {
        // month selector
        $('.datepicker').datepicker({
            autoclose: true,
            format: "mm-yyyy",
            viewMode: "months",
            minViewMode: "months"

        });


    });
    </script>
</html>