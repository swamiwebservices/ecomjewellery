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
                                <a href="<?php echo site_url($controller . "/testimonialsListout"); ?>" class="breadcrumb-elements-item">
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
$error = $this->session->flashdata('error');
if ($error) {
    ?>
                        <div class="alert bg-warning text-white alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                            <span class="font-weight-semibold">Error! </span> <?php echo $error ?>
                        </div>
                        <?php }?>

                        <!-- Text inputs -->

                        <div class="card-header header-elements-inline">
                            <h5 class="card-title"><?php echo (isset($sub_heading)) ? $sub_heading : '' ?></h5>
                            <div class="header-elements">

                            </div>
                        </div>

                        <div class="card-body">
                            <form class="form-horizontal" id="blogform1" name="blogform1" method="post" action="<?php echo site_url($controller.'/'.$fun_name)?>" enctype="multipart/form-data">
                                <input type="hidden" name="mode" id="mode" value="edit_content">
                                <input type="hidden" name="testimonial_type" id="testimonial_type" value="1">
                             
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"   for="from_name">From name <span class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                    <div class=" row">
                                            <div class="col-lg-6">
                                        <input type="text" class="form-control alhanumeric1 maxlength-textarea" maxlength="200" name="from_name" id="from_name" value="<?php echo isset($records['from_name']) ? $records['from_name'] : ''; ?>" placeholder="From name">
                                            </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <?php
                                
                                      $from_image = (isset($records['from_image']) && $records['from_image']!="") ? base_url()."../uploads/testimonials/".$records['from_image'] : 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image'; ;
                                    ?>
                                    <label class="col-md-2 control-label">  Pic</label>
                                    <div class="col-md-10">
                                        <div class="row col-md-5">
                                            <img src="<?php echo $from_image?>" id="temppreviewimageki1" class="temppreviewimageki1" style="width:200px; height:auto;display:none1">
                                          
                                        </div>
                                        <div class="row col-md-6">

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
                                                        <input type="file" accept="image/png, image/jpeg, image/gif" class="browseimage" id="1" name="main_image" /> <!-- rename it -->

                                                    </div>
                                                </span>
                                            </div>
                                            <span class="form-text text-muted">Image Size 100px(width)  100px(height)</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"  for="post_name">Designation/Post <span class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <div class=" row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control " placeholder="Designation name" name="post_name" id="post_name" value="<?php echo isset($records['post_name']) ? $records['post_name'] : ''; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <!--  <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"  for="location">Location</label>
                                    <div class="col-lg-10">
                                        <div class=" row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control " placeholder="location name" name="location" id="location" value="<?php echo isset($records['location']) ? $records['location'] : ''; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <?php
                                      $status = isset($records['status_flag']) ? $records['status_flag'] : '1'; ;
                                    ?>
                                    <label class="col-lg-2 col-form-label">Publish Status <span class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="status_flag" id="status_flag1" class="form-check-input-styled-success" value="1" name="radio-unstyled-inline-left" <?php echo ($status==1)?' checked':''?>>
                                                Active
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="status_flag" id="status_flag2" class="form-check-input-styled-danger" value="2" name="radio-unstyled-inline-left" <?php echo ($status==2)?' checked':''?>>
                                                In-active
                                            </label>

                                        </div>
                                        <div class="hidedefault validation-invalid-label mt-2" id="error_status_flag">Please select status</div>
                                    </div>

                                </div>
                               

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="testimonial">Testimonial <span class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <textarea name="testimonial" id="testimonial" class="form-control "  rows="2" cols="2"><?php echo isset($records['testimonial']) ? $records['testimonial'] : ''; ?></textarea>
                                        <div class="hidedefault validation-invalid-label mt-2" id="error_testimonial">Please enter testimonial </div>
                                    </div>
                                    
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mr-3">Submit <i class="icon-paperplane "></i></button>
                                    <a href="<?php echo site_url("testimonial/testimoniallistint");?>"><button type="button" class="btn btn-light" id="reset"><i class="icon-arrow-left7"></i> Back</button></a>

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
    <!-- Remove modal -->
    <div id="remove_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm action</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    You are about to remove this row. Are you sure?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Yes, remove</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">No, thanks</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /remove modal -->

    <script>
    $(document).ready(function() {

        $(".form-control").removeClass("border-danger");
        $(".form-control-select2").removeClass("border-danger");
        $("#error_status_flag").hide();
        $("#blogform1").submit(function(e) {
            var isError = false;
            var errMsg = "";
            var errMsg_alert = "";
            $(".form-control").removeClass("border-danger");
            $(".form-control-select2").removeClass("border-danger");
            $("#error_status_flag").hide();
            if (!$("#testimonial_type").val()) {
                isError = true;
                $("#error_status_flag").show();
                $("#testimonial_type").addClass("border-danger");

            }
            if (!$("#from_name").val()) {
                isError = true;

                $("#from_name").addClass("border-danger");

            }
            /* if (!$("#location").val()) {
                isError = true;

                $("#location").addClass("border-danger");

            } */
            if (!$("#post_name").val()) {
                isError = true;
                
              //  $("#error_post_name").show();
                $("#post_name").addClass("border-danger");

            }
            if (!$("#testimonial").val()) {
                isError = true;
                
              //  $("#error_testimonial").show();
                $("#testimonial").addClass("border-danger");

            }
            //frd_email
            if (isError) {
                return false;
            } else {
                $("#blogform1").submit();
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

</html>