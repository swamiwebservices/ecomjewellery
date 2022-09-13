<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view('inc_metacss');?>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_layouts.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
        <style>
                    
                    .image-preview-input {
                        position: relative;
                        overflow: hidden;
                        margin: 0px;    
                        color: #333;
                        background-color: #fff;
                        border-color: #ccc;    
                    }
                    .image-preview-input input[type=file] {
                        position: absolute;
                        top: 0;
                        right: 0;
                        margin: 0;
                        padding: 0;
                        font-size: 20px;
                        cursor: pointer;
                        opacity: 0;
                        filter: alpha(opacity=0);
                    }
                    .image-preview-input-title {
                        margin-left:2px;
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
                            <form name="frm-edit" id="frm-edit" action="<?php echo site_url($controller . '/editdata/'.$uuid) ?>" method="post" enctype="multipart/form-data"  >
                                <input type="hidden" name="mode" id="mode" value="submitform">
                                <input type="hidden" name="email_old" id="email_old" value="<?php echo isset($records['email']) ? $this->common->getDbValue($records['email']) : ''; ?>">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="first_name">First Name :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9"><input type="text" class="form-control" id="first_name" name="first_name" placeholder="" value="<?php echo isset($records['first_name']) ? $this->common->getDbValue($records['first_name']) : ''; ?>">

                                    </div>
                                </div>
                                
								<div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="first_name">Middle Name :</label>
                                    <div class="col-lg-9"><input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="" value="<?php echo isset($records['middle_name']) ? $this->common->getDbValue($records['middle_name']) : ''; ?>">

                                    </div>
                                </div>
                                                                
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="last_name">Last Name :</label>
                                    <div class="col-lg-9"><input type="text" class="form-control" id="last_name" name="last_name" placeholder="" value="<?php echo isset($records['last_name']) ? $this->common->getDbValue($records['last_name']) : ''; ?>"   required1> </div>
                                </div>
                                    <?php 
										if($records['profile_pic']!=''){
											$photo = back_path.'uploads/profile_pics/'.stripslashes($records['profile_pic']);
										} else {
											$photo = 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image';	
										}
									?> 
<div class="form-group row">
                                    <label class="col-md-2 control-label"> Photo </label>
                                    <div class="col-md-10">
                                        <div class="row col-md-5">
                                            <img src="<?php echo $photo?>" id="temppreviewimageki1" class="temppreviewimageki1" style="width:200px; height:auto;display:none1"> </div>
                                        <div class="row col-md-10">

                                            <div class="input-group image-preview1">

                                                <input type="text" class="form-control image-preview-filename1" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                                <span class="input-group-btn">
                                                    <!-- image-preview-clear button -->
                                                    <button type="button" class="btn btn-default image-preview-clear image-preview-clear1" style="display:none;" id=1>
                                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                                    </button>
                                                    <!-- image-preview-input -->
                                                    <div class="btn btn-default image-preview-input">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        <span class="image-preview-input-title image-preview-input-title1">Browse</span>
                                                        <input type="file" accept="image/png, image/jpeg, image/gif" class="browseimage" id="1" name="profile_pic" /> <!-- rename it -->

                                                    </div>
                                                </span>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                            <label class="col-form-label col-lg-2" for="bo_ice_id">Bo Ice Id :</label>
                                            <div class="col-lg-9"><input type="text" class="form-control" id="bo_ice_id" name="bo_ice_id" placeholder="" value="<?php echo isset($records['bo_ice_id']) ? $this->common->getDbValue($records['bo_ice_id']) : ''; ?>" required1> </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="gender">Gender :</label>
                                    <div class="col-lg-9">   <select class="form-control" name="gender" id="gender" required1>
                                        	<option value=''>Select gender</option>
                                        
	                                        <option value='Male' <?php echo ($records['gender']=='Male') ? ' selected' : ''; ?>> Male</option>
                                            <option value='Female' <?php echo ($records['gender']=='Female') ? ' selected' : ''; ?>> Female</option>
                                        </select> </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="age">Age :</label>
                                    <div class="col-lg-9"><input type="text" class="form-control" id="age" name="age" placeholder="" value="<?php echo isset($records['age']) ? $this->common->getDbValue($records['age']) : ''; ?>" required1> </div>
                                </div>
                                                                                                
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="email">Email :</label>
                                    <div class="col-lg-9"><input type="text" class="form-control" id="email" name="email" placeholder="" value="<?php echo isset($records['email']) ? $this->common->getDbValue($records['email']) : ''; ?>" required1> </div>
                                </div>
                              
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="state_id">State :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="state_id" id="state_id" onchange="get_district(this.value);" required1>
                                            <?php echo $this->common->getState(isset($records['state_id'])?$records['state_id']:'1')?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="district_id">District :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="district_id" id="district_id" required1>

                                            <?php echo  $this->common->get_district((isset($records['state_id']))?$records['state_id']:'1',(isset($records['district_id']))?$records['district_id']:'0')?>
                                        </select>
                                    </div>  
                                </div>
                               <!--  <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="mobile_device_id">Mobile Device :</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="mobile_device_id" id="mobile_device_id" required1>

                                            <?php  //  $this->common->get_mobiledevice((isset($records['mobile_device_id']))?$records['mobile_device_id']:'0')?>
                                        </select>
                                    </div>  
                                </div>   -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="mobile">Mobile Number :</label>
                                    <div class="col-lg-9"><input type="text" class="form-control numbersOnly" id="mobile" name="mobile" placeholder="" value="<?php echo isset($records['mobile']) ? $this->common->getDbValue($records['mobile']) : ''; ?>" required1> </div>
                                </div>
                                <div class="form-group row">
                                <?php
                                      $status = isset($records['status']) ? $records['status'] : 'Active' 
                                    ?>
                                    <label class="col-form-label col-lg-2" for="status">Status :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input-styled-success" value="Active" name="status" id="status1"  <?php echo ($status=='Active')?' checked':''?>>
                                                Active
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input-styled-danger" value="Inactive" name="status" id="status2"  <?php echo ($status=='Inactive')?' checked':''?>>
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
                            <form class="form-horizontal" action="<?php echo site_url($controller.'/editdata/'.$uuid) ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="mode" id="mode" value="edit_content_password">

                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Edit Login Details</legend>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2" for="email">Email :<span class="text-danger">*</span></label>
                                        <div class="col-lg-9"><input type="text" class="form-control" id="email" name="email" placeholder="Enter Email abc@abc.com" value="<?php echo isset($records['email'])?$this->common->getDbValue($records['email']):''; ?>" autocomplete="off" required readonly></div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2" for="email">Password :<span class="text-danger">*</span></label>
                                        <div class="col-lg-9"><input type="password" class="form-control" id="login_password" name="login_password" placeholder="Enter Password" value=""  autocomplete="off" required> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2"></label>
                                        <div class="col-lg-9">
                                            <button type="submit" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
                                            <a href="<?php echo site_url($controller);?>"><button type="button" class="btn btn-light  ml-2">Cancel</button></a>
                                        </div>
                                    </div>
                                </fieldset>
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
    function get_district(val) {
            //alert(val);
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('common_ajax/get_district/')?>" + val + "/0",
                data: 'state_id=' + val,
                success: function(data) {
                    //alert(data);
                    $("#district_id").html(data);
                }
            });
        }
        $(document).ready(function() {
           
            $(".form-control").removeClass("border-danger");
            $("#frm-edit").submit(function(e) {
                var isError = false;
                var errMsg = "";
                var errMsg_alert = "";
                $(".form-control").removeClass("border-danger");


                if (!$("#first_name").val()) {
                    isError = true;
                    //$("#error_first_name").show()
                    $("#first_name").addClass("border-danger");

                }
                if (!$("#last_name").val()) {
                    isError = true;
                    // $("#error_mobile_number1").show()
                    $("#last_name").addClass("border-danger");
                }
                if (!$("#state_id").val()) {
                    isError = true;
                    // $("#error_mobile_number1").show()
                    $("#state_id").addClass("border-danger");
                }
                if (!$("#district_id").val()) {
                    isError = true;
                    // $("#error_mobile_number1").show()
                    $("#district_id").addClass("border-danger");
                }  
               if (!$("#email").val()) {
                    isError = true;
                    // $("#error_mobile_number1").show()
                    $("#email").addClass("border-danger");
                }  
                  if (!$("#email").val() || !validateEmail(($("#email").val()))) {
                     isError = true;
                     $("#email").addClass("border-danger");
                 }   
                 if (!$("#mobile").val() ) {
                     isError = true;
                     $("#mobile").addClass("border-danger");
                 }  
              /*   if (!$("#password").val()) {
                    isError = true;
                    // $("#error_mobile_number1").show()
                    $("#password").addClass("border-danger");
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
        
        <script type="text/javascript">
        jQuery(document).ready(function($) {






            $(function() {


                //image 1
                // Create the close button
                var closebtn1 = $('<button/>', {
                    type: "button",
                    text: 'x',
                    id: 'close-preview1',
                    style: 'font-size: initial;',
                });
                closebtn1.attr("class", "close pull-right");
                // Set the popover default content
                $('.image-preview1').popover({
                    trigger: 'manual',
                    html: true,
                    title: "<strong>Preview</strong>" + $(closebtn1)[0].outerHTML,
                    content: "There's no image",
                    placement: 'bottom'
                });
                // Clear event
                $('.image-preview-clear').click(function() {
                    var imgid = $(this).attr('id');
                    $('.image-preview' + imgid).attr("data-content", "").popover('hide');
                    $('.image-preview-filename' + imgid).val("");
                    $('.image-preview-clear' + imgid).hide();
                    //$('.image-preview-input input:file').val("");
                    $(".image-preview-input-title" + imgid).text("Browse");
                    $(".temppreviewimageki" + imgid).attr("src", '');
                    $(".temppreviewimageki" + imgid).hide();
                });
                // Create the preview image
                $(".browseimage").change(function() {
                    var img = $('<img/>', {
                        id: 'dynamic',
                        width: 250,
                        height: 200,
                    });
                    var imgid = $(this).attr('id');
                    var file = this.files[0];
                    var reader = new FileReader();
                    // Set preview image into the popover data-content
                    reader.onload = function(e) {

                        $(".image-preview-input-title" + imgid).text("Change");
                        $(".image-preview-clear" + imgid).show();
                        $(".image-preview-filename" + imgid).val(file.name);
                        img.attr('src', e.target.result);

                        $(".temppreviewimageki" + imgid).attr("src", $(img)[0].src);
                        $(".temppreviewimageki" + imgid).show();
                        //img.attr('src', e.target.result);
                        //alert(e.target.result);
                        ///alert($(img)[0].outerHTML);
                        //$(".image-preview1").attr("data-content",$(img)[0].outerHTML).popover("show");
                    }
                    reader.readAsDataURL(file);
                });
                //end  
            });
        });

        // TableManageButtons.init();
        </script>           
    </body>

</html>