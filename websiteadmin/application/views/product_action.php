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
    margin-left: 2px;
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
                        <form class="form-horizontal" id="blogform1" name="blogform1" method="post"
                            action="<?php echo site_url($controller.'/'.$fun_name)?>" enctype="multipart/form-data">
                            <input type="hidden" name="mode" id="mode" value="submitform">
                            <input type="hidden" name="uuid" id="uuid"
                                value="<?php echo isset($records['uuid']) ? $records['uuid'] : ''; ?>">


                            <input type="hidden" name="name_title_old" id="name_title_old"
                                value="<?php echo isset($records['name_title']) ? $records['name_title'] : ''; ?>">


                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="category_id">Category :<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <select class="form-control" name="category_id" id="category_id" required>
                                        <?php  $this->common->get_categorylist_parent_sub((isset($records['category_id']))?$records['category_id']:'0')?>
                                    </select>

                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="name">Name:<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9"><input type="text" class="form-control maxlength-textarea "
                                        maxlength="256" id="name" name="name" placeholder="Name"
                                        value="<?php echo isset($records['name'])?$this->common->getDbValue($records['name']):''; ?>"
                                        required>
                                    <!-- <div id="basic-error" class="validation-invalid-label" for="basic">This field is required.</div> -->
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="item_code">Item Code:</label>
                                <div class="col-md-4"><input type="text" class="form-control maxlength-textarea "
                                        maxlength="150" id="item_code" name="item_code" placeholder="Item Code"
                                        value="<?php echo isset($records['item_code'])?$this->common->getDbValue($records['item_code']):''; ?>"
                                        required>

                                </div>

                            </div>


                            <div class="form-group row    ">
                                <label class="col-lg-2 col-form-label" for="description">Desctiption:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" cols="3" class="form-control isrquired "
                                        placeholder="Desctiption" id="description"
                                        name="description"><?php echo isset($records['description'])?$this->common->getDbValue($records['description']):''; ?></textarea>

                                </div>
                            </div>
                            <?php 
										if(!empty($records['main_image'])){
											$photo =  back_path.'uploads/prod_images/'.stripslashes($records['main_image']);
										} else {
											$photo = 'https://via.placeholder.com/140x100';	
										}
									?>

                            <div class="form-group row">
                                <label class="col-md-2 control-label"> Product Image:</label>
                                <div class="col-md-10">
                                    <div class="row col-md-5">
                                        <img src="<?php echo $photo?>" id="temppreviewimageki1"
                                            class="temppreviewimageki1" style="width:200px; height:auto;display:none1">
                                    </div>
                                    <div class="row col-md-4">

                                        <div class="input-group image-preview1">

                                            <input type="text" class="form-control image-preview-filename1"
                                                disabled="disabled">
                                            <!-- don't give a name === doesn't send on POST/GET -->
                                            <span class="input-group-btn">
                                                <!-- image-preview-clear button -->
                                                <button type="button"
                                                    class="btn btn-default image-preview-clear image-preview-clear1"
                                                    style="display:none;" id=1>
                                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                                </button>
                                                <!-- image-preview-input -->
                                                <div class="btn btn-default image-preview-input">
                                                    <span class="glyphicon glyphicon-folder-open"></span>
                                                    <span
                                                        class="image-preview-input-title image-preview-input-title1">Browse</span>
                                                    <input type="file" accept="image/png, image/jpeg, image/gif"
                                                        class="browseimage" id="1" name="main_image" />
                                                    <!-- rename it -->

                                                </div>
                                            </span>
                                        </div>

                                        <span class="form-text text-muted">Image Size 600px(width) 600px(height)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-lg-2" for="sort_order">Sort order:<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-2"><input type="number" class="form-control  numbersOnly"
                                        id="sort_order" name="sort_order" placeholder="sort order"
                                        value="<?php echo isset($records['sort_order'])?$this->common->getDbValue($records['sort_order']):''; ?>">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-lg-2" for="sort_order">Item Qty:<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-2"><input type="number" class="form-control  numbersOnly"
                                        id="quantity" name="quantity" placeholder="sort order"
                                        value="<?php echo isset($records['quantity'])?$this->common->getDbValue($records['quantity']):''; ?>">

                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="control-label col-lg-2" for="status">Status:<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-4">
                                    <?php  //print_r($records);?>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input-styled-success" value="Active"
                                                name="status_flag" id="status_flag1"
                                                <?php if ((isset($records['status_flag']) && $records['status_flag'] == 'Active') || empty($records['status_flag']))  {  echo 'checked'; } ?>>
                                            Active
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input-styled-danger" value="Inactive"
                                                name="status_flag" id="status_flag2"
                                                <?php if (isset($records['status_flag']) && $records['status_flag'] == 'Inactive')  {  echo 'checked'; } ?>>
                                            In-Active
                                        </label>
                                    </div>
                                    <div class="hidedefault validation-invalid-label mt-2" id="error_phonenumber">Please
                                        select status</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input-styled-success" value="1"
                                                name="featured" id="featured"
                                                <?php if (isset($records['featured']) && $records['featured'] == 1)  {  echo 'checked'; } ?>>
                                            Featured (Show In home Page)
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $price_json = (isset($records['price_json'])) ? json_decode($records['price_json'],true) : [];
                            //print_r($price_json);
                            $domain_list = $this->config->item("DOMAINs");
                            foreach($domain_list as $key => $domain){
                                $domain_org = $domain;
                                $domain = str_replace(".","_",$domain);
                                $records_temp = (isset($price_json[$domain])) ?  $price_json[$domain] : [];
                                //print_r($records_temp);
                            ?>
                            <fieldset>
                                <legend class="font-weight-bold"><?php echo $domain_org?></legend>
                                <div class="form-group row">
                                    <!--  <label class="col-form-label  col-lg-2" for="quantity<?php echo $domain?>">Item Qty:</label>
                                    <div class="col-lg-2"><input type="text" class="form-control numbersOnly" id="quantity<?php echo $domain?>"
                                            name="<?php echo $domain?>[quantity]" placeholder="Item Qty"
                                            value="<?php echo isset($records_temp['quantity'])?$this->common->getDbValue($records_temp['quantity']):''; ?>"
                                            required>

                                    </div> -->

                                    <label class="col-form-label col-lg-2 " for="price<?php echo $domain?>">Price: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-2"><input type="text" class="form-control numbersOnly"
                                            id="price<?php echo $domain?>" name="<?php echo $domain?>[price]"
                                            placeholder="Price"
                                            value="<?php echo isset($records_temp['price'])?$this->common->getDbValue($records_temp['price']):''; ?>"
                                            required>
                                    </div>
                                    <label class="col-form-label col-lg-2 " for="sale_price<?php echo $domain?>">Sale
                                        Price: <span class="text-danger">*</span></label>
                                    <div class="col-lg-2"><input type="text" class="form-control numbersOnly"
                                            id="sale_price<?php echo $domain?>" name="<?php echo $domain?>[sale_price]"
                                            placeholder="Price"
                                            value="<?php echo isset($records_temp['sale_price'])?$this->common->getDbValue($records_temp['sale_price']):''; ?>"
                                            required>
                                    </div>

                                </div>
                            </fieldset>
                            <?php }?>
                            <!--  <div class="form-group">
                                        <label>Address:</label>
                                        <textarea rows="3" cols="3" class="form-control" placeholder="Enter address"></textarea>
                                    </div> -->
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"></label>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn bg-blue">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                    <a href="<?php echo site_url($back_link);?>" <button type="button"
                                        class="btn btn-light ml-2"><i class="icon-arrow-left7"></i>
                                        Back</button></a>
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

            if (!$("#category_id").val()) {
                isError = true;
                //$("#error_first_category_id").show()
                $("#category_id").addClass("border-danger");

            }
            if (!$("#name").val()) {
                isError = true;
                //$("#error_first_name").show()
                $("#name").addClass("border-danger");

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
    // Primary
    $('.form-check-input-styled-primary').uniform({
        wrapperClass: 'border-primary-600 text-primary-800'
    });
    // TableManageButtons.init();
    </script>
</body>

</html>