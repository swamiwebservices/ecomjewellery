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

                        <ul class="nav nav-tabs nav-tabs-bottom">
                            <?php
                          
                                           $domain_list = $this->config->item("DOMAINs");
                                           foreach($domain_list as $key => $domain){
                                            $domain_org = $domain;
                                            $domain = str_replace(".","_",$domain);
                                            
                                         ?>
                            <li class="nav-item"><a href="#domains<?php echo $key?>"
                                    class="nav-link <?php echo (isset($key) && $key==1) ? 'active' : '' ?>"
                                    data-toggle="tab"> <?php echo $domain_org?></a></li>
                            <?php }?>
                        </ul>
                        <div class="tab-content">
                            <?php
                          //  print_r($records);
                              foreach($domain_list as $key => $domain){
                            ?>
                            <div class="tab-pane fade  <?php echo  (isset($key) && $key==1) ? ' show active' : '' ?>"
                                id="domains<?php echo $key?>">

                                <form class="form-horizontal" id="blogform1" name="blogform1" method="post"
                                    action="<?php echo site_url($controller.'/'.$fun_name)?>"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="mode" id="mode" value="edit_content_sitemail">
                                    <input type="hidden" name="store_id" id="store_id"
                                        value="<?php echo isset($key) ? $key : ''; ?>">
                                    <?php
                               //print_r($records[$key]);
                               foreach($records[$key] as $key2 => $record){
                                 
                                if(isset($record['is_hidden']) && $record['is_hidden']==0){
                               ?>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label"
                                            for="<?php echo isset($record['key_name'])?$this->common->getDbValue($record['key_name']):''; ?>"><?php echo isset($record['label'])?$this->common->getDbValue($record['label']):''; ?></label>
                                        <div class="col-lg-10">

                                            <input type="text" class="form-control"
                                                id="<?php echo isset($record['key_name'])?$this->common->getDbValue($record['key_name']):''; ?>"
                                                name="<?php echo isset($record['key_name'])?$this->common->getDbValue($record['key_name']):''; ?>"
                                                placeholder="<?php echo isset($record['label'])?$this->common->getDbValue($record['label']):''; ?>"
                                                value="<?php echo isset($record['value'])?$this->common->getDbValue($record['value']):''; ?>">
                                            <small><?php echo isset($record['extra_info'])?$this->common->getDbValue($record['extra_info']):''; ?></small>
                                        </div>
                                    </div>
                                    <?php
                                } else {
?>
                                    <input type="hidden" class="form-control"
                                        id="<?php echo isset($record['key_name'])?$this->common->getDbValue($record['key_name']):''; ?>"
                                        name="<?php echo isset($record['key_name'])?$this->common->getDbValue($record['key_name']):''; ?>"
                                        placeholder="SMTP Hostname"
                                        value="<?php echo isset($record['value'])?$this->common->getDbValue($record['value']):''; ?>">
                                    <?php
                                }
                            }?>


                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mr-3">Submit <i
                                                class="icon-paperplane "></i></button>


                                    </div>
                                </form>
                            </div>
                            <?php }?>
                        </div>



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





</html>