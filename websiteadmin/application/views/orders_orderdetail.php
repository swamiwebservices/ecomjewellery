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
                            <a href="<?php echo site_url("home");?>" class="breadcrumb-item"><i
                                    class="icon-home2 mr-2"></i> Home</a>
                            <a href="<?php echo site_url($this->ctrl_name);?>" class="breadcrumb-item"><span
                                    class="breadcrumb-item "><?php echo (isset($this->pg_title))?$this->pg_title:''?></span></a>
                            <span
                                class="breadcrumb-item active"><?php echo (isset($sub_heading))?$sub_heading:''?></span>
                        </div>
                        <!-- <i href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a> -->
                    </div>
                    <div class="header-elements d-none">
                        <div class="breadcrumb justify-content-center">

                            <a href="<?php echo site_url($back_link ); ?>" class="breadcrumb-elements-item">
                                <button type="button" class="btn btn-light btn-sm"><i class="icon-arrow-left7"></i>
                                    Back</button>
                            </a>
                        </div>
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

                        <div class="pull-left">
                            <h5 class="card-title "><?php echo (isset($sub_heading)) ? $sub_heading : '' ?> </h5>
                        </div>
                        <div class=" pull-right">
                            <!-- <a href="<?php echo site_url("orders/printinvoice/".$order_info['order_id']);?>" target="_blank"><i
                                    class="fa fa-print"></i></a> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="order-id"> <strong>Order ID:</strong>
                                    #<?php echo $order_info['invoice_no']; ?></p>
                            </div>
                            <div class="col-md-4">
                                <p class="placed-on"><strong><i class="fa fa-calendar fa-fw"></i> Placed on
                                    </strong><?php echo $order_info['date_added']; ?>
                                </p>
                            </div>
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
                        <div class="container-fluid">

                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="panel-body">

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td class="text-left"><strong>Product</strong></td>
                                                    <td class="text-left"><strong>Model</strong></td>
                                                    <td class="text-right"><strong>Quantity</strong></td>
                                                    <td class="text-right"><strong>Unit Price</strong></td>
                                                    <td class="text-right"><strong>Total</strong></td>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			if(isset($products)){
				 
			 foreach ($products as $product) {
				  
				  ?>
                                                <tr>
                                                    <td class="text-left"><?php echo $product['name']; ?>

                                                    </td>
                                                    <td class="text-left"><?php echo $product['model']; ?></td>
                                                    <td class="text-right"><?php echo $product['quantity']; ?>
                                                    </td>
                                                    <td class="text-right"><?php echo $product['price']; ?></td>
                                                    <td class="text-right"><?php echo $product['total']; ?></td>

                                                </tr>
                                                <?php }
			}
			 ?>

                                            </tbody>
                                        </table>
                                        <?php if ($order_info['comment']) { ?>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <h4 style="font-size:15px">Comment</h4>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $order_info['comment']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="header-title"><i class="fa fa-comment-o"></i> Order History</h4>
                                </div>
                                <div class="panel-body">
                                    <div id="history"></div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>

                                                    <td class="text-left">Date Added</td>
                                                    <td class="text-left">Comment</td>
                                                    <td class="text-left">Status</td>
                                                    <td class="text-left">Customer Notified</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (isset($histories)) { ?>
                                                <?php foreach ($histories as $history) { ?>
                                                <tr>

                                                    <td class="text-left"><?php echo $history['date_added']; ?>
                                                    </td>
                                                    <td class="text-left">
                                                        <div style="max-width:400px; overflow:auto">
                                                            <?php echo $history['comment']; ?></div>
                                                    </td>
                                                    <td class="text-left"><?php echo $history['status']; ?></td>
                                                    <td class="text-left"><?php echo $history['notify']; ?></td>
                                                </tr>
                                                <?php } ?>
                                                <?php } else { ?>
                                                <tr>
                                                    <td class="text-center" colspan="4">No Result</td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br />
                                    <fieldset>
                                        <legend>
                                            <h4 style="font-size:15px">Add Order History</h4>
                                        </legend>
                                        <form class="form-horizontal"
                                            action="<?php echo site_url($controller)?>/orderdetail/<?php echo $order_info['uuid'];?>"
                                            name="updateOrderStatus" id="updateOrderStatus" method="post">
                                            <input type="hidden" name="mode" id="mode"
                                                value="edit_content_updatestatus">

                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label" for="input-order-status">Order
                                                    Status</label>
                                                <div class="col-sm-10">
                                                    <select name="order_status_id" id="input-order-status"
                                                        class="form-control">
                                                        <?php foreach ($order_statuses as $order_statuses) { ?>
                                                        <?php if ($order_statuses['order_status_id'] == $order_status_id) { ?>
                                                        <option
                                                            value="<?php echo $order_statuses['order_status_id']; ?>"
                                                            selected="selected">
                                                            <?php echo $order_statuses['name']; ?></option>
                                                        <?php } else { ?>
                                                        <option
                                                            value="<?php echo $order_statuses['order_status_id']; ?>">
                                                            <?php echo $order_statuses['name']; ?></option>
                                                        <?php } ?>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label" for="input-notify">Notify
                                                    Customer</label>
                                                <div class="col-sm-10">
                                                    <input type="checkbox" name="notify" value="1" id="input-notify" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"
                                                    for="input-comment">Comment</label>
                                                <div class="col-sm-10">
                                                    <textarea name="comment" rows="2" id="input-comment"
                                                        class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label" for="input-Status">
                                                </label>
                                                <div class="col-sm-10">
                                                    <button id="button-history" data-loading-text="Loading..."
                                                        type="submit" class="btn btn-primary"><i
                                                            class="fa fa-plus-circle"></i> Update
                                                        Status</button>
                                                </div>
                                            </div>
                                        </form>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!---new area -->

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

                <form name="frmUpdateData" id="frmUpdateData" class="form-horizontal"
                    action="<?php echo site_url($controller) ?>/orderdetail/<?php echo $order_uuid; ?>?page=<?php echo (isset($page))?$page:''?>"
                    method="post" enctype="multipart/form-data">
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
                                                <input type="radio" class="form-check-input-styled-success" value="Paid"
                                                    name="credit_pay_status" id="credit_pay_status1_pop"
                                                    <?php if (isset($order_info['credit_pay_status']) && $order_info['credit_pay_status'] == 'Paid')  {  echo 'checked'; } ?>>
                                                Paid
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input-styled-danger"
                                                    value="Unpaid" name="credit_pay_status" id="credit_pay_status2_pop"
                                                    <?php if (isset($order_info['credit_pay_status']) && $order_info['credit_pay_status'] == 'Unpaid')  {  echo 'checked'; } ?>>
                                                Unpaid
                                            </label>
                                        </div>
                                        <div class="hidedefault validation-invalid-label mt-2" id="error_phonenumber">
                                            Please select status</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="button" name="btnUpdateData" id="btnUpdateData"
                            class="btn bg-primary">Update</button>
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