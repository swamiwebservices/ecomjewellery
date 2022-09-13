<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view('inc_metacss');?>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_layouts.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_checkboxes_radios.js"></script>

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
                                <a href="<?php echo site_url($controller.'/coolbox'); ?>" class="breadcrumb-item"><span class="breadcrumb-item "><?php echo (isset($title)) ? $title : '' ?></span></a>
                                <span class="breadcrumb-item active"><?php echo (isset($sub_heading)) ? $sub_heading : '' ?></span>
                            </div>
                            <!-- <i href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a> -->
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


                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title "><?php echo (isset($sub_heading)) ? $sub_heading : '' ?> </h5>
                        </div>
                        <div class="card-body">
                        <form name="frm-edit" id="frm-edit" action="<?php echo site_url($controller . '/cust_box_assign/'.$uuid) ?>" method="post" enctype="multipart/form-data"  >
                                <input type="hidden" name="mode" id="mode" value="submitform">

                                <div class="form-group row">
										<label class="col-lg-2 col-form-label">Box Name:</label>
										<div class="col-lg-9">
											<div class="form-control-plaintext">
												<p><?php echo isset($records['box_name']) ? $this->common->getDbValue($records['box_name']) : ''; ?></p>
											</div>
										</div>
								</div>
                                
                                <div class="form-group row">
										<label class="col-lg-2 col-form-label">Box Size:</label>
										<div class="col-lg-9">
											<div class="form-control-plaintext">
												<p><?php echo isset($records['box_size']) ? $this->common->getDbValue($records['box_size']) : ''; ?></p>
											</div>
										</div>
								</div>                                
                                
								<div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="category_id">Customer :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="cust_id" id="cust_id" required1>
                                        	<option value=''>Select Customer</option>
                                        <?php foreach ($customers as $key => $value) {?>
	                                        <option value='<?php echo $this->common->getDbValue($value['user_id'])?>'><?php echo $this->common->getDbValue($value['first_name'])?> <?php echo $this->common->getDbValue($value['middle_name'])?> <?php echo $this->common->getDbValue($value['last_name'])?> (<?php echo $this->common->getDbValue($value['mobile'])?>) (<?php echo $this->common->getDbValue($value['email'])?>)</option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>

								<div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="name_title">QTY:<span class="text-danger">*</span></label>
                                    <div class="col-lg-4"><input type="text" class="form-control" id="qty" name="qty" placeholder="QTY" value="<?php echo isset($records['qty'])?$this->common->getDbValue($records['qty']):''; ?>">

                                    </div>
                                </div>
                                                                                                
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2"></label>
                                    <div class="col-lg-9">
                                        <button type="submit" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
                                        <a href="<?php echo site_url($controller.'/coolbox'); ?>"><button type="button" class="btn btn-light  ml-2">Cancel</button></a>
                                    </div>
                                </div>
                            </form>
                            
                      </div>
                    </div>

<div class="card  ">
                        <?php
if (isset($box_assigned) && sizeof($box_assigned) > 0) {
    ?>
                        <table class="table table-hover datatable-responsive">
                            <thead>
                                <tr class="bg-blue ">
                                    <th>Box Detail</th>
                                    <th>Customer</th>
                                  <!--   <th>Zone</th>
                                    <th>Device</th>
                                    <th>Device/Mob No.</th> -->
                                    <th>Assigned Date</th>
                                    <th>QR Code</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
		<?php $i = 0;
			    foreach ($box_assigned as $key => $value) {
		        $i++;
				$status = $this->common->getDbValue($value['status']);
				$cust_info = $this->common->getSingleInfoBy('user_master_front', 'user_id', $value['cust_id'], '*');
				$box_info = $this->common->getSingleInfoBy('coolbox_master', 'id', $value['box_id'], '*');
        ?>
                                <tr class="  border-left-3  <?php echo ($status == "Active") ? 'border-left-success' : 'border-left-danger' ?>  tr<?php echo $this->common->getDbValue($value['status']); ?>">
                                    <td><?php echo $this->common->getDbValue($box_info['box_name']); ?> (<?php echo $this->common->getDbValue($box_info['box_size']); ?>)</td>
                                    <td><?php echo $this->common->getDbValue($cust_info['first_name']); ?> <?php echo $this->common->getDbValue($cust_info['middle_name']); ?> <?php echo $this->common->getDbValue($cust_info['last_name']); ?></td>
                                    <td><?php echo isset($value['added_date']) ? $this->common->getDateFormat($value['added_date'], DATE_FORMAT_PHP) : ''; ?></td>
                                    <td class="text-center">
                                    <?php if($value['qr_code']!='') {?>
	                                    <img src="<?php echo back_path;?>uploads/box_qr/<?php echo $this->common->getDbValue($value['qr_code']); ?>" height="70">
                                    <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <a href="<?php echo site_url($this->ctrl_name.'/delete_assigned_box/'.$uuid.'/'.$this->common->getDbValue($value['id']))?>" class="list-icons-item text-danger-600" title="Delete" onClick="return confirm('Are you sure want to delete this record?');"><i class="icon-trash"></i></a>
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


                if (!$("#cust_id").val()) {
                    isError = true;
                    $("#cust_id").addClass("border-danger");
                }

                if (!$("#qty").val()) {
                    isError = true;
                    $("#qty").addClass("border-danger");
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
    </body>

</html>