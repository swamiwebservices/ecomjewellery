<?php
$domain_id = $this->domain_id;
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>
    .order-id-line {
        border-top: 1px solid #c9c9c9;
        border-bottom: 1px solid #c9c9c9;
        padding: 10px 20px 0px;
        margin: 30px 0px 20px;
        background-color: #d2d2d2;
    }

    .order-id {

        float: left;

    }

    .placed-on {

        float: right;

    }

    .product-image-sm {

        width: 78px;

        height: 82px;

        overflow: hidden;

        float: left;

        margin-left: 20px;

        border-radius: 5px;

    }

    .product-image-sm img {

        width: 100%;

    }

    .product-heading h3 {

        font-size: 16px;

        color: #474747;

        margin: 0px 0px 3px 0px;

    }



    .product-heading h3 a {

        color: #474747;

    }



    .product-heading p {

        font-size: 14px;

        color: #656565;

        margin: 0px 0px 15px 0px;

    }


    .block {
        margin: 0 0 25px;
        border: 1px solid #e5e5e5;
        background: #fff;
        border-radius: 3px 3px 0 0;
    }

    .block .block-title {
        border-bottom: 1px solid #e5e5e5;
        color: #000;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 1px;
        line-height: normal;
        margin: 0;
        padding: 10px 15px;
        text-transform: uppercase;
        background: #fff;
        border-radius: 3px 3px 0 0;
    }

    .block .block-content {
        border-top: medium none;
        font-size: 12px;
        overflow: hidden;
        padding: 15px;
    }

    .block-account .block-content {
        padding-top: 0 !important;
    }

    .block-account .block-content ul {
        margin-top: 5px;
        margin-bottom: 5px;
        list-style-type: none;
        padding-left: 0px;
    }

    .block-account .block-content li:first-child {
        border-top: none;
    }

    .block-account .block-content li {
        padding: 10px 0px;
    }

    :after,
    :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .block-account .block-content li:before {
        content: "\f105";
        font-family: FontAwesome;
        font-size: 10px;
        display: inline-block !important;
        position: absolute;
        cursor: pointer;
        line-height: 16px;
        color: #333;
    }

    .block-account .block-content li a {
        cursor: pointer;
        padding: 0 12px;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    }
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
                            <h3>My account</h3>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">home</a></li>
                                <li>&gt;</li>
                                <li>My account</li>
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