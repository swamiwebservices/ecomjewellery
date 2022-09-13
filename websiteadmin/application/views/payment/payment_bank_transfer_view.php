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
            <label class="col-sm-2 control-label" for="input-bank">Bank Transfer Instructions</label>
            <div class="col-sm-10">
              <div class="input-group">
                <textarea name="bank_transfer_bank" required cols="80" rows="10" placeholder="Bank Transfer Instructions" id="input-bank" class="form-control"><?php echo isset($records['bank_transfer_bank']) ? $records['bank_transfer_bank'] : ''; ?></textarea>
              </div>
               
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="The checkout total the order must reach before this payment method becomes active.">Total</span></label>
            <div class="col-sm-10">
              <input type="text" name="bank_transfer_total" value="<?php echo isset($records['bank_transfer_total']) ? $records['bank_transfer_total'] : ''; ?>" placeholder="Total" id="input-total" class="form-control" />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 control-label" for="input-order-status">Order Status</label>
            <div class="col-sm-10">
              <select name="bank_transfer_order_status_id" id="input-order-status" class="form-control">
               <?php
                $bank_transfer_order_status_id =  isset($records['bank_transfer_order_status_id']) ? $records['bank_transfer_order_status_id'] : '';
				?>
                <?php foreach ($order_statuses as $order_status) { ?>
                <?php if ($order_status['order_status_id'] == $bank_transfer_order_status_id) { ?>
                <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div> 
          <div class="form-group row">
            <label class="col-sm-2 control-label" for="input-geo-zone">Geo Zone</label>
            <div class="col-sm-10">
              <select name="bank_transfer_geo_zone_id" id="input-geo-zone" class="form-control">
                <option value="0">All Zones</option>
                <?php
                $bank_transfer_geo_zone_id =  isset($records['bank_transfer_geo_zone_id']) ? $records['bank_transfer_geo_zone_id'] : '';
				?>
                <?php foreach ($geo_zones as $geo_zone) { ?>
                <?php if ($geo_zone['geo_zone_id'] == $bank_transfer_geo_zone_id) { ?>
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
              <select name="bank_transfer_status" id="input-status" class="form-control">
              <?php
					$bank_transfer_status =  isset($records['bank_transfer_status']) ? $records['bank_transfer_status'] : '';
				?>
                <?php if ($bank_transfer_status) { ?>
                <option value="1" selected="selected">Enabled</option>
                <option value="0">Disabled</option>
                <?php } else { ?>
                <option value="1">Enabled</option>
                <option value="0" selected="selected">disabled</option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 control-label" for="input-sort-order">Sort Order</label>
            <div class="col-sm-10">
              <input type="text" name="bank_transfer_sort_order" value="<?php echo isset($records['bank_transfer_sort_order']) ? $records['bank_transfer_sort_order'] : ''; ?>" placeholder="Sort Order" id="input-sort-order" class="form-control" />
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



        <!-- App js -->

        <script src="<?PHP echo base_url()?>assets/js/jquery.core.js"></script>

        <script src="<?PHP echo base_url()?>assets/js/jquery.app.js"></script>



        <!-- Page specific js -->

         



    </body>



 </html>