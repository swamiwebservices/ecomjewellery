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
                                <a href="<?php echo site_url($controller.'/inventory'); ?>" class="breadcrumb-item"><span class="breadcrumb-item "><?php echo (isset($title)) ? $title : '' ?></span></a>
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
<?php 
if($records['check_out_secu']==0){
	$col_md = 6;
} else {
	$col_md = 12;
}
	?>
<div class="row">
					<div class="col-md-<?php echo $col_md?>">

						<!-- Basic layout-->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Inventory Detail</h5>
							</div>

							<div class="card-body">
								<div class="form-group row">
										<label class="col-lg-3 col-form-label">Inv Id:</label>
										<div class="col-lg-9">
											<div class="form-control-plaintext">
												<p>INV<?php echo isset($records['inv_id']) ? $this->common->getDbValue($records['inv_id']) : ''; ?></p>
											</div>
										</div>
									</div>
                                    
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Date:</label>
										<div class="col-lg-9">
											<div class="form-control-plaintext">
												<p><?php echo isset($records['added_date']) ? $this->common->getDateFormat($records['added_date'], DATE_FORMAT_PHP) : ''; ?></p>
											</div>
										</div>
									</div>                                                                

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Vehicle:</label>
										<div class="col-lg-9">
											<div class="form-control-plaintext">
												<p>
                                        <?php echo isset($veh_records['name']) ? $this->common->getDbValue($veh_records['name']) : ''; ?>
                                        (<?php echo isset($veh_records['number_plate']) ? $this->common->getDbValue($veh_records['number_plate']) : ''; ?>)
												</p>
											</div>
										</div>
									</div>                                                                

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Driver:</label>
										<div class="col-lg-9">
											<div class="form-control-plaintext">
												<p>
                                        <?php echo isset($drv_records['first_name']) ? $this->common->getDbValue($drv_records['first_name']) : ''; ?>
                                        <?php echo isset($drv_records['middle_name']) ? $this->common->getDbValue($drv_records['middle_name']) : ''; ?>
                                        <?php echo isset($drv_records['last_name']) ? $this->common->getDbValue($drv_records['last_name']) : ''; ?>
												</p>
											</div>
										</div>
									</div>                                                                
							   
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">QR Code:</label>
										<div class="col-lg-9">
											<div class="form-control-plaintext">
												<p>                                                
                                                <img src="<?php echo base_url()?>../uploads/driver/<?php echo $this->common->getDbValue($drv_records['qr_code']); ?>" width="100">                                        
												</p>
											</div>
										</div>
									</div>                                 
							</div>
						</div>
						<!-- /basic layout -->

					</div>
