<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view('inc_metacss');?>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/datatables_responsive.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/notifications/bootbox.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_floating_labels.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/editor_ckeditor.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_controls_extended.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_layouts.js"></script>

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
                                 <a href="<?php echo site_url($this->controller . "/sociallinks"); ?>" class="breadcrumb-elements-item">
                                    <button type="button" class="btn btn-light btn-sm"><i class="icon-arrow-left7"></i> Back</button>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Table header styling -->
                    <div class="card">


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
                        <!-- Text inputs -->

                        <div class="card-header header-elements-inline">
                            <h5 class="card-title"><?php echo (isset($sub_heading)) ? $sub_heading : '' ?></h5>
                            <div class="header-elements">

                            </div>
                        </div>

                        <div class="card-body">
                        <form class="form-horizontal" action="<?php echo site_url('sitecontrol/sitelogo') ?>" method="post" enctype="multipart/form-data">  
                              
                              <input type="hidden" name="mode" id="mode" value="edit_content">
                            
                         <input type="hidden"   name="config_logo_old" value="<?php echo isset($records['config_logo']) ? $records['config_logo'] : ''; ?>">
                                                 
                         <input type="hidden"   name="config_logo_footer_old" value="<?php echo isset($records['config_logo_footer']) ? $records['config_logo_footer'] : ''; ?>">
                              
                              
                       
                         <?php 
										if(!empty($records['config_logo'])){
											$photo =  back_path.'uploads/logo/'.stripslashes($records['config_logo']);
										} else {
											$photo = 'https://via.placeholder.com/140x100';	
										}
									?>
                            <div class="form-group row">
                                <label class="col-md-2 control-label"> Top Main Logo</label>
                                <div class="col-md-10">
                                    <div class="row col-md-5">
                                        <img src="<?php echo $photo?>" id="temppreviewimageki-1"
                                            class="temppreviewimageki-1" style="width:200px; height:auto;display:none1">
                                    </div>
                                    <div class="row col-md-10">

                                        <div class="input-group image-preview-1">

                                            <input type="text" class="form-control image-preview-filename-1"
                                                disabled="disabled">
                                            <!-- don't give a name === doesn't send on POST/GET -->
                                            <span class="input-group-btn">
                                                <!-- image-preview-clear button -->
                                                <button type="button"
                                                    class="btn btn-default image-preview-clear image-preview-clear-1"
                                                    style="display:none;" id=1>
                                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                                </button>
                                                <!-- image-preview-input -->
                                                <div class="btn btn-default image-preview-input">
                                                    <span class="glyphicon glyphicon-folder-open"></span>
                                                    <span
                                                        class="image-preview-input-title image-preview-input-title-1">Browse</span>
                                                    <input type="file" accept="image/png, image/jpeg, image/gif"
                                                        class="browseimage" id="1" name="main_image" />
                                                    <!-- rename it -->

                                                </div>
                                            </span>
                                        </div>

                                        <span class="form-text text-muted">Image Size 564px(width) 499px(height)</span>
                                    </div>
                                </div>
                            </div>       
                            <?php 
										if(!empty($records['config_logo_footer'])){
											$config_logo_footer =  back_path.'uploads/logo/'.stripslashes($records['config_logo_footer']);
										} else {
											$config_logo_footer = 'https://via.placeholder.com/140x100';	
										}
									?>
                            <div class="form-group row">
                                <label class="col-md-2 control-label"> Footer Logo</label>
                                <div class="col-md-10">
                                    <div class="row col-md-5">
                                        <img src="<?php echo $config_logo_footer?>" id="temppreviewimageki-2"
                                            class="temppreviewimageki-2" style="width:200px; height:auto;display:none1">
                                    </div>
                                    <div class="row col-md-10">

                                        <div class="input-group image-preview-2">

                                            <input type="text" class="form-control image-preview-filename-2"
                                                disabled="disabled">
                                            <!-- don't give a name === doesn't send on POST/GET -->
                                            <span class="input-group-btn">
                                                <!-- image-preview-clear button -->
                                                <button type="button"
                                                    class="btn btn-default image-preview-clear image-preview-clear-2"
                                                    style="display:none;" id=2>
                                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                                </button>
                                                <!-- image-preview-input -->
                                                <div class="btn btn-default image-preview-input">
                                                    <span class="glyphicon glyphicon-folder-open"></span>
                                                    <span
                                                        class="image-preview-input-title image-preview-input-title-2">Browse</span>
                                                    <input type="file" accept="image/png, image/jpeg, image/gif"
                                                        class="browseimage" id="2" name="logo_footer" />
                                                    <!-- rename it -->

                                                </div>
                                            </span>
                                        </div>

                                        <span class="form-text text-muted">Image Size 564px(width) 499px(height)</span>
                                    </div>
                                </div>
                            </div>       
                              
                            <div class="form-group row">
                                <label class="control-label col-lg-2"></label>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn bg-blue">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                     
                                    </a>
                                </div>
                            </div>
                                              
                              
                                           
                             
                            
                          </form>
                        </div>

                        <!-- /text inputs -->
                    </div>
                    <!-- /table header styling -->





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

// Clear event
$(document).on('click', '.image-preview-clear', function (e) {    
    //alert("ghgh");            
// $('.image-preview-clear').click(function() {
    var imgid = $(this).attr('id');
    $('.image-preview-' + imgid).attr("data-content", "").popover('hide');
    $('.image-preview-filename-' + imgid).val("");
    $('.image-preview-clear-' + imgid).hide();
    //$('.image-preview-input input:file').val("");
    $(".image-preview-input-title-" + imgid).text("Browse");
    $(".temppreviewimageki-" + imgid).attr("src", '');
    $(".temppreviewimageki-" + imgid).hide();

    //for old code
    $('.image-preview' + imgid).attr("data-content", "").popover('hide');
    $('.image-preview-filename' + imgid).val("");
    $('.image-preview-clear' + imgid).hide();
    //$('.image-preview-input input:file').val("");
    $(".image-preview-input-title" + imgid).text("Browse");
    $(".temppreviewimageki" + imgid).attr("src", '');
    $(".temppreviewimageki" + imgid).hide();
});
// Create the preview image
$(document).on('change', '.browseimage', function (e) { 
//  $(".browseimage").change(function() {
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
        //for old code 
        $(".image-preview-input-title" + imgid).text("Change");
        $(".image-preview-clear" + imgid).show();
        $(".image-preview-filename" + imgid).val(file.name);
        img.attr('src', e.target.result);

        $(".temppreviewimageki" + imgid).attr("src", $(img)[0].src);
        $(".temppreviewimageki" + imgid).show();
        //new code
        $(".image-preview-input-title-" + imgid).text("Change");
        $(".image-preview-clear-" + imgid).show();
        $(".image-preview-filename-" + imgid).val(file.name);
        img.attr('src', e.target.result);

        $(".temppreviewimageki-" + imgid).attr("src", $(img)[0].src);
        $(".temppreviewimageki-" + imgid).show();
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


</html>