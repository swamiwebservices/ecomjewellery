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
                            <h1>Checkout</h1>
                            <ul>
                                <li><a href="<?php echo site_url("home")?>">home</a></li>
                                <li>></li>
                                <li>Success</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->


        <div class="customer_login">
            <div class="container ">
                <div class="row justify-content-lg-center">
                    <div id="content" class="col-md-8 ">
                    <h1>Your order has been placed!</h1>
                        <p>Your order has been successfully processed!</p>
                        <?php
                        if(!empty($order_info['invoice_no'])){
                        ?>
                        <h4>Your order No. is <a href="<?php echo site_url('account/orderdetail/'.$order_info['uuid'])?>">#<?php echo $order_info['invoice_prefix'].$order_info['invoice_no']?></a></h4>
                         <?php }
                         ?>  
                          
                        <p>You can view your order history by going to the <a
                                href="<?php echo site_url("account");?>">my account</a> page and by clicking on
                            <a href="<?php echo site_url("account");?>">history</a>.
                        </p>
                        <p>Please direct any questions you have to the <a
                                href="<?php echo site_url("contact-us");?>">store owner</a>.</p>
                        <p>Thanks for shopping with us online!</p>
                        <div class="buttons">
                            <div class="pull-right"><a href="<?php echo site_url("home");?>"
                                    class="btn btn-primary">Continue</a> &nbsp;
                                <a href="<?php echo site_url('account');?>"><input type="button" value="My Order"
                                        id="button-confirm" class="btn btn-primary" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>