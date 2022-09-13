<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view('inc_metacss');?>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_layouts.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_checkboxes_radios.js"></script>

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
                <!-- Page header -->
                <div class="page-header page-header-light">
                    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="<?php echo site_url("home"); ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <a href="<?php echo site_url($controller); ?>" class="breadcrumb-item"><span class="breadcrumb-item "><?php echo (isset($title)) ? $title : '' ?></span></a>
                                <span class="breadcrumb-item active"><?php echo (isset($sub_heading)) ? $sub_heading : '' ?></span>
                            </div>
                            <!-- <i href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a> -->
                        </div>
                    </div>
                </div>
                <!-- /page header -->
                <!-- Content area -->
                <div class="content">
                    <?php
$success = $this->session->flashdata('success');
if ($success) {
    ?>
                    <div class="alert bg-success text-white alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold">Success! </span><?php echo $success ?>
                    </div>
                    <?php }?>
                    <?php
$error = $this->session->flashdata('error');
if ($error) {
    ?>
                    <div class="alert bg-danger text-white alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold">Error! </span> <?php echo $error ?>
                    </div>
                    <?php }?>
                    <?php
$warning = $this->session->flashdata('warning');
if ($warning) {
    ?>
                    <div class="alert bg-danger text-white alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold">Warning! </span> <?php echo $warning ?>
                    </div>
                    <?php }?>
                    <!-- Basic datatable -->


                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title "><?php echo (isset($sub_heading)) ? $sub_heading : '' ?> </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="order-id"> <strong>Order ID:</strong> #<?php echo $order_info['invoice_no']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <p class="placed-on"><strong>Placed on </strong><?php echo $order_info['date_added']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-sm-12 col-lg-3 payment-details">
                                    <p>
                                        <span><strong>Payment method:</strong></span>
                                        <?php echo $order_info['payment_method']; ?>
                                    </p>
                                </div>
                                <?php
                                if($order_info['payment_method']=="Credit"){
                                ?>
                                <div class="col-3 col-sm-12 col-lg-3 payment-details">
                                    <p class="text-danger">
                                        <span><strong>Credit Pay date:</strong></span>
                                        <?php echo $order_info['credit_pay_date']; ?>
                                    </p>
                                </div>
                                
                                <div class="col-3 col-sm-12 col-lg-3 payment-details">
                                    <p class="text-danger">
                                        <span><strong>Credit Pay Satus:</strong></span>
                                        <strong><?php echo $order_info['credit_pay_status']; ?></strong>
                                        <?php
                                        if($order_info['order_status_id']=="4"){
                                        ?>
                                        <a class="childuserpop" id="childuserpop" href="javascript:void(0);">Update the status</a>
                                        <?php }?>
                                    </p>
                                </div>
                                <?php }?>
                            </div>
                            <div class="border-dotted mb-2"></div>
                            <div class="row">
                                <div class="col-5 col-sm-12 col-lg-5 payment-details">
                                    <p>
                                        <span><strong>Billing Address</strong></span><br>
                                        <?php if ($payment_address) {?><?php echo $payment_address; ?><?php }?>
                                    </p>
                                </div>

                                <div class="col-5 col-sm-12 col-lg-5 payment-details">
                                    <p>
                                        <span><strong>Shipping Address</strong></span><br>
                                        <?php if ($shipping_address) {?><?php echo $shipping_address; ?><?php }?>
                                    </p>
                                </div>
                            </div>
                            <div class="border-dotted mb-2"></div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-lg-12">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="bg-blue ">
                                                <th class="text-left"> Item Details</td>
                                                <th class="text-left">Quantity</th>
                                                <th class="text-left">Price</th>
                                                <th class="text-left">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
if (isset($products)) {
foreach ($products as $product) {?>
                                            <tr>
                                                <td class="text-left"> <img src="<?php echo $this->common->showImage('../uploads/prod_images/', $product['main_image']); ?>" width="100">
                                                    <h3><?php echo $this->common->getDbValue($product['name']); ?></h3>
                                                </td>
                                                <td class="text-left"><?php echo $product['quantity']; ?></td>
                                                <td class="text-left"><?php echo $product['price']; ?></td>
                                                <td class="text-left"><?php echo $product['total']; ?></td>
                                            </tr>
                                            <?php }?>
                                            <?php }?>
                                            <?php
