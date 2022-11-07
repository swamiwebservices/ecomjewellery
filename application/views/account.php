<?php
$domain_id = $this->domain_id;
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>
     
    </style>
</head>

<body>
    <div class="home_black_version">

        <?php $this->load->view('inc_header_menu'); ?>


        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area whitebg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <h3>My Order</h3>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">Home</a></li>
                                <li>&gt;</li>
                                <li><a href="<?php echo site_url('account')?>">Account</a></li>
                                <li>&gt;</li>
                                <li>My Order</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->

        <section class="main_content_area">
            <div class="container">
                <div class="account_dashboard">
                    <div class="row">

                        <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="row">

                                <!-- Tab panes -->
                                <?php 
                if(sizeof($results)){										
               		 $i=0;
                	foreach($results as $key => $value){
                  		$i++;
                ?>

                                <div class="order-id-line">
                                    <p class="order-id"><strong>Order ID:</strong>
                                        #<?php echo $this->common->getDbValue($value['order_id'])?></p>
                                    <p class="order-id" style="padding-left:100px;"><strong>Status:</strong>
                                        <?php echo $this->common->getDbValue($value['name'])?></p>
                                    <p class="placed-on">Placed on
                                        <?php  echo $this->common->getDateFormat($value['date_added'],'d M Y');?> </p>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="product-heading col-md-3">
                                    <h3><?php echo $this->common->getDbValue(ucfirst($value['firstname']))?>
                                        <?php echo $this->common->getDbValue(ucfirst($value['lastname']))?></h3>
                                </div>

                                <div class="product-heading col-md-2">
                                    <p><strong>Products:</strong>
                                        <?php echo $this->services->getTotalOrderProductsByOrderId($value['order_id']);?>
                                    </p>
                                </div>

                                <div class="product-heading col-md-3">
                                    <p><strong>Total:</strong> <?php echo $this->services->format($value['total']);
											  ?></p>
                                </div>

                                <div class="col-md-4 pull-right text-right">
                                    <?php
                        if(($value['order_status_id'] == "1" || $value['order_status_id'] == "2") &&   $value['payment_code']=="cod"   ){
						 
						?>
                                    <!--<a href="<?php echo site_url('account/cancelorder/'.$this->common->getDbValue($value['order_id']))?>" class="btn btn-midi btn-primary cancelorder" id="<?php echo $this->common->getDbValue($value['order_id'])?>"  data-id="<?php echo $this->common->getDbValue($value['order_id'])?>" onClick="return confirm('Are you sure you want to cancel this order?');">Cancel</a>-->
                                    <?php }?>
                                    <a href="<?php echo site_url('account/orderdetail/'.$this->common->getDbValue($value['uuid']))?>"
                                        class="btn btn-midi btn-primary add-cart-myorder">Detail</a>

                                </div>


                                <div class="clearfix"></div>

                                <?php } } else { ?>

                                <?php }?>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <?php 
                            $this->load->view('account_left'); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>