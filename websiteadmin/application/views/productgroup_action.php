<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('inc_metacss');?>
    <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_floating_labels.js"></script>
    <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
    <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_controls_extended.js"></script>
    <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_layouts.js"></script>

    <style>
    .btn-group-vertical>.btn,
    .btn-group>.btn {
        z-index: 1;
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
                        <form class="form-horizontal" id="blogform1" name="blogform1" method="post"
                            action="<?php echo site_url($controller.'/'.$fun_name)?>" enctype="multipart/form-data">
                            <input type="hidden" name="mode" id="mode" value="submitform">
                            

                            <div class="form-group row">

                                <label class="col-md-2 control-label" for="name"> Name:<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9"><input type="text" class="form-control maxlength-textarea "
                                        id="name" name="name" placeholder="Name"
                                        value="<?php echo isset($records['name'])?$this->common->getDbValue($records['name']):''; ?>"
                                        maxlength="256">
                                    <!-- <div id="basic-error" class="validation-invalid-label" for="basic">This field is required.</div> -->
                                </div>
                            </div>



                            <div class="form-group row">

                                <label class="col-md-2 control-label" for="price"> Price :<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-1"><input type="text" class="form-control  "
                                        id="price" name="price" placeholder="Price"
                                        value="<?php echo isset($records['price'])?$this->common->getDbValue($records['price']):''; ?>"
                                        >
                                        
                                    <!-- <div id="basic-error" class="validation-invalid-label" for="basic">This field is required.</div> -->
                                </div>
                                <label class="col-lg-2 control-label">Per Gram</label>        
                            </div>


 
                            
                            <div class="form-group row">
                                <label class="control-label col-lg-2"></label>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn bg-blue">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                    <a href="<?php echo site_url($back_link ); ?>" class="breadcrumb-elements-item">
                                        <button type="button" class="btn btn-light ml-2"><i
                                                class="icon-arrow-left7"></i> Back</button>
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
                //$("#error_first_name").show()
                $("#name").addClass("border-danger");

            }


            if (!$("#sort_order").val()) {
                isError = true;
                //$("#error_first_name").show()
                $("#sort_order").addClass("border-danger");
            }




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