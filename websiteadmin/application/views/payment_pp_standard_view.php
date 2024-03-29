<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('inc_metacss');?>
    <script src="<?php echo base_url()?>global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url()?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="<?php echo base_url()?>global_assets/js/demo_pages/datatables_responsive.js"></script>
    <script src="<?php echo base_url()?>global_assets/js/plugins/notifications/bootbox.min.js"></script>
    <!-- 	    <script src="<?php echo base_url()?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
 -->
    <!-- <script src="<?php echo base_url()?>global_assets/js/demo_pages/components_modals.js"></script> -->
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
                            <a href="<?php echo site_url("home"); ?>" class="breadcrumb-item"><i
                                    class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item "><?php echo (isset($title)) ? $title : '' ?></span>
                            <span
                                class="breadcrumb-item active"><?php echo (isset($sub_heading)) ? $sub_heading : '' ?></span>
                        </div>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
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
                    <span class="font-weight-semibold">Success! </span><?php echo $success?>
                </div>
                <?php }?>
                <?php
						$error = $this->session->flashdata('error');
						if ($error) {
					?>
                <div class="alert bg-danger text-white alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    <span class="font-weight-semibold">Error! </span> <?php echo $error?>
                </div>
                <?php }?>
                <?php
						$warning = $this->session->flashdata('warning');
						if ($warning) {
					?>
                <div class="alert bg-danger text-white alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    <span class="font-weight-semibold">Warning! </span> <?php echo $warning?>
                </div>
                <?php }?>
                <!-- Basic datatable -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title"><?php echo (isset($sub_heading))?$sub_heading:''?> </h6>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url($controller.'')?>" method="post" enctype="multipart/form-data"
                            id="form-bank-transfer" class="form-horizontal">
                            <input type="hidden" name="mode" id="mode" value="edit_content">
                            <input type="hidden" name="mode" id="mode" value="edit_content">
                            <input type="hidden" name="pp_standard_total" value="1">
                            <input type="hidden" name="pp_standard_debug" value="0">
                            <input type="hidden" name="pp_standard_geo_zone_id" value="0">
                            <input type="hidden" name="pp_standard_order_status_id" value="1">
                            <input type="hidden" name="pp_standard_transaction" value="1">

                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="entry-email">E-Mail</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="pp_standard_email"
                                        value="<?php echo isset($records['pp_standard_email']) ? $records['pp_standard_email'] : ''; ?>"
                                        placeholder="E-Mail" id="entry-email" class="form-control" />

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="input-live-demo"><span data-toggle="tooltip"
                                        title="Use the live or testing (sandbox) gateway server to process transactions?">Sandbox
                                        Mode</span></label>
                                <div class="col-sm-10">
                                    <select name="pp_standard_test" id="input-live-demo" class="form-control">
                                        <?php
					$pp_standard_test =  isset($records['pp_standard_test']) ? $records['pp_standard_test'] : '0';
					?>
                                        <?php if ($pp_standard_test) { ?>
                                        <option value="1" selected="selected">Yes</option>
                                        <option value="0">No</option>
                                        <?php } else { ?>
                                        <option value="1">Yes</option>
                                        <option value="0" selected="selected">No</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                      
                           
                             
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="input-status">Status</label>
                                <div class="col-sm-10">
                                    <select name="pp_standard_status" id="input-status" class="form-control">
                                        <?php
						$pp_standard_status =  isset($records['pp_standard_status']) ? $records['pp_standard_status'] : '';
					?>
                                        <?php if ($pp_standard_status) { ?>
                                        <option value="1" selected="selected">Enabled</option>
                                        <option value="0">Disabled</option>
                                        <?php } else { ?>
                                        <option value="1">Enabled</option>
                                        <option value="0" selected="selected">Disabled</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="input-sort-order">Sort
                                    Order</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pp_standard_sort_order"
                                        value="<?php echo isset($records['pp_standard_sort_order']) ? $records['pp_standard_sort_order'] : ''; ?>"
                                        placeholder="Sort Order" id="input-sort-order" class="form-control" />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-2 control-label"> </label>
                                <div class="col-md-10">
                                    <button type="submit" name="btnsubmit" value="btnsubmit"
                                        class="btn bg-blue waves-effect waves-light">Submit</button>
                                    <a href="<?php echo site_url($back_link);?>" <button type="button"
                                        class="btn btn-light ml-2"><i class="icon-arrow-left7"></i>
                                        Back</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
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


    </Script>
</body>

</html>