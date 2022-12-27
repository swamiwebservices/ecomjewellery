<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('inc_metacss');?>
    <script src="<?php echo base_url()?>global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url()?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="<?php echo base_url()?>global_assets/js/demo_pages/datatables_responsive.js"></script>
    <script src="<?php echo base_url()?>global_assets/js/plugins/notifications/bootbox.min.js"></script>
    <!-- 	    <script src="<?php echo base_url()?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
 -->
    <!-- <script src="<?php echo base_url()?>global_assets/js/demo_pages/components_modals.js"></script> -->
    <!-- /theme JS files -->
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
                            <span
                                class="breadcrumb-item "><?php echo (isset($this->pg_title))?$this->pg_title:''?></span>
                            <span
                                class="breadcrumb-item active"><?php echo (isset($sub_heading))?$sub_heading:''?></span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="breadcrumb justify-content-center">
                            <!--                                <a href="<?php echo site_url($this->ctrl_name."/add_type");?>" class="breadcrumb-elements-item">
                                    <button type="button" class="btn btn-success btn-sm"><i class="icon-plus2 mr-2"></i> Add New</button>
                                </a>
-->
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
                <div class="card  ">
                    
                        


                            <div class="table-responsive">
                            <table class="table table-hover datatable-responsive">
                                    <thead>
                                    <tr class="bg-blue ">
                                            <td class="text-left">Payment Method</td>

                                            <td class="text-left">Status</td>
                                            <td class="text-right">Sort Order </td>
                                            <td class="text-right">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($extensions) { ?>
                                        <?php foreach ($extensions as $extension) { ?>
                                        <tr>
                                            <td class="text-left"><?php echo $extension['name']; ?></td>

                                            <td class="text-left"><?php echo $extension['status']; ?></td>
                                            <td class="text-right"><?php echo $extension['sort_order']; ?></td>
                                            <td class="text-right"> <a href="<?php echo $extension['edit']; ?>" data-toggle="tooltip"
                                                    title="Edit" class="btn btn-primary"><i
                                                        class="icon-pencil7"></i></a>
                                                 
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <?php } else { ?>
                                        <tr>
                                            <td class="text-center" colspan="5">No results</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                         
                </div>
                <!-- /basic datatable -->
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


    </Script>
</body>

</html>