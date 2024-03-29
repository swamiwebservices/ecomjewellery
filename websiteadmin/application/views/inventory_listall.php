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

                        <div class="header-elements d-none">
                            <div class="breadcrumb justify-content-center">
                                <a href="<?php echo site_url($controller . "/addinv"); ?>" class="breadcrumb-elements-item">
                                    <button type="button" class="btn btn-success btn-sm"><i class="icon-plus2 mr-2"></i> Add New</button>
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
                                    <th>Driver Name</th>
                                    <th>Vehicle</th>
                                    <th>Items</th>
                                  <!--   <th>Zone</th>
                                    <th>Device</th>
                                    <th>Device/Mob No.</th> -->
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php $i = 0;
    	foreach ($results as $key => $value) {
			$i++;
			$status = $this->common->getDbValue($value['status']);
			$driver_info = $this->common->getSingleInfoBy('user_master_front', 'user_id', $value['driver_id'], '*');
			$veh_info = $this->common->getSingleInfoBy('master_vehicles', 'id', $value['vehicle_id'], '*');			
			
			$sql = "select * from inventory_receipt where inv_id='" . $value['inv_id'] . "' ";
			$query = $this->db->query($sql);
			$num_rows = $query->num_rows();
    ?>
                                <tr class="  border-left-3  <?php echo ($status == "Active") ? 'border-left-success' : 'border-left-danger' ?>  tr<?php echo $this->common->getDbValue($value['status']); ?>">
                                  <td><?php echo $i?></td>
                                    <td><?php echo $this->common->getDbValue($driver_info['first_name']); ?> <?php echo $this->common->getDbValue($driver_info['middle_name']); ?> <?php echo $this->common->getDbValue($driver_info['last_name']); ?></td>
                                    <td><?php echo $this->common->getDbValue($veh_info['name']); ?> (<?php echo $this->common->getDbValue($veh_info['number_plate']); ?>)</td>
                                    <td><a href="<?php echo site_url($controller . '/inv_items/' . $value['inv_id']) ?>"><strong><?php echo $num_rows?> Items</strong></a></td>
                                   <!--  <td><?php echo $this->common->getDbValue($value['personal_mobile_number']); ?></td>
                                    <td><?php echo $this->common->getDbValue($value['personal_mobile_number']); ?></td>
                                    <td><?php echo $this->common->getDbValue($value['personal_location']); ?></td> -->
                                    <td><?php echo isset($value['inv_date']) ? $this->common->getDateFormat($value['inv_date'], DATE_FORMAT_PHP) : ''; ?></td>
                                    <td><?php $status = $this->common->getDbValue($value['status']);?>
                                        <?php
if ($status == "Active") {echo '<span class="badge badge-success">Active</span>';}
        ?>
                                        <?php
if ($status == "Inactive") {echo '<span class="badge badge-light">Inactive</span>';}
        ?>


                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <a href="<?php echo site_url($controller . '/editinv/' . $value['inv_id']) ?>" class="list-icons-item text-primary-600" data-popup="tooltip" title="" data-original-title="Edit"><i class="icon-pencil7"></i></a>
                                            <a href="#" class="list-icons-item text-danger-600 bootbox_custom" data-uuid="<?php echo $value['inv_id'] ?>" data-popup="tooltip" title="" data-original-title="Delete"><i class="icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
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
         //   alert(uuid);
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

                        location.href = "<?php echo site_url($controller . '/inventory_delete/') ?>" + uuid;


                    }
                }
            });
        });
        </Script>
    </body>

</html>