<?php if($records['check_out_secu']==0){?>
					<div class="col-md-6">

						<!-- Static mode -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Add Products</h5>
							</div>

							<div class="card-body">
								<form name="frm-edit" id="frm-edit" action="<?php echo site_url($controller . '/inv_items/'.$uuid) ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="mode" id="mode" value="submitform">
                                <input type="hidden" name="item_type" id="item_type" value="PRO">                                
                                
								<div class="form-group row">
                                    <label class="col-form-label col-lg-3" for="product_id">Product :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="product_id" id="product_id" required1>
                                        <option value="">Select product</option>
                                        <?php  foreach ($products as $key => $value) {
											$sql = "select * from inventory_receipt where inv_id='" . $uuid . "' and prod_id='" . $this->common->getDbValue($value['product_id']) . "' AND item_type='PRO'";
											$query = $this->db->query($sql);
											if ($query->num_rows() == 0) {
										?>
                                        	<option value="<?php echo $this->common->getDbValue($value['product_id']); ?>##<?php echo $this->common->getDbValue($value['name']); ?>##<?php echo $this->common->getDbValue($value['name_en']); ?>"><?php echo $this->common->getDbValue($value['name_en']); ?></option>
										<?php } } ?>
                                        </select>
                                    </div>
                                </div>                                

								<div class="form-group row">
                                    <label class="col-form-label col-lg-3" for="first_name">Qty :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9"><input type="text" class="form-control" id="prod_chk_out_qty" name="prod_chk_out_qty" placeholder="Qty" value="" onkeypress="return isNumber(event)">

                                    </div>
                                </div>                                

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2"></label>
                                    <div class="col-lg-9">
                                        <button type="submit" class="btn bg-blue">Add Item <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </div>
                            </form>
							</div>
						</div>
                        
                        
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Add Cool Box  <a href="<?php echo site_url('security/coolbox') ?>">Click here</a> to assign cool box</h5>
							</div>

							<div class="card-body">
								<form name="frm-edit-cobx" id="frm-edit-cobx" action="<?php echo site_url($controller . '/inv_items/'.$uuid) ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="mode" id="mode" value="submitform">
                                <input type="hidden" name="item_type" id="item_type" value="CLBOX">
                                
                                
								<div class="form-group row">
                                    <label class="col-form-label col-lg-3" for="product_id">Cool Box :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="coolbox_id" id="coolbox_id" required1>
                                        <option value="">Select cool box</option>
                                        <?php  foreach ($cl_box as $key => $value) {
											$sql = "select * from inventory_receipt where inv_id='" . $uuid . "' and prod_id='" . $this->common->getDbValue($value['id']) . "' AND item_type='CLBOX' ";
											$query = $this->db->query($sql);
											
											$cust_info = $this->common->getSingleInfoBy('user_master', 'user_id', $value['cust_id'], '*');

											echo $cust_sql = "SELECT * FROM user_master_front WHERE user_id='".$value['cust_id']."' ";
									        $query_result = $this->db->query($cust_sql);
									        $cust_info = $query_result->row_array();
																								
											if ($query->num_rows() == 0) {
										?>
                                        	<option value="<?php echo $this->common->getDbValue($value['id']); ?>##<?php echo $this->common->getDbValue($value['box_name']); ?>##<?php echo $this->common->getDbValue($value['box_name_en']); ?>##<?php echo $this->common->getDbValue($value['qty']); ?>">
											<?php echo $this->common->getDbValue($value['box_name_en']); ?> : 
                                            <?php echo $this->common->getDbValue($cust_info['first_name']); ?>
                                            <?php echo $this->common->getDbValue($cust_info['middle_name']); ?>
                                            (<?php echo $this->common->getDbValue($value['qty']); ?> QTY)
                                            </option>
										<?php } } ?>
                                        </select>
                                    </div>
                                </div>                                

								<!--<div class="form-group row">
                                    <label class="col-form-label col-lg-3" for="first_name">Qty :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9"><input type="text" class="form-control" id="coolbox_chk_in_qty" name="coolbox_chk_in_qty" placeholder="Qty" value="" onkeypress="return isNumber(event)">

                                    </div>
                                </div>-->                                

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2"></label>
                                    <div class="col-lg-9">
                                        <button type="submit" class="btn bg-blue">Add Box <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </div>
                            </form>
							</div>
						</div>                        
						<!-- /static mode -->

					</div>
<?php } ?>                    
				</div>

                  <div class="card">
                        
               <?php if (isset($results) && sizeof($results)>0) { ?>
                        <div class="table-responsive">
						<table width="100%" class="table table-hover datatable-responsive">
                            <thead>
                                <tr class="bg-blue ">
		                            <th width="2%">#</th>
		                            <th width="18%"  >Product / Cool Box</th>
		                            <th width="10%"  >Out Qty</th>
		                            <th width="9%"  >In Qty</th>
		                            <th width="13%"  >Type</th>
		                            <th width="40%">Report</th>
                                    <th width="8%">Actions</th>
		                        </tr>
		                    </thead>
		                    <tbody>
                                <?php  $i=0;
									foreach($results as $key => $value){
									$i++;
								?>                            
		                         <tr class="  border-left-3">
                                    <td valign="top"><?php echo $i?></td>
                                    <td valign="top"><strong><?php echo $this->common->getDbValue($value['prod_name_en']); ?></strong></td>
                                    <td valign="top"><strong><?php echo $this->common->getDbValue($value['prod_chk_out_qty']); ?></strong></td>
                                    <td valign="top"><strong><?php echo $this->common->getDbValue($value['prod_chk_in_qty']); ?></strong></td>
                                    <td valign="top">
                                    <strong><?php
                                    if($value['item_type']=='PRO') {
										echo 'PRODUCT';
									} else {
										echo 'COOL BOX';										
									}
									?></strong>
                                    </td>
                                    <td valign="top">
                                    <?php 
									if($value['report_type']==1) {
										echo '<strong>Type : </strong> Incorrect Amount<br/>';
									} else if($value['report_type']==2) {
										echo ' <strong>Type : </strong>Damaged Items<br/>';
									} else {
										echo '-';
									}


									if($value['report_type']!=0) {
										echo ' <strong>Report Date : </strong>'.$this->common->getDateFormat($value['report_date'], 'd-m-Y h:i A').'<br/>';
									}

									if($value['report_type']!=0) {										
										$rept_by = $this->common->getOneRow('user_master_front', "where user_id=" . $value['report_by']);
										echo ' <strong>Reported By : </strong>'.$this->common->getDbValue($rept_by['first_name']).' '. $this->common->getDbValue($rept_by['middle_name']). ' ' . $this->common->getDbValue($rept_by['last_name']).'<br/>';
									}
									
									if($value['report_type']!=0) {
										echo ' <strong>Description : </strong>'.$this->common->getDbValue($value['report_desc']).'<br/>';
									}


																			
									?>
                                    </td>
		                            <td valign="top">
                              <div class="list-icons">
                                            <!--<a href="<?php echo site_url($this->ctrl_name.'/edit_product/'.$this->common->getDbValue($value['rec_id'])) ?>" class="list-icons-item text-primary-600" data-popup="tooltip" title="" data-original-title="Edit"><i class="icon-pencil7"></i></a>-->
                                            <?php if($records['check_out_secu']==0){?>
                                            <a href="<?php echo site_url($this->ctrl_name.'/delete_recept/'.$uuid.'/'.$this->common->getDbValue($value['rec_id']))?>" class="list-icons-item text-danger-600" title="Delete" onClick="return confirm('Are you sure want to delete this record?');"><i class="icon-trash"></i></a>
                                            <?php } ?>
                                            
                                        </div></td>
		                        </tr>
<?php } ?>                                
	                        </tbody>
		                </table>
</div>
                        <?php } else {
                        ?>
          <div class=" text-center  card-body border-top-info1">
                            No items found
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


                if (!$("#product_id").val()) {
                    isError = true;
                    //$("#error_first_name").show()
                    $("#product_id").addClass("border-danger");

                }
                if (!$("#prod_chk_out_qty").val()) {
                    isError = true;
                    // $("#error_mobile_number1").show()
                    $("#prod_chk_out_qty").addClass("border-danger");
                }

                //frd_email
                if (isError) {
                    return false;
                } else {
                    $("#frm-edit").submit();
                }

                return false;
            });
			
            $("#frm-edit-cobx").submit(function(e) {
                var isError = false;
                var errMsg = "";
                var errMsg_alert = "";
                $(".form-control").removeClass("border-danger");


                if (!$("#coolbox_id").val()) {
                    isError = true;
                    //$("#error_first_name").show()
                    $("#coolbox_id").addClass("border-danger");

                }
                /*if (!$("#coolbox_chk_in_qty").val()) {
                    isError = true;
                    // $("#error_mobile_number1").show()
                    $("#coolbox_chk_in_qty").addClass("border-danger");
                }*/

                //frd_email
                if (isError) {
                    return false;
                } else {
                    $("#frm-edit-cobx").submit();
                }

                return false;
            });			


        });
        </script>
        
<script type="text/javascript">     
function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if ( (charCode > 31 && charCode < 48) || charCode > 57) {
            return false;
        }
        return true;
    }
</script>        
    </body>

</html>