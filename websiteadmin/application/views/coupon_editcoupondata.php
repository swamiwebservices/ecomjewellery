<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('inc_metacss');?>
    <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_layouts.js"></script>
    <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datepicker.css" type="text/css" />
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
                            <a href="<?php echo site_url($controller); ?>" class="breadcrumb-item"><span
                                    class="breadcrumb-item "><?php echo (isset($title)) ? $title : '' ?></span></a>
                            <span
                                class="breadcrumb-item active"><?php echo (isset($sub_heading)) ? $sub_heading : '' ?></span>
                        </div>
                        <!-- <i href="#" class="header-elements-popup text-default d-md-none"><i class="icon-more"></i></a> -->
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

                <?php

if ($error_warning) {

 ?>
                <div class="alert bg-danger text-white alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    <span class="font-weight-semibold">Warning! </span> <?php echo $error_warning ?>
                </div>

                <?php }?>

                <!-- Basic datatable -->


                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title "><?php echo (isset($sub_heading)) ? $sub_heading : '' ?> </h5>
                    </div>
                    <div class="card-body">

                        <form name="frm-edit" id="frm-edit"
                            action="<?php echo site_url($controller . '/editcoupondata/'.$uuid) ?>" method="post"
                            enctype="multipart/form-data">


                            <input type="hidden" name="mode" id="mode" value="edit_content_add">
                            <input type="hidden" name="code_old" id="code_old"
                                value="<?php echo isset($records['code']) ? $this->common->getDbValue($records['code']) : ''; ?>">

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="name">Name :<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">

                                    <input type="text" class="form-control" id="name" name="name" placeholder=""
                                        value="<?php echo isset($records['name']) ? $this->common->getDbValue($records['name']) : ''; ?>">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="code" data-popup="tooltip" title=""
                                    data-original-title="The code the customer enters to get the discount.">Code :<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9"><input type="text" class="form-control" id="code" name="code"
                                        placeholder=""
                                        value="<?php echo isset($records['code']) ? $this->common->getDbValue($records['code']) : ''; ?>"
                                        required1> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="Type" data-popup="tooltip" title=""
                                    data-original-title="Percentage or Fixed Amount.">Type :</label>
                                <div class="col-lg-9"> <select name="type" id="input-type" class="form-control">
                                        <?php if ($type == 'P') { ?>
                                        <option value="P" selected="selected">Percentage</option>
                                        <?php } else { ?>
                                        <option value="P">Percentage</option>
                                        <?php } ?>
                                        <?php if ($type == 'F') { ?>
                                        <option value="F" selected="selected">Fixed Amount</option>
                                        <?php } else { ?>
                                        <option value="F">Fixed Amount</option>
                                        <?php } ?>
                                    </select></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="discount">Discount :<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9"><input type="text" class="form-control" id="discount"
                                        name="discount" placeholder=""
                                        value="<?php echo isset($records['discount']) ? $this->common->getDbValue($records['discount']) : ''; ?>"
                                        required1> </div>
                            </div>
                            <!--  <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="total"  data-popup="tooltip" title="" data-original-title="The total amount that must be reached before the coupon is valid.">Total Amount :</label>
                                    <div class="col-lg-9"><input type="text" class="form-control numbersOnly" id="total" name="total" placeholder="" value="<?php echo isset($records['total']) ? $this->common->getDbValue($records['total']) : ''; ?>" required1> </div>
                                </div>  -->
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="date_start">Date Start : </label>
                                <div class="col-lg-9"><input type="text" class="form-control " id="date_start"
                                        name="date_start" placeholder=""
                                        value="<?php echo (isset($records['date_end']) && $records['date_end']!='0000-00-00') ? $this->common->getDbValue($records['date_end']) : ''; ?>"
                                        required1> </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="date_end">Date End : </label>
                                <div class="col-lg-9"><input type="text" class="form-control " id="date_end"
                                        name="date_end" placeholder=""
                                        value="<?php echo (isset($records['date_end']) && $records['date_end']!='0000-00-00') ? $this->common->getDbValue($records['date_end']) : ''; ?>"
                                        required1> </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="uses_total" data-popup="tooltip" title=""
                                    data-original-title="The maximum number of times the coupon can be used by any customer. Leave blank for unlimited">Uses
                                    Per Coupon : </label>
                                <div class="col-lg-9"><input type="text" class="form-control numbersOnly" id="uses_total"
                                        name="uses_total" placeholder=""
                                        value="<?php echo isset($records['uses_total']) ? $this->common->getDbValue($records['uses_total']) : ''; ?>"
                                        required1> </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="uses_customer" data-popup="tooltip" title=""
                                    data-original-title="The maximum number of times the coupon can be used by a single customer. Leave blank for unlimited">Uses
                                    Per Customer : </label>
                                <div class="col-lg-9"><input type="text" class="form-control numbersOnly"
                                        id="uses_customer" name="uses_customer" placeholder=""
                                        value="<?php echo isset($records['uses_customer']) ? $this->common->getDbValue($records['uses_customer']) : ''; ?>"
                                        required1> </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="status">Status : </label>
                                <div class="col-lg-9">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input-styled-success" value="Active"
                                                name="status" id="status1" checked>
                                            Active
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input-styled-danger" value="Inactive"
                                                name="status" id="status2">
                                            In-Active
                                        </label>
                                    </div>
                                    <div class="hidedefault validation-invalid-label mt-2" id="error_phonenumber">Please
                                        select status</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"></label>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn bg-blue">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                    <a href="<?php echo site_url($back_link ); ?>" class="breadcrumb-elements-item">
                                        <button type="button" class="btn btn-light ml-2"><i
                                                class="icon-arrow-left7"></i>
                                            Back</button>
                                    </a>
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
    <script type="text/javascript">
    $(document).ready(function() {
        //	jQuery('form').parsley();
        $('#date_start').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd",
            todayHighlight: true
        });

        $('#date_end').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd",
            todayHighlight: true
        });
        // month selector
        /*  $('.datepicker').datepicker({
                       autoclose: true,
                       maxViewMode: 0,
                       minViewMode: 1,
                       format: 'mm',

                   }); */

    });
    </script>
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
            if (!$("#code").val()) {
                isError = true;
                // $("#error_mobile_number1").show()
                $("#code").addClass("border-danger");
            }
            if (!$("#discount").val()) {
                isError = true;
                // $("#error_mobile_number1").show()
                $("#discount").addClass("border-danger");
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