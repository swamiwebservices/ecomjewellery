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
/*multiple img upload css end*/

.trans-list-para-postcode.add-photos-main-section span {
    position: relative;
    right: auto;
}

.upload-photo {
    float: left;
    margin: 0 20px 20px 0;
    overflow: hidden;
    position: relative;
    width: 225px;
    height: 187px;
}

.upload-photo>img {
    border: 1px solid #c6d1d5;
    text-align: center;
    width: 100%;
    height: 100%;
}

.upload-photo:hover {
    background-color: #f8f8f8;
    opacity: 0.8;
    filter: alpha(opacity=80);
    transition: all 0.4s ease-in-out 0s;
}

.upload-photo:hover .upload-close {
    opacity: 1;
    filter: alpha(opacity=100);
    cursor: pointer;
    transition: all 0.4s ease-in-out 0s;
}

.upload_pic_btn {
    cursor: pointer;
    font-size: 14px;
    left: 0;
    margin: 0;
    opacity: 0;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    height: 100% !important;
    width: 100%;
}

.trans-list-para-postcode.add-photos-main-section .upload-close {
    text-align: center;
    color: #e05e14;
    font-size: 14px;
    opacity: 0;
    position: absolute;
    z-index: 9999;
    top: 0;
}

.upload-photo:hover .upload-close {
    padding: 77px 0;
    cursor: pointer;
    opacity: 1;
    transition: all 0.4s ease-in-out 0s;
    background: rgba(38, 43, 104, 0.6);
    display: block;
    height: 100%;
    width: 100%;
}

.upload-close>a {
    background: #fff;
    border-radius: 50%;
    color: #e05e14;
    display: block;
    font-size: 19px;
    height: 38px;
    margin: 0 auto;
    padding-top: 6px;
    width: 38px;
}

.fa.fa-times-circle {
    color: #e05e14;
    font-size: 18px;
}

