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
                                <a href="<?php echo site_url("home");?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item "><?php echo (isset($this->pg_title))?$this->pg_title:''?></span>
                                <span class="breadcrumb-item active"><?php echo (isset($sub_heading))?$sub_heading:''?></span>
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
                        <?php
						 if (isset($results) && sizeof($results)>0) { 
					    ?>
                        <div class="table-responsive">
                            <table class="table dashboarddatatable" width="100%">
                                <thead>
                                    <tr class="bg-blue ">
                                        <th width="4%">#</th>
                                        <th width="17%">Name</th>


                                        <th width="34%">Address</th>
                                        <th width="7%">Business Type</th>
                                        <th width="7%">No. Of Order</th>
                                        <th width="7%">Cool Box</th>
                                        <th width="8%">Status</th>
                                        <th width="8%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $i=0;
								foreach($results as $key => $value){
								$i++;
                                $status = $this->common->getDbValue($value['status']);
                                $sql = " and (parent_id = '".$value['user_id']."')";
                                $total_order =  $this->ecommercemodal->getOderlist_custom('1,2,3,4',0,0,'numrows',$sql);
                                $total_coolbox =  $this->ecommercemodal->get_coolbox_list($value['user_id']);
								?>
                                    <tr class="  border-left-3  <?php echo ($status == "Active") ? 'border-left-success' : 'border-left-danger' ?>  tr<?php echo $this->common->getDbValue($value['status']); ?>">
                                        <td valign="top"><?php echo $i?></td>
                                        <td valign="top"><strong>
                                                <?php echo $this->common->getDbValue($value['first_name']); ?>
                                                <?php echo $this->common->getDbValue($value['middle_name']); ?>
                                                <?php echo $this->common->getDbValue($value['last_name']); ?>
                                            </strong></td>


                                        <td valign="top">
                                            <?php echo $this->common->getDbValue($value['mobile']); ?></br>
                                            <strong>Address :</strong>
                                            <?php echo $this->common->getDbValue($value['address_1']); ?><br>
                                            <strong>City :</strong> <?php echo $this->common->getDbValue($value['state_name_en']); ?><br>
                                            <strong>State :</strong> <?php echo $this->common->getDbValue($value['district_name_en']); ?><br>
                                            <strong>Pin Code:</strong> <?php echo $this->common->getDbValue($value['postcode']); ?>
                                        </td>

                                        <td valign="top"><?php echo $this->common->getDbValue($value['business_type']); ?></td>
                                        <td valign="top"><?php
                                    echo $total_order;
                                    ?></td>
                                        <td valign="top"><?php
                                    echo sizeof($total_coolbox);
                                    ?></td>
                                        <td valign="top">
                                            <?php
                                        if($status=="Active"){echo '<span class="badge badge-success">Active</span>';}
                                        ?>
                                            <?php
                                        if($status=="Inactive"){echo '<span class="badge badge-danger">Inactive</span>';}
                                        ?>
                                        </td>
                                        <td valign="top">
                                            <div class="list-icons">
                                                <a href="<?php echo site_url($this->ctrl_name.'/view_customer/'.$this->common->getDbValue($value['user_id'])) ?>" class="list-icons-item text-primary-600" data-popup="tooltip" title="" data-original-title="VIEW"><i class="icon-file-stats"></i></a>
                                                <?php //if($query->num_rows()==0){ ?>
                                                <!--<a href="<?php echo site_url($this->ctrl_name.'/delete_project/')?>" class="list-icons-item text-danger-600" title="Delete" onClick="return confirm('Are you sure want to delete this record?');"><i class="icon-trash"></i></a>-->
                                                <?php //} ?>

                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php } else {
                        ?>
                        <div class=" text-center  card-body border-top-info1">
                            No record found
                        </div>
                        <?php    
                            }?>

                        <?php if(isset($num_row) && $num_row>0){ ?>
                        <div class="row">
                            <div class="col-xl-12 text-center  ">
                                <ul class="pagination-flat justify-content-center twbs-flat pagination pull-right">
                                    <?php echo $this->common->ajaxpagingnation_admin_new($start,$num_row,$maxm,'',$fun_name,$other_para); ?>

                                </ul>
                            </div>
                        </div>
                        <?php } ?>
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
        // Scrollable datatable
        var table = $('.dashboarddatatable').DataTable({
            columnDefs: [{
                orderable: false,
                targets: [0]
            }],
            autoWidth: false,
            "lengthMenu": [
                [100],
                [100]
            ],
            scrollX: true,
            scrollY: '70vh',
            scrollCollapse: true,
            "paging": false,
            "bLengthChange": false, //thought this line could hide the LengthMenu

            "aaSorting": [],


            responsive: true,
        });

        // Custom bootbox dialog
        $('.bootbox_custom').on('click', function(e) {
            var aid = $(this).data("id") // will return the number 123

            bootbox.confirm({
                title: 'Confirm ',
                message: 'Are you sure you want to delete selected records ?',
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'Cancel',
                        className: 'btn-link'
                    }
                },
                callback: function(result) {


                    if (result) {

                        location.href = "<?php echo site_url('master/deleteitem/'.urlencode(base64_encode('mst_exepert_category')).'/') ?>" + aid;

                    }

                }
            });
        });
        </Script>
    </body>

</html>