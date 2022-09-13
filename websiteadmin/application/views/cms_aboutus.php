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
                            <form name="frm-edit" id="frm-edit" action="<?php echo site_url($controller . '/'.$funcationname) ?>" method="post" enctype="multipart/form-data"  >
                                <input type="hidden" name="mode" id="mode" value="submitform">
                                <input type="hidden" name="section" id="section" value="aboutus">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="heading">Heading :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9"><input type="text" class="form-control " id="heading" name="heading" placeholder="heading Eng" value="<?php echo isset($records['heading'])?$this->common->getDbValue($records['heading']):''; ?>">
                                        <!-- <div id="basic-error" class="validation-invalid-label" for="basic">This field is required.</div> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="details">Details :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                    <textarea rows="15" cols="3" class="form-control" placeholder="details" id="details" name="details"><?php echo isset($records['details'])?$this->common->getDbValue($records['details']):''; ?></textarea>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="heading_en">Heading Eng :</label>
                                    <div class="col-lg-9"><input type="text" class="form-control " id="heading_en" name="heading_en" placeholder="Question Eng" value="<?php echo isset($records['heading_en'])?$this->common->getDbValue($records['heading_en']):''; ?>">
                                        <!-- <div id="basic-error" class="validation-invalid-label" for="basic">This field is required.</div> -->
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="details_en">Details Eng :</label>
                                    <div class="col-lg-9">
                                    <textarea rows="15" cols="3" class="form-control" placeholder="Answer Eng" id="details_en" name="details_en"><?php echo isset($records['details_en'])?$this->common->getDbValue($records['details_en']):''; ?></textarea>

                                    </div>
                                </div>
                                
                             
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2"></label>
                                    <div class="col-lg-9">
                                        <button type="submit" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
                                        
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


                if (!$("#heading").val()) {
                    isError = true;
                    //$("#error_name").show()
                    $("#heading").addClass("border-danger");

                }
              
                if (!$("#details").val()) {
                    isError = true;
                    //$("#error_name").show()
                    $("#details").addClass("border-danger");

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