if (isset($totals)) {

?>
                                            <?php
foreach ($totals as $total) {
?>
                                            <tr>
                                                <td class="text-left">

                                                </td>
                                                <td class="text-left"> </td>
                                                <td class="text-left"><strong><?php echo $this->common->getDbValue($total['title']); ?>:</strong></td>
                                                <td class="text-left"><?php echo $this->common->getDbValue($total['text']); ?></td>
                                            </tr>

                                            <?php }?>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <?php if (isset($order_info['comment']) && $order_info['comment']) {?>
                            <div class="row pt-2">

                                <div class="col-12 col-sm-12 col-lg-12">
                                    <h4 class="card-title "> Comment/Notes</h4>
                                    <p>
                                        <?php echo $order_info['comment']; ?>
                                    </p>



                                </div>
                            </div>
                            <?php }?>
                            <div class="row pt-2">
                                <div class="col-12 col-sm-12 col-lg-12">
                                    <div class="clearfix"></div>
                                    <?php if (isset($histories) && $histories) {?>
                                    <h3>Order History</h3>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="bg-blue ">
                                                <th class="text-left">Date Added</td>
                                                <th class="text-left">Status</th>
                                                <th class="text-left">Comment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($histories) {?>
                                            <?php foreach ($histories as $history) {?>
                                            <tr>
                                                <td class="text-left"><?php echo $history['date_added']; ?></td>
                                                <td class="text-left"><?php echo $history['status']; ?></td>
                                                <td class="text-left"><?php echo $history['comment']; ?></td>
                                            </tr>
                                            <?php }?>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                    <?php }?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!---new area -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title ">Driver Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row pt-2">
                                <div class="col-12 col-sm-12 col-lg-12">
                                    <div class="clearfix"></div>
                                    <?php
                                    $driver_info_name = "None";
                                    if((int)$order_info['driver_id']==0){
                                    ?>
                                    <form name="frm-edit" id="frm-edit" action="<?php echo site_url($controller) ?>/orderdetail/<?php echo $order_info['oorder_uid']; ?>?page=<?php echo (isset($page))?$page:''?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="mode" id="mode" value="assignDriver">

                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2" for="first_name">Select Driver :<span class="text-danger">*</span></label>
                                            <div class="col-lg-5">

                                                <select name="driver_id" id="driver_id" class="form-control">
                                                    <option value=''>Select Driver</option>
                                                    <?php foreach ($driver_list as $driverInfo) {?>
                                                    <?php if ($driverInfo['user_id'] == $order_info['driver_id']) {?>
                                                    <option value="<?php echo $driverInfo['user_id']; ?>" selected="selected"><?php echo $driverInfo['first_name']; ?> <?php echo $driverInfo['middle_name']; ?> <?php echo $driverInfo['last_name']; ?></option>
                                                    <?php } else {?>
                                                    <option value="<?php echo $driverInfo['user_id']; ?>"><?php echo $driverInfo['first_name']; ?> <?php echo $driverInfo['middle_name']; ?> <?php echo $driverInfo['last_name']; ?></option>
                                                    <?php }?>
                                                    <?php }?>
                                                </select>

                                            </div>
                                            <div class="col-lg-5">
                                                <button type="submit" name="assignDriver" id="" class="btn bg-blue">Assign Driver <i class="icon-paperplane ml-2"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php } else {

                                                    $driver_info =  $this->common->getRecord('user_master_front',"user_id='".(int)$order_info['driver_id']."'",'first_name,middle_name,last_name');
                                                    $driver_info_name =  $driver_info['first_name']." ".$driver_info['middle_name']." ".$driver_info['last_name'];
                                                }?>

                                    <div class="col-md-4">
                                        <p class="order-id"> <strong>Driver:</strong> <?php echo $driver_info_name; ?></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of new area-->
                    <!---new area -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title ">Add Order History</h5>
                        </div>
                        <div class="card-body">
                            <div class="row pt-2">
                                <div class="col-12 col-sm-12 col-lg-12">


                                    <form class="form-horizontal" action="<?php echo site_url($controller) ?>/orderdetail/<?php echo $order_uuid; ?>?page=<?php echo (isset($page))?$page:''?>" name="updateOrderStatus" id="updateOrderStatus" method="post">
                                        <input type="hidden" name="mode" id="mode" value="edit_content_updatestatus">
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label" for="input-order-status">Order Status</label>
                                            <div class="col-sm-10">
                                                <select name="order_status_id" id="input-order-status" class="form-control">
                                                    <?php foreach ($order_statuses as $order_statuses) {?>
                                                    <?php if ($order_statuses['order_status_id'] == $order_info['order_status_id']) {?>
                                                    <option value="<?php echo $order_statuses['order_status_id']; ?>" selected="selected"><?php echo $order_statuses['name']; ?></option>
                                                    <?php } else {?>
                                                    <option value="<?php echo $order_statuses['order_status_id']; ?>"><?php echo $order_statuses['name']; ?></option>
                                                    <?php }?>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2" for="input-notify">Notify Customer</label>
                                            <div class="col-lg-10">
                                                <input type="checkbox" name="notify" value="1" id="input-notify" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2" for="input-comment">Comment</label>
                                            <div class="col-lg-10">
                                                <textarea name="comment" rows="2" id="input-comment" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2" for="input-Status"> </label>
                                            <div class="col-lg-10">
                                                <?php
                                                $fun_name_back = isset($fun_name_back)?$fun_name_back:'';
                                                ?>
                                                <button id="button-history" data-loading-text="Loading..." type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Update Status</button>
                                                <a href="<?php echo site_url($controller . "/".$fun_name_back."?page=".$page); ?>"><button type="button" class="btn btn-light" id="reset"><i class="icon-arrow-left7"></i> Back</button></a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /content area -->
                <!-- Footer -->
                <?php $this->load->view('inc_footer');?>
                <!-- /footer -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->

    </body>
    <!-- Primary modal -->
    <div id="modal_theme_primary" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title">Mark Credit Staus</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <form name="frmUpdateData" id="frmUpdateData" class="form-horizontal" action="<?php echo site_url($controller) ?>/orderdetail/<?php echo $order_uuid; ?>?page=<?php echo (isset($page))?$page:''?>" method="post" enctype="multipart/form-data">
                        <div id="err_info_div_pop" class="hidedefault alert bg-danger text-white alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                            <span class="font-weight-semibold">Warning! <span id="span_err_info_div_pop"></span> </span>
                        </div>
                        <input type="hidden" name="mode_pop" id="mode_pop" value="frmUpdateData">
                        

                        <div class="modal-body">
                        <div class="form-group row">
                                    <div class="col-sm-12">
                                    <h6 class="modal-title">Is customer paid the amount</h6>


                                        <div class="row">
                                            <label class="col-form-label col-lg-4">Credit pay status </label>
                                            <div class="col-lg-8">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input-styled-success" value="Paid" name="credit_pay_status" id="credit_pay_status1_pop" <?php if (isset($order_info['credit_pay_status']) && $order_info['credit_pay_status'] == 'Paid')  {  echo 'checked'; } ?>>
                                                        Paid
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input-styled-danger" value="Unpaid" name="credit_pay_status" id="credit_pay_status2_pop" <?php if (isset($order_info['credit_pay_status']) && $order_info['credit_pay_status'] == 'Unpaid')  {  echo 'checked'; } ?>>
                                                        Unpaid
                                                    </label>
                                                </div>
                                                <div class="hidedefault validation-invalid-label mt-2" id="error_phonenumber">Please select status</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>                                                     
                            
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="button" name="btnUpdateData" id="btnUpdateData" class="btn bg-primary">Update</button>
                        </div>





                    </form>


                </div>


            </div>
        </div>
    </div>
    <!-- /primary modal -->
    <script>
    $(document).ready(function() {
        $('.childuserpop').on('click', function(e) {
            $('#modal_theme_primary').modal('show');
        });
        $('#btnUpdateData').on('click', function(e) {
            $("#frmUpdateData").submit();
                return false;
            });

    });
    </script>

</html>