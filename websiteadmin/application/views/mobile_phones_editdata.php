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
                            <form name="frm-edit" id="frm-edit" action="<?php echo site_url($controller . '/editdata/'.$uuid) ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="mode" id="mode" value="submitform">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="name">Mobile- Model :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9"><input type="text" class="form-control" id="name" name="name" placeholder="Samsung Galaxy A50" value="<?php echo isset($records['name']) ? $this->common->getDbValue($records['name']) : ''; ?>">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="company">Company :</label>
                                    <div class="col-lg-9"><input type="text" class="form-control" id="company" name="company" placeholder="Samsung" value="<?php echo isset($records['company']) ? $this->common->getDbValue($records['company']) : ''; ?>" required1> </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="imei1">IMEI Number :</label>
                                    <div class="col-lg-9"><input type="text" class="form-control" id="imei1" name="imei1" placeholder="IMEI Number" value="<?php echo isset($records['imei1']) ? $this->common->getDbValue($records['imei1']) : ''; ?>" required1> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="serial_number">Serial Number :</label>
                                    <div class="col-lg-9"><input type="text" class="form-control" id="serial_number" name="serial_number" placeholder="Serial Number" value="<?php echo isset($records['serial_number']) ? $this->common->getDbValue($records['serial_number']) : ''; ?>" required1> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="mobile_number1">Mobile Number :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9"><input type="text" class="form-control numbersOnly" id="mobile_number1" name="mobile_number1" placeholder="Enter Mobile Number" value="<?php echo isset($records['mobile_number1']) ? $this->common->getDbValue($records['mobile_number1']) : ''; ?>" required1> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="driver_security_id">Select Driver/Sec :</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="driver_security_id" id="driver_security_id" required1>

                                            <?php   $this->common->get_driverlist((isset($records['driver_security_id']))?$records['driver_security_id']:'0')?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="status">Status :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input-styled-success" value="Active" name="status" id="status1" <?php if (isset($records['status']) && $records['status'] == 'Active')  {  echo 'checked'; } ?>>
                                                Active
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input-styled-danger" value="Inactive" name="status" id="status2" <?php if (isset($records['status']) && $records['status'] == 'Inactive')  {  echo 'checked'; } ?>>
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
                                        <a href="<?php echo site_url($controller); ?>"><button type="button" class="btn btn-light  ml-2">Cancel</button></a>
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


                if (!$("#name").val()) {
                    isError = true;
                    //$("#error_name").show()
                    $("#name").addClass("border-danger");

                }
                if (!$("#mobile_number1").val()) {
                    isError = true;
                    // $("#error_mobile_number1").show()
                    $("#mobile_number1").addClass("border-danger");
                }



                /*  if (!$("#mobile_number1").val() || !validateMobile(($("#mobile_number1").val()))) {
                     isError = true;
                     $("#mobile_number1").addClass("border-danger");
                 } */

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