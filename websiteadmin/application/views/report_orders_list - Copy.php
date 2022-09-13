<?php
  $session_user_data = $this->session->userdata('user_data');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view('inc_metacss');?>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/datatables_responsive.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/notifications/bootbox.min.js"></script>
        <!-- 	    <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
 -->
        <!-- <script src="<?php echo base_url() ?>global_assets/js/demo_pages/components_modals.js"></script> -->
        <!-- /theme JS files -->
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
                                <span class="breadcrumb-item "><?php echo (isset($title)) ? $title : '' ?></span>
                                <span class="breadcrumb-item active"><?php echo (isset($sub_heading)) ? $sub_heading : '' ?></span>
                            </div>

                            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                        </div>

                        <div class="header-elements d-none">
                            <div class="breadcrumb justify-content-center">


                            </div>
                        </div>
                    </div>

                </div>
                <!-- /page header -->
                <div class="content">
                    <!-- 2 columns form -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Orders</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>

                                </div>
                            </div>
                        </div>
                        <div class="card-body collapse1">
                            <form name="frm-edit" id="frm-edit" action="<?php echo site_url($controller . '/condtion/') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="mode" id="mode" value="submitform">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Order Id:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="order_id" placeholder="Order Id">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Order Status:</label>
                                            <div class="col-lg-9">
                                                <select data-placeholder="Select Status" name="order_status_id" class="form-control form-control-select2">
                                                    <option value="">All </option>
                                                    <option value="1">New Order </option>
                                                    <option value="2,3">Pending </option>
                                                    <option value="4">Complted</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Payment Method:</label>
                                            <div class="col-lg-9">
                                                <select data-placeholder="Select   Method" name="payment_method" class="form-control form-control-select2">
                                                    <option value="">All </option>
                                                    <option value="COD">COD </option>
                                                    <option value="Credit">Credit </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Customer:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="customer" placeholder="mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Driver:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="driver" placeholder="mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Date Range:</label>
                                            <div class="col-lg-9">
                                                <div class="input-group">

                                                    <input type="text" name="date_range" class="form-control daterange-left" value="03/18/2013 - 03/23/2013">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /2 columns form -->

                </div>
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
                    <div class="card  ">
                        <?php
if (isset($oderlist) && sizeof($oderlist) > 0) {
    ?>
                        <table class="table table-hover datatablecustom">
                            <thead>
                                <tr class="bg-blue ">

                                    <th style="width:2%">#</th>
                                    <th style="width:auto">Customer</th>
                                    <th style="width:auto">Dist</th>
                                    <th style="width:auto">Total</th>
                                    <th style="width:auto">Mode</th>
                                    <th>Order Date</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
$i = 0;
    foreach ($oderlist as $key => $value) {
        $i++;
        ?>
                                <tr>
                                    <td><?php echo stripslashes($value['invoice_no']) ?></td>
                                    <td><?php echo stripslashes($value['payment_firstname']) ?> <?php echo stripslashes($value['payment_lastname']) ?></td>

                                    <td><?php echo stripslashes($value['shipping_district_name']) ?></td>



                                    <td><?php echo $this->currencymodal->format($value['total'], currency_code, 1);

        ?></td>
                                    <td><?php echo stripslashes($value['payment_method']) ?></td>
                                    <td>
                                        <?php echo $this->common->getDateFormat($value['date_added'], 'd-m-Y h:i A'); ?>
                                    </td>
                                    <td><?php echo stripslashes($value['rating']) ?></td>
                                    <td><?php echo stripslashes($value['order_satus_name']) ?></td>
                                    <td><a href="<?php echo site_url($controller . '/orderdetail/' . $value['oorder_uid']."?l_s_act=".$l_s_act."&page=".$page) ?>">View</a>

                                        <!-- <a href="<?php echo site_url($controller . '/deleteorderdata/' . $value['oorder_uid']) ?>" onClick="return confirm('Are you sure you want to delete this record?');">Delete</a> -->
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <?php } else {
    ?>
                        <div class=" text-center  card-body border-top-info1">
                            No record found
                        </div>
                        <?php
}?>


                    </div>
                    <!-- /basic datatable -->
                </div>
                <!-- /content area -->
                <!-- Footer -->
                <?php $this->load->view('inc_footer');?>
                <!-- /footer -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->
        <script>
        // Custom bootbox dialog
        $('.bootbox_custom').on('click', function() {
            var uuid = $(this).data("uuid") // will return the number 123
            bootbox.confirm({
                title: 'Confirm ',
                message: 'Are you sure you want to delete selected records ?',
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'Cancel',
                        className: 'btn-link'
                    }
                },
                callback: function(result) {
                    if (result) {

                        location.href = "<?php echo site_url($controller . '/delete_data/') ?>" + uuid;


                    }
                }
            });
        });

        // Scrollable datatable
        var table = $('.datatablecustom').DataTable({
            columnDefs: [{
                orderable: false,
                targets: [0]
            }],
            autoWidth: true,

            scrollX: true,
            scrollY: '70vh',
            scrollCollapse: false,
            "paging": false,
            "bLengthChange": false, //thought this line could hide the LengthMenu
            "bInfo": true,
            "aaSorting": [],
            'columnDefs': [{
                "targets": [2, 5],
                "orderable": false
            }]
        });

        // Show calendars on left
        $('.daterange-left').daterangepicker({
            opens: 'left',
            applyClass: 'bg-slate-600',
            cancelClass: 'btn-light'
        });
        </Script>
    </body>

</html>