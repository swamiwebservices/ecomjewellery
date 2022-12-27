<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>
    .submitbutton {
        background: #c09578;
        border: 0;
        color: #ffffff;
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        height: 34px;
        line-height: 21px;
        padding: 5px 20px;
        text-transform: uppercase;
        cursor: pointer;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        margin-left: 20px;
        border-radius: 20px;
    }
    </style>
</head>

<body>
    <div class="home_black_version">

        <?php $this->load->view('inc_header_menu'); ?>


        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area whitebg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <h1>Register Account</h1>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">home</a></li>
                                <li>&gt;</li>
                                <li>Register Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->


        <div class="customer_login">
            <div class="container ">
                <div class="row justify-content-lg-center">
                    <div id="content" class="col-md-8 ">
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title"><?php echo (isset($sub_heading))?$sub_heading:''?> </h6>
                            </div>
                            <div class="card-body">
                            <form class="form-horizontal" id="blogform1" name="blogform1" method="post"
                            action="<?php echo site_url("import")?>" enctype="multipart/form-data">
                            <input type="hidden" name="mode" id="mode" value="submitform">
                            
                            <div class="form-group row">
                                <label class="col-md-2 control-label"> Image</label>
                                <div class="col-md-10">
                                    
                                    <div class="row col-md-10">

                                        

                                        <input type="file" accept="image/png, image/jpeg, image/gif"
                                                        class="browseimage" id="1" name="main_image" />
                                        

                                                        <div class="d-inline-block pt-2 pd-2 w-100">
                                
                                    
                                    <button type="submit" class="btn btn-primary">Continue</button>
                                
                            </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>

        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>

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