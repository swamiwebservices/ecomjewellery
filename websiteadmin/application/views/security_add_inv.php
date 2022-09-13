<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view('inc_metacss');?>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_layouts.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/picker_date.js"></script>

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
                                <a href="<?php echo site_url($controller.'/inventory'); ?>" class="breadcrumb-item"><span class="breadcrumb-item "><?php echo (isset($title)) ? $title : '' ?></span></a>
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
                        <form name="frm-edit" id="frm-edit" action="<?php echo site_url($controller . '/addinv/') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="mode" id="mode" value="submitform">

								<div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="driver_id">Date :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
										<input type="text" name="inv_date" id="inv_date" class="form-control daterange-single" value="<?php echo date('m/d/Y')?>">
									</div>
                                    </div>
                                </div>                                
                                
								<div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="driver_id">Vehicle :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="vehicle_id" id="vehicle_id" required1>
											<option value="">Select vehicle</option>
                                            <?php foreach ($vehicle as $key => $value) {
			$chk_sql = "SELECT * FROM  inventory_master    where  vehicle_id = '" . $value['id'] . "' AND inv_date='".date('Y-m-d')."' AND check_in_secu=0 AND check_out_secu=0 ";
            $query = $this->db->query($chk_sql);
												if ($query->num_rows()== 0) {												
												 ?>
                                            <option value="<?php echo $this->common->getDbValue($value['id']); ?>"><?php echo $this->common->getDbValue($value['name']); ?> (<?php echo $this->common->getDbValue($value['number_plate']); ?>)</option> 
                                            <?php } } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="driver_id">Driver :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="driver_id" id="driver_id" required1>
											<option value="">Select Driver</option>
                                            <?php foreach ($drivers as $key => $value) {
			$chk_sql = "SELECT * FROM  inventory_master    where  driver_id = '" . $value['user_id'] . "' AND inv_date='".date('Y-m-d')."' AND check_in_secu=0 AND check_out_secu=0 ";
            $query = $this->db->query($chk_sql);
												//if ($query->num_rows()== 0) {
												 ?>
                                            <option value="<?php echo $this->common->getDbValue($value['user_id']); ?>##<?php echo $this->common->getDbValue($value['qr_code']); ?>"><?php echo $this->common->getDbValue($value['name']);?> (<?php echo $this->common->getDbValue($value['user_type']);?>) (<?php echo $this->common->getDbValue($value['status']);?>)</option> 
                                            <?php } 
											
											//} ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="status">Status :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input-styled-success" value="Active" name="status" id="status1" checked>
                                                Active
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input-styled-danger" value="Inactive" name="status" id="status2">
                                                In-Active
                                            </label>
                                        </div>
                                        <div class="hidedefault validation-invalid-label mt-2" id="error_phonenumber">Please select status</div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2"></label>
                                    <div class="col-lg-9">
                                        <button type="submit" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
                                        <a href="<?php echo site_url($controller.'/inventory'); ?>"><button type="button" class="btn btn-light  ml-2">Cancel</button></a>
                                    </div>
                                </div>
                            </form>
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
        <script>
        
        $(document).ready(function() {

            $(".form-control").removeClass("border-danger");
            $("#frm-edit").submit(function(e) {
                var isError = false;
                var errMsg = "";
                var errMsg_alert = "";
                $(".form-control").removeClass("border-danger");

                if (!$("#inv_date").val()) {
                    isError = true;
                    //$("#error_first_name").show()
                    $("#inv_date").addClass("border-danger");

                }

                if (!$("#driver_id").val()) {
                    isError = true;
                    //$("#error_first_name").show()
                    $("#driver_id").addClass("border-danger");

                }

                if (!$("#vehicle_id").val()) {
                    isError = true;
                    //$("#error_first_name").show()
                    $("#vehicle_id").addClass("border-danger");

                }
				
                /*if (!$("#inv_qr_code").val()) {
                    isError = true;
                    // $("#error_mobile_number1").show()
                    $("#inv_qr_code").addClass("border-danger");
                }*/
                
                //frd_email
                if (isError) {
                    return false;
                } else {
                    $("#frm-edit").submit();
                }

                return false;
            });


        });
        </script>
    </body>

</html>