/*multiple img upload css end*/
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

                                <input type="hidden" name="product_id" id="product_id"
                value="<?php echo (isset($records['product_id'])) ? $records['product_id'] : ''?>">


                            <input type="hidden" name="name_title_old" id="name_title_old"
                                value="<?php echo isset($records['name_title']) ? $records['name_title'] : ''; ?>">


                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="category_id">Category:<span
                                        class="text-danger">*</span><span class="text-danger">*</span></label>
                                <div class="col-lg-4">
                                    <select class="form-control" name="category_id" id="category_id" required>
                                        <?php  $this->common->get_categorylist_parent_sub((isset($records['category_id']))?$records['category_id']:'0')?>
                                    </select>

                                </div>
                                <label class="col-form-label col-lg-2 text-right" for="item_code">Item Code:<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control maxlength-textarea " maxlength="150"
                                        id="item_code" name="item_code" placeholder="Item Code"
                                        value="<?php echo isset($records['item_code'])?$this->common->getDbValue($records['item_code']):''; ?>"
                                        required>

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
                                <label class="col-md-2 control-label"> Main Image:</label>
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
                            <label class="col-md-2 control-label"> Other Image(s):</label>
                                <div class="col-md-10">
                                <div class="form-group trans-list-para-postcode add-photos-main-section">
                                    <label><?php echo $this->lang->line('Add Photos');?></label>
                                    <div class="add-photos-main-section-images">
                                        <span data-multiupload="1">
                                            <span data-multiupload-holder></span>
                                            <?php
                            //  print_r($consignmentimage_temp);
                                if(isset($consignmentimage_temp) && sizeof($consignmentimage_temp) > 0) { 
                                    foreach($consignmentimage_temp as $key => $val){
                                        if(isset($val['product_id'])){
                                            $folder_path = "../uploads/prod_images/";
                                        } else {
                                            $folder_path = "../uploads/product_images_temp/";
                                        }
                                ?>
                                            <div class="upload-photo"
                                                id="multiupload_img_1_<?php echo $val['img_id']?>"><span
                                                    class="upload-close"><a href="javascript:void(0)"
                                                        onclick="bindRemoveMultiUpload_new('<?php echo $val['img_id']?>')"
                                                        id="multiupload_img_remove1_<?php echo $val['img_id']?>"><i
                                                            class="icon-trash "></i></a></span><img
                                                    src="<?php echo base_url();?><?php echo $folder_path?><?php echo $val['image_name']?>">
                                            </div>
                                            <?php    }
                                    }
                                ?>
                                            <span class="upload-photo">
                                                <img src="<?php echo base_url();?>global_assets/images/multi-images-main-img.jpg"
                                                    alt="plus img">
                                                <input data-multiupload-src class="upload_pic_btn" type="file"
                                                    multiple="">
                                                <span data-multiupload-fileinputs></span>
                                            </span>

                                        </span>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-lg-2" for="sort_order">Specification:</label>
                                <div class="col-lg-10">
                                    <?php
                                       // print_r($records['specification']);
                                        $specification2 = (isset($records['specification']) && is_array($records['specification'])) ? $records['specification'] : [];
                                        $specification = (isset($records['specification']) && !is_array($records['specification']) ) ? json_decode($records['specification'],true) : $specification2;
                                        //print_r($specification);
                                        for($p=1;$p<8;$p++){
                                        ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control"
                                                id="specification_title<?php echo $p?>"
                                                name="specification[title][<?php echo $p?>]"
                                                placeholder="Title <?php echo $p?>"
                                                value="<?php echo (isset($specification['title'][$p])) ? $specification['title'][$p] : '' ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control"
                                                id="specification_value<?php echo $p?>"
                                                name="specification[value][<?php echo $p?>]"
                                                placeholder="Value <?php echo $p?>"
                                                value="<?php echo (isset($specification['value'][$p])) ? $specification['value'][$p] : '' ?>">
                                        </div>

                                    </div>

                                    <?php    
                                        }
                                        ?>
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
                            $price_json = (isset($records['price_json'])) ? json_decode($records['price_json'],true) : ['quantity'=>[],'mrp'=>[],'sellprice'=>[]];
                            $mrp = $price_json['mrp'];
                            $sellprice = $price_json['sellprice'];
                            $quantity = $price_json['quantity'];
                           // print_r($price_json);
                            $domain_list = $this->config->item("DOMAINs");
                            foreach($domain_list as $domain_id => $domain){
                                $domain_org = $domain;
                                $domain = str_replace(".","_",$domain);
                                $records_temp = (isset($price_json[$domain])) ?  $price_json[$domain] : [];
                              //  print_r($records_temp);
                                
                            ?>
                            <fieldset>
                                <legend class="font-weight-bold"
                                    style="font-size:16px;background-color:<?php echo $this->common->rand_color()?>; color:#ffffff; padding-left:10px">
                                    <?php echo $domain_org?></legend>
                                <div class="form-group row">
                                    <label class="col-form-label  col-lg-1" for="quantity_<?php echo $domain_id?>">Item
                                        Qty:</label>
                                    <div class="col-lg-1"><input type="number" min=0 class="form-control numbersOnly"
                                            id="quantity_<?php echo $domain_id?>"
                                            name="quantity[<?php echo $domain_id?>]" placeholder="Item Qty"
                                            value="<?php echo isset($quantity[$domain_id])?$this->common->getDbValue($quantity[$domain_id]):'1'; ?>"
                                            required>

                                    </div>

                                    <label class="col-form-label col-lg-1 text-right "
                                        for="mrp_<?php echo $domain_id?>">MRP Price: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-1"><input type="number" min=0
                                            class="form-control cost mrp mrp_<?php echo $domain_id?>  auto_mrp_<?php echo $domain_id?> numbersOnly1"
                                            id="mrp<?php echo $domain_id?>" data-domain="<?php echo $domain_id?>"
                                            name="mrp[<?php echo $domain_id?>]" placeholder="MRP"
                                            value="<?php echo isset($mrp[$domain_id])?$this->common->getDbValue($mrp[$domain_id]):''; ?>"
                                            required>
                                    </div>
                                    <label class="col-form-label col-lg-1 " for="sellprice_<?php echo $domain?>">Sell
                                        Price: <span class="text-danger">*</span></label>
                                    <div class="col-lg-1"><input type="number" min=0
                                            class="form-control cost sellprice sellprice_<?php echo $domain_id?> auto_sellprice_<?php echo $domain_id?> numbersOnly1"
                                            id="sellprice_<?php echo $domain?>" data-domain="<?php echo $domain_id?>"
                                            name="sellprice[<?php echo $domain_id?>]" placeholder="Sell Price"
                                            value="<?php echo isset($sellprice[$domain_id])?$this->common->getDbValue($sellprice[$domain_id]):''; ?>"
                                            required>
                                    </div>
                                    <label class="col-form-label col-lg-1 text-right text-success ">Dicount: </label>
                                    <label
                                        class="col-form-label col-lg-1 text-success discount  discount_<?php echo $domain_id?> ">0
                                    </label>
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
    var default_domain_flag = 0;
    <?php
        $sql = "select * from wti_process_cost order by domain ";
        $query = $this->db->query($sql);
        $process_costrs = $query->result_array();
        $domain_wise = [];
        $domain_currency_value = [];
        $default_domain_flag =0;
        foreach($process_costrs as $key => $process_cost){
            $domain_wise[$process_cost['domain']] = $process_cost['percentage'];
            $domain_currency_value[$process_cost['domain']] = $process_cost['rate'];
            if($process_cost['default_flag']){
                $default_domain_flag = 1;
            }
        }
    
        ?>
    var domain_wise = <?php echo json_encode($domain_wise)?>;
    var domain_currency_value = <?php echo json_encode($domain_currency_value)?>;

    default_domain_flag = <?php echo $default_domain_flag?>;

    console.log(domain_wise);
    $(document).ready(function() {
        $(".mrp").keyup(function() {
            const mrp_id = $(this).attr('id');
            const domain = parseInt($(this).data('domain'));
            let mrp = parseFloat(this.value);
            $(".sellprice_" + domain).val(mrp);
            console.log("domain:",domain);

            if (domain == default_domain_flag) {
                $.each(domain_wise, function(key1, val1) {
                    val1 = parseFloat(val1);
                    currency_value = domain_currency_value[key1];
                    if (key1 != default_domain_flag) {
                        let other_mrp = Math.round(parseFloat((mrp + (mrp * val1 / 100)) * currency_value ));
                        $(".auto_mrp_" + key1).val(other_mrp);
                        $(".auto_sellprice_" + key1).val(other_mrp);

                    }
                });
            }


        });


        $(".sellprice").keyup(function() {
            const mrp_id = $(this).attr('id');
            const domain = $(this).data('domain');
            let mrp = parseFloat($(".mrp_" + domain).val());
            let value = parseFloat(this.value);
            if (value >= mrp) {
                this.value = mrp;
                value = mrp;
            }
            let value_disc = Math.round(((mrp - value) / mrp) * 100);

            $(".discount_" + domain).html(value_disc + " %");
            // console.log(mrp,value,value_disc);

        });

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

    //dropzone script with multiple files
    (function($) {
        function readMultiUploadURL(input, callback) {
            if (input.files) {
                $.each(input.files, function(index, file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        callback(false, e.target.result);
                    }
                    reader.readAsDataURL(file);
                });
            }
            callback(true, false);
        }
        var arr_multiupload = $("span[data-multiupload]");
        if (arr_multiupload.length > 0) {
            $.each(arr_multiupload, function(index, elem) {
                var container_id = $(elem).attr("data-multiupload");
                var id_multiupload_img = "multiupload_img_" + container_id + "_";
                var id_multiupload_img_remove = "multiupload_img_remove" + container_id + "_";
                var id_multiupload_file = id_multiupload_img + "_file";
                var block_multiupload_src = "data-multiupload-src-" + container_id;
                var block_multiupload_holder = "data-multiupload-holder-" + container_id;
                var block_multiupload_fileinputs = "data-multiupload-fileinputs-" + container_id;
                var input_src = $(elem).find("input[data-multiupload-src]");
                $(input_src).removeAttr('data-multiupload-src')
                    .attr(block_multiupload_src, "");
                var block_img_holder = $(elem).find("span[data-multiupload-holder]");
                $(block_img_holder).removeAttr('data-multiupload-holder')
                    .attr(block_multiupload_holder, "");
                var block_fileinputs = $(elem).find("span[data-multiupload-fileinputs]");
                $(block_fileinputs).removeAttr('data-multiupload-fileinputs')
                    .attr(block_multiupload_fileinputs, "");
                $(input_src).on('change', function(event) {
                    readMultiUploadURL(event.target, function(has_error, img_src) {
                        if (has_error == false) {
                            addImgToMultiUpload(img_src);
                        }
                    })
                });

                function addImgToMultiUpload(img_src) {

                    var id = Math.random().toString(36).substring(2, 10);
                    var product_id = $("#product_id").val();

                    console.log(product_id);
                    $.post('<?php echo site_url("products/doAddimage");?>', {
                            img_src: img_src,
                            img_id: id,
                            product_id: product_id
                        },
                        function(data) {
                            console.log(data);
                        });



                    var html = '<div class="upload-photo" id="' + id_multiupload_img + id + '">' +
                        '<span class="upload-close">' +
                        '<a href="javascript:void(0)" id="' + id_multiupload_img_remove + id +
                        '" ><i class="icon-trash"></i></a>' +
                        '</span>' +
                        '<img src="' + img_src + '" >' +
                        '</div>';
                    var file_input = '<input type="file" name="file[]" id="' + id_multiupload_file + id +
                        '" style="display:none" />';
                    $(block_img_holder).append(html);
                    $(block_fileinputs).append(file_input);
                    bindRemoveMultiUpload(id);
                }

                function bindRemoveMultiUpload(id) {
                    $("#" + id_multiupload_img_remove + id).on('click', function() {
                        $("#" + id_multiupload_img + id).remove();
                        $("#" + id_multiupload_file + id).remove();
                        var product_id = $("#product_id").val();
                        $.post('<?php echo site_url("products/doDeletImage");?>', {
                                product_id: product_id,
                                img_id: id
                            },
                            function(data) {
                                console.log(data);
                            });
                    });
                }
            });
        }
    })(jQuery);

    function bindRemoveMultiUpload_new(id) {

        $("#multiupload_img_1_" + id).remove();
        var product_id = $("#product_id").val();

        $.post('<?php echo site_url("products/doDeletImage");?>', {
                product_id: product_id,
                img_id: id
            },
            function(data) {
                console.log(data);
            });
    }
    </script>
</body>

</html>