<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view('inc_metacss');?>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/datatables_responsive.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/notifications/bootbox.min.js"></script>
        <!-- 	    <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
 -->
        <!-- <script src="<?php echo base_url() ?>global_assets/js/demo_pages/components_modals.js"></script> -->
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
                                <a href="<?php echo site_url("home"); ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item "><?php echo (isset($title)) ? $title : '' ?></span>
                                <span class="breadcrumb-item active"><?php echo (isset($sub_heading)) ? $sub_heading : '' ?></span>
                            </div>

                            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
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
                    <!-- Basic datatable -->
                    <div class="card  ">
                        <?php
if (isset($results) && sizeof($results) > 0) {
    ?>
                        <table class="table table-hover datatable-responsive">
                            <thead>
                                <tr class="bg-blue ">
                                  <th>#</th>
                                    <th>Driver / Vehicle</th>
                                    <th>Out By </th>
                                    <th>In By </th>
                                    <th>Items</th>
                                  <!--   <th>Zone</th>
                                    <th>Device</th>
                                    <th>Device/Mob No.</th> -->                                </tr>
                            </thead>
                            <tbody>
    <?php $i = 0;
    	foreach ($results as $key => $value) {
			$i++;
			$status = $this->common->getDbValue($value['status']);
			$driver_info = $this->common->getSingleInfoBy('user_master_front', 'user_id', $value['driver_id'], '*');
			$veh_info = $this->common->getSingleInfoBy('master_vehicles', 'id', $value['vehicle_id'], '*');
			$secu_out_info = $this->common->getSingleInfoBy('user_master_front', 'user_id', $value['check_out_secu'], 'first_name,middle_name,last_name,mobile,email');
			$secu_in_info = $this->common->getSingleInfoBy('user_master_front', 'user_id', $value['check_in_secu'], 'first_name,middle_name,last_name,mobile,email');
			
			$sql = "select * from inventory_receipt where inv_id='" . $value['inv_id'] . "' ";
			$query = $this->db->query($sql);
			$num_rows = $query->num_rows();
    ?>
                                <tr class="  border-left-3  <?php echo ($status == "Active") ? 'border-left-success' : 'border-left-danger' ?>  tr<?php echo $this->common->getDbValue($value['status']); ?>">
                                  <td><?php echo $i?></td>
                                    <td>
                                    
                                    <strong>Inventory Date :</strong> : <?php echo isset($value['inv_date']) ? $this->common->getDateFormat($value['inv_date'], DATE_FORMAT_PHP) : ''; ?><br/>
                                    <strong>Driver :</strong> <?php echo $this->common->getDbValue($driver_info['first_name']); ?> <?php echo $this->common->getDbValue($driver_info['middle_name']); ?> <?php echo $this->common->getDbValue($driver_info['last_name']); ?><br/>
                                    <strong>Vehicle :</strong> <?php echo $this->common->getDbValue($veh_info['name']); ?> (<?php echo $this->common->getDbValue($veh_info['number_plate']); ?>)
                                      
                                    </td>
                                    <td>
                                    <?php if($secu_out_info) {?>
                                        <strong>Name :</strong> <?php echo $this->common->getDbValue($secu_out_info['first_name']); ?> <?php echo $this->common->getDbValue($secu_out_info['middle_name']); ?> <?php echo $this->common->getDbValue($secu_out_info['last_name']); ?><br/>
                                        <strong>Mobile :</strong> <?php echo $this->common->getDbValue($secu_out_info['mobile']); ?><br/>
                                        <strong>Email :</strong> <?php echo $this->common->getDbValue($secu_out_info['email']); ?><br/>
                                        <strong>Out Date :</strong><?php echo isset($value['check_out_date']) ? date('d-M-Y h:i A', strtotime($value['check_out_date'])) : ''; ?><br/>
                                        <?php 									
                                            if($value['checkout_photo']!=''){
                                                $photo = back_path.'uploads/checkout_images/'.stripslashes($value['checkout_photo']);?>                                                                      
                                                <strong><a href="<?php echo $photo?>" target="_blank">View Photo</a></strong>
                                        <?php } ?>
                                        <?php } else { ?>    
                                        <strong>NO OUT REPORT FOUND</strong>
                                    <?php } ?>                                   
                                    
                                    </td>
                                    <td>
                                    <?php if($secu_in_info) {?>
                                        <strong>Name :</strong> <?php echo $this->common->getDbValue($secu_in_info['first_name']); ?> <?php echo $this->common->getDbValue($secu_in_info['middle_name']); ?> <?php echo $this->common->getDbValue($secu_in_info['last_name']); ?><br/>
                                          <strong>Mobile :</strong> <?php echo $this->common->getDbValue($secu_in_info['mobile']); ?><br/>
                                          <strong>Email :</strong> <?php echo $this->common->getDbValue($secu_in_info['email']); ?><br/>
                                        <strong>In Date :</strong><?php echo isset($value['check_in_date']) ? date('d-M-Y h:i A', strtotime($value['check_in_date'])) : ''; ?><br/>
                                        <?php 
                                            if($value['checkin_photo']!=''){
                                                $photo = back_path.'uploads/checkin_images/'.stripslashes($value['checkin_photo']);?>                                                                      
                                                <strong><a href="<?php echo $photo?>" target="_blank">View Photo</a></strong>
                                        <?php } ?> 
                                    <?php } else { ?>    
                                    <strong>NO IN REPORT FOUND</strong>
                                    <?php } ?>                                   
                                    </td>
                                    <td><a href="<?php echo site_url($controller . '/inv_items/' . $value['inv_id']) ?>"><h5><?php echo $num_rows?> Items</h5></a></td>
                                   <!--  <td><?php echo $this->common->getDbValue($value['personal_mobile_number']); ?></td>
                                    <td><?php echo $this->common->getDbValue($value['personal_mobile_number']); ?></td>
                                    <td><?php echo $this->common->getDbValue($value['personal_location']); ?></td> -->                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <?php } else {
    ?>
<div class=" text-center  card-body border-top-info1">
                            No record found
                        </div>
                        <?php
}?>
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
        // Custom bootbox dialog
        $('.bootbox_custom').on('click', function() {
            var uuid = $(this).data("uuid") // will return the number 123
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

                        location.href = "<?php echo site_url($controller . '/delete_data/') ?>" + uuid;


                    }
                }
            });
        });
        </Script>
    </body>

</html>