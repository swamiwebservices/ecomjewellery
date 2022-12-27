<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('inc_metacss');?>
    <script src="<?php echo base_url() ?>global_assets/js/demo_pages/datatables_responsive.js"></script>
    <script src="<?php echo base_url() ?>global_assets/js/plugins/notifications/bootbox.min.js"></script>
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

                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-bottom">
                            <li class="nav-item"><a href="#Section-tab1"
                                    class="nav-link <?php echo (isset($tab) && $tab==1) ? 'active' : '' ?>"
                                    data-toggle="tab">Hello
                                    Bar</a></li>
                            
                            <li class="nav-item"><a href="#Section-tab2"
                                    class="nav-link <?php echo (isset($tab) && $tab==2) ? 'active' : '' ?>"
                                    data-toggle="tab">Section 1
                                    (Box 2)</a></li>
                          
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade  <?php echo  (isset($tab) && $tab==1) ? ' show active' : '' ?>"
                                id="Section-tab1">
                                <?php
                               // print_r($records);
                                ?>
                                <form name="frm-edit" id="frm-edit"
                                    action="<?php echo site_url($controller . '/'.$fun_name) ?>" method="post"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="mode" id="mode" value="hello_bar">
                                    <input type="hidden" name="tab" id="tab" value="1">
                                    <!--   <input type="hidden" name="group_name" id="group_name" value="config_home">
                                    <input type="hidden" name="key_name" id="key_name" value="hello_bar">
                                    <input type="hidden" name="serialized" id="serialized" value="0"> -->
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label"
                                            for="config_hellobar_show">Show Hello bar *
                                            <span class="text-danger">*</span></label>
                                        <div class="col-lg-6 col-sm-12 ">
                                            <select name="config_hellobar_show" id="config_hellobar_show"
                                                class="form-control">
                                                <option value="1"
                                                    <?php echo (isset($records['config_hellobar_show']) && $records['config_hellobar_show']=="1")?'selected':''; ?>>
                                                    Yes</option>
                                                <option value="0"
                                                    <?php echo (isset($records['config_hellobar_show']) && $records['config_hellobar_show']=="0")?'selected':''; ?>>
                                                    No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label"
                                            for="config_hello_bar">Hello bar Text</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control " name="config_hello_bar"
                                                id="config_hello_bar"><?php echo isset($records['config_hello_bar'])?$this->common->getDbValue($records['config_hello_bar']):''; ?></textarea>
                                             
                                        </div>
                                    </div>
                                   
                                    <!-- <div class="form-group row">
                                        <label class="col-lg-2 col-form-label"
                                            for="config_hello_bar_popup">Popup Content</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control " name="config_hello_bar_popup"
                                                id="config_hello_bar_popup"><?php echo isset($records['config_hello_bar_popup'])?$this->common->getDbValue($records['config_hello_bar_popup']):''; ?></textarea>
                                            
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2"></label>
                                        <div class="col-lg-9">
                                            <button type="submit" class="btn bg-blue">Submit <i
                                                    class="icon-paperplane ml-2"></i></button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--end of tab1-->
                            <!--tab2-->
                            <div class="tab-pane fade <?php echo (isset($tab) && $tab==2) ? ' show active' : '' ?>"
                                id="Section-tab2">
                                <?php
                               // $config_section1 = (!empty($records['config_section1'])) ? json_decode($records['config_section1'],JSON_HEX_APOS) : array();
                                $config_section1 = (!empty($records['config_section1'])) ? json_decode(html_entity_decode($records['config_section1']),true) : array();
                               // print_r($config_section1);
                                ?>
                                <form name="frm-edit" id="frm-edit"
                                    action="<?php echo site_url($controller . '/'.$fun_name) ?>" method="post"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="mode" id="mode" value="section1">
                                    <input type="hidden" name="tab" id="tab" value="2">
                                     
                                    
                                     
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="title">Box </label>
                                        <div class="col-sm-10">
                                            <!---box1-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div
                                                            class="card-header  bg-green text-white header-elements-inline">
                                                            <h6 class="card-title">Box1</h6>

                                                        </div>

                                                        <div class="card-body">
                                                             

                                                            <div class="form-group row">
                                                                <label class="col-lg-2 col-form-label"
                                                                    for="box1text1">Text 1 </label>
                                                                <div class="col-lg-10">
                                                                    <input type="text"
                                                                        class="form-control alhanumeric1 maxlength-textarea"
                                                                        maxlength="200"
                                                                        name="config_section1[box1][text1]"
                                                                        id="box1text1"
                                                                        value="<?php echo  (!empty($config_section1['box1']['text1'])) ? base64_decode($config_section1['box1']['text1']) : ''; ?>"
                                                                        placeholder="Text 1" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-2 col-form-label"
                                                                    for="box1text12">Text 2 </label>
                                                                <div class="col-lg-10">
                                                                    <textarea class="form-control "
                                                                        name="config_section1[box1][text2]"
                                                                        id="box1text12"
                                                                        required><?php echo  (!empty($config_section1['box1']['text2'])) ? base64_decode($config_section1['box1']['text2']) : ''; ?></textarea>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>


                                                <!---box2 --->

                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div
                                                            class="card-header bg-green text-white header-elements-inline">
                                                            <h6 class="card-title">Box2</h6>

                                                        </div>

                                                        <div class="card-body">
                                                             
                                                            <div class="form-group row">
                                                                <label class="col-lg-2 col-form-label"
                                                                    for="box2text11">Text 1 </label>
                                                                <div class="col-lg-10">
                                                                    <input type="text"
                                                                        class="form-control alhanumeric1 maxlength-textarea"
                                                                        maxlength="200"
                                                                        name="config_section1[box2][text1]"
                                                                        id="box2text11"
                                                                        value="<?php echo  (!empty($config_section1['box2']['text1'])) ? base64_decode($config_section1['box2']['text1']) : ''; ?>"
                                                                        placeholder="Text 1" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-2 col-form-label"
                                                                    for="box2text12">Text 2 </label>
                                                                <div class="col-lg-10">
                                                                    <textarea class="form-control "
                                                                        name="config_section1[box2][text2]"
                                                                        id="box2text12"
                                                                        required><?php echo  (!empty($config_section1['box2']['text2'])) ? base64_decode($config_section1['box2']['text2']) : ''; ?></textarea>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>


                                               
 

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2"></label>
                                        <div class="col-lg-9">
                                            <button type="submit" class="btn bg-blue">Submit <i
                                                    class="icon-paperplane ml-2"></i></button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--end of tab2-->

                        </div>
                    </div>

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
 
<script type="text/javascript">
jQuery(document).ready(function($) {



 
});


// Always show badge
$('.maxlength-textarea').maxlength({
    alwaysShow: true
});
// TableManageButtons.init();
</script>

</html>