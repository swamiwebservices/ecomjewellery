<!DOCTYPE html>

<html>

 

 <head>

        <?php $this->load->view('includesTitle');?>



    </head>





    <body class="fixed-left">



        <!-- Begin page -->

        <div id="wrapper">



            <!-- Top Bar Start -->

              <?php $this->load->view('includesHeaderTopMenu');?>

            <!-- Top Bar End -->





            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">

                

					<?php $this->load->view('leftMenu');?>

            </div>

            <!-- Left Sidebar End -->







            <!-- ============================================================== -->

            <!-- Start right Content here -->

            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Start content -->

                <div class="content">

                    <div class="container">



                        <div class="row">

							<div class="col-xs-12">

								<div class="page-title-box">

                                    <h4 class="page-title">Payment Management</h4>

                                     <div class="btn-group pull-right">

                             <a href="<?php echo site_url('payment')?>">



                              <button class="  btn btn-success waves-effect w-md waves-light m-b-5">



                              <i class=" fa glyphicon-plus "> << Back</i>



                              </button>



                              



                            </a> 

                            

                        </div>

                                    <div class="clearfix"></div>

                                </div>

							</div>

						</div>

                        <!-- end row -->





                         

                       <div class="row">

                        	<div class="col-sm-12">

                        		<div class="card-box">

 									 <div class="row">

                                         



                                        <div class="col-sm-12 col-xs-12 col-md-8">

                                            <h4 class="header-title m-t-0"><?php echo isset($sub_heading) ? $sub_heading : ''; ?></h4>

                                               <?php if(isset($error_msg)) {?>     

                        <div class="alert alert-danger alert-dismissible fade in" role="alert">

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                                <span aria-hidden="true">×</span>

                            </button>

                            <ul>

                            <?php echo  $error_msg;?>

                            </ul>

                        </div>

						<?php }?>

												  <?php
                                       if($this->session->userdata('success')!=""){
									   ?>
                                      <div class="alert alert-success" id="btncreateaccountMsg2" style="display:none1"><?php    echo $this->session->userdata('success'); ?></div>
                                      <?php }?>
                                
                         <?php
                                       if($this->session->userdata('warning')!=""){
									   ?>
                                      <div class="alert alert-warning" id="btncreateaccountMsg2" style="display:none1"><?php    echo $this->session->userdata('warning'); ?></div>
                                      <?php }?>

                                            <div class="p-20">

                                                <form action="<?php echo site_url($controller.'')?>" method="post" enctype="multipart/form-data" id="form-bank-transfer" class="form-horizontal">
                                                <input type="hidden" name="mode" id="mode" value="edit_content">
          											  <div class="form-group row">
                <label class="col-sm-2 control-label" for="entry-email">E-Mail</label>
                <div class="col-sm-10">
                  <input type="text" required name="pp_standard_email" value="<?php echo isset($records['pp_standard_email']) ? $records['pp_standard_email'] : ''; ?>" placeholder="E-Mail" id="entry-email" class="form-control"/>
                  
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-live-demo"><span data-toggle="tooltip" title="Use the live or testing (sandbox) gateway server to process transactions?">Sandbox Mode</span></label>
                <div class="col-sm-10">
                  <select name="pp_standard_test" id="input-live-demo" class="form-control">
                   <?php
					$pp_standard_test =  isset($records['pp_standard_test']) ? $records['pp_standard_test'] : '0';
					?>
                    <?php if ($pp_standard_test) { ?>
                    <option value="1" selected="selected">Yes</option>
                    <option value="0">No</option>
                    <?php } else { ?>
                    <option value="1">Yes</option>
                    <option value="0" selected="selected">No</option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-debug"><span data-toggle="tooltip" title="Logs additional information to the system log">Debug Mode</span></label>
                <div class="col-sm-10">
                  <select name="pp_standard_debug" id="input-debug" class="form-control">
                   <?php
					$pp_standard_debug =  isset($records['pp_standard_debug']) ? $records['pp_standard_debug'] : '0';
					?>
                    <?php if ($pp_standard_debug) { ?>
                    <option value="1" selected="selected">Enabled</option>
                    <option value="0">Disabled</option>
                    <?php } else { ?>
                    <option value="1">Enabled</option>
                    <option value="0" selected="selected">Disabled</option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-transaction">Transaction Method</label>
                <div class="col-sm-10">
                  <select name="pp_standard_transaction" id="input-transaction" class="form-control">
                  <?php
					$pp_standard_transaction =  isset($records['pp_standard_transaction']) ? $records['pp_standard_transaction'] : '0';
					?>
                    <?php if (!$pp_standard_transaction) { ?>
                    <option value="0" selected="selected">Authorization</option>
                    <?php } else { ?>
                    <option value="0">Authorization</option>
                    <?php } ?>
                    <?php if ($pp_standard_transaction) { ?>
                    <option value="1" selected="selected">Sale</option>
                    <?php } else { ?>
                    <option value="1">Sale</option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="The checkout total the order must reach before this payment method becomes active">Total</span></label>
                <div class="col-sm-10">
                  <input type="text" name="pp_standard_total" value="<?php echo isset($records['pp_standard_total']) ? $records['pp_standard_total'] : ''; ?>" placeholder="Total" id="input-total" class="form-control"/>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-geo-zone">Geo Zone</label>
                <div class="col-sm-10">
                  <select name="pp_standard_geo_zone_id" id="input-geo-zone" class="form-control">
                   <?php
					$pp_standard_geo_zone_id =  isset($records['pp_standard_geo_zone_id']) ? $records['pp_standard_geo_zone_id'] : '0';
					?>
                    <option value="0">All Zones </option>
                    <?php foreach ($geo_zones as $geo_zone) { ?>
                    <?php if ($geo_zone['geo_zone_id'] == $pp_standard_geo_zone_id) { ?>
                    <option value="<?php echo $geo_zone['geo_zone_id']; ?>" selected="selected"><?php echo $geo_zone['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $geo_zone['geo_zone_id']; ?>"><?php echo $geo_zone['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-status">Status</label>
                <div class="col-sm-10">
                  <select name="pp_standard_status" id="input-status" class="form-control">
                  <?php
						$pp_standard_status =  isset($records['pp_standard_status']) ? $records['pp_standard_status'] : '';
					?>
                    <?php if ($pp_standard_status) { ?>
                    <option value="1" selected="selected">Enabled</option>
                    <option value="0">Disabled</option>
                    <?php } else { ?>
                    <option value="1">Enabled</option>
                    <option value="0" selected="selected">Disabled</option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-sort-order">Sort Order</label>
                <div class="col-sm-10">
                  <input type="text" name="pp_standard_sort_order" value="<?php echo isset($records['pp_standard_sort_order']) ? $records['pp_standard_sort_order'] : ''; ?>" placeholder="Sort Order" id="input-sort-order" class="form-control"/>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-canceled-reversal-status">Canceled</label>
                <div class="col-sm-10">
                <?php
						$pp_standard_canceled_reversal_status_id =  isset($records['pp_standard_canceled_reversal_status_id']) ? $records['pp_standard_canceled_reversal_status_id'] : '';
					?>
                  <select name="pp_standard_canceled_reversal_status_id" id="input-canceled-reversal-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $pp_standard_canceled_reversal_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-completed-status">Completed Status</label>
                <div class="col-sm-10">
                <?php
						$pp_standard_completed_status_id =  isset($records['pp_standard_completed_status_id']) ? $records['pp_standard_completed_status_id'] : '';
					?>
                  <select name="pp_standard_completed_status_id" id="input-completed-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $pp_standard_completed_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-denied-status">Denied Status</label>
                <div class="col-sm-10">
                 <?php
						$pp_standard_denied_status_id =  isset($records['pp_standard_denied_status_id']) ? $records['pp_standard_denied_status_id'] : '';
					?>
                  <select name="pp_standard_denied_status_id" id="input-denied-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $pp_standard_denied_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-expired-status">Expired Status</label>
                <div class="col-sm-10">
                 <?php
						$pp_standard_expired_status_id =  isset($records['pp_standard_expired_status_id']) ? $records['pp_standard_expired_status_id'] : '';
					?>
                  <select name="pp_standard_expired_status_id" id="input-expired-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $pp_standard_expired_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-failed-status">Failed Status</label>
                <div class="col-sm-10">
                 <?php
						$pp_standard_failed_status_id =  isset($records['pp_standard_failed_status_id']) ? $records['pp_standard_failed_status_id'] : '';
					?>
                  <select name="pp_standard_failed_status_id" id="input-failed-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $pp_standard_failed_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-pending-status">Pending Status</label>
                <div class="col-sm-10">
                 <?php
						$pp_standard_pending_status_id =  isset($records['pp_standard_pending_status_id']) ? $records['pp_standard_pending_status_id'] : '';
					?>
                  <select name="pp_standard_pending_status_id" id="input-pending-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $pp_standard_pending_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-processed-status">Processed Status</label>
                <div class="col-sm-10">
                <?php
						$pp_standard_processed_status_id =  isset($records['pp_standard_processed_status_id']) ? $records['pp_standard_processed_status_id'] : '';
					?>
                  <select name="pp_standard_processed_status_id" id="input-processed-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $pp_standard_processed_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-refunded-status">Refunded Status</label>
                <div class="col-sm-10">
                <?php
						$pp_standard_refunded_status_id =  isset($records['pp_standard_refunded_status_id']) ? $records['pp_standard_refunded_status_id'] : '';
					?>
                  <select name="pp_standard_refunded_status_id" id="input-refunded-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $pp_standard_refunded_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label" for="input-reversed-status">Reversed Status</label>
                <div class="col-sm-10">
                  <select name="pp_standard_reversed_status_id" id="input-reversed-status" class="form-control">
                  
                    <?php
						$pp_standard_reversed_status_id =  isset($records['pp_standard_reversed_status_id']) ? $records['pp_standard_reversed_status_id'] : '';
						?>
						<?php foreach ($order_statuses as $order_status) { ?>
						 
                    <?php if ($order_status['order_status_id'] == $pp_standard_reversed_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
             										<div class="form-group row">
                <label class="col-sm-2 control-label" for="input-void-status">Voided Status</label>
                <div class="col-sm-10">
                  <select name="pp_standard_voided_status_id" id="input-void-status" class="form-control">
                  
                    <?php
						$pp_standard_voided_status_id =  isset($records['pp_standard_voided_status_id']) ? $records['pp_standard_voided_status_id'] : '';
						?>
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $pp_standard_voided_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
          <div class="form-group row">
                                        <label class="col-md-2 control-label"> </label>
                                        <div class="col-md-10">
                                              <button type="submit" name="btnsubmit" value="btnsubmit" class="btn btn-primary waves-effect waves-light">Submit</button>    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Reset
                                                        </button>
                                        </div>
                                    </div>
        										</form>

                                            </div>



                                        </div>

                                    </div>

                        			    

                

                        			  

                        		</div>

                        	</div><!-- end col -->

                        </div>





                         

                        <!-- end row -->





                       





                    </div> <!-- container -->



                </div> <!-- content -->







            </div>

            <!-- End content-page -->





            <!-- ============================================================== -->

            <!-- End Right content here -->

            <!-- ============================================================== -->





           



            <?php $this->load->view('includesFooter');

			

		$this->session->unset_userdata('success');

			?>





        </div>

        <!-- END wrapper -->





        <script>

            var resizefunc = [];

        </script>

        



        <!-- jQuery  -->

        <script src="<?PHP echo base_url()?>assets/js/jquery.min.js"></script>

        <script src="<?PHP echo base_url()?>assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->

        <script src="<?PHP echo base_url()?>assets/js/bootstrap.min.js"></script>

        <script src="<?PHP echo base_url()?>assets/js/detect.js"></script>

        <script src="<?PHP echo base_url()?>assets/js/fastclick.js"></script>

        <script src="<?PHP echo base_url()?>assets/js/jquery.blockUI.js"></script>

        <script src="<?PHP echo base_url()?>assets/js/waves.js"></script>

        <script src="<?PHP echo base_url()?>assets/js/jquery.nicescroll.js"></script>

        <script src="<?PHP echo base_url()?>assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?PHP echo base_url()?>assets/js/jquery.slimscroll.js"></script>

        <script src="<?PHP echo base_url()?>assets/plugins/switchery/switchery.min.js"></script>



        <!--Morris Chart-->

		<script src="<?PHP echo base_url()?>assets/plugins/morris/morris.min.js"></script>

		<script src="<?PHP echo base_url()?>assets/plugins/raphael/raphael-min.js"></script>



        <!-- Counter Up  -->

        <script src="<?PHP echo base_url()?>assets/plugins/waypoints/lib/jquery.waypoints.js"></script>

        <script src="<?PHP echo base_url()?>assets/plugins/counterup/jquery.counterup.min.js"></script>

         <script src="<?PHP echo base_url()?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>


        <!-- App js -->

        <script src="<?PHP echo base_url()?>assets/js/jquery.core.js"></script>

        <script src="<?PHP echo base_url()?>assets/js/jquery.app.js"></script>



        <!-- Page specific js -->

         



    </body>



 </html>