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

                        <div id="content" class="col-sm-9">
                            <h2>Order Information</h2>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-left" colspan="2">Order Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left" style="width: 50%;"> <b>Order ID:</b>
                                            #<?php echo $order_id?><br>
                                            <b>Date Added:</b> <?php echo $date_added; ?>
                                        </td>
                                        <td class="text-left" style="width: 50%;"> <b>Payment Method:</b>
                                            <?php echo $payment_method; ?><br>
                                            <?php if ($shipping_method) { ?>
                                            <b>Payment Method:</b> <?php echo $shipping_method; ?><br>
                                            <?php }?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-left" style="width: 50%; vertical-align: top;">Payment Address
                                        </th>
                                        <th class="text-left" style="width: 50%; vertical-align: top;">
                                            <?php if ($shipping_address) { ?>Shipping Address<?php }?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left"><?php echo $payment_address; ?></td>
                                        <td class="text-left">
                                            <?php if ($shipping_address) { ?><?php echo $shipping_address; ?><?php }?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Product Name</th>
                                            <th class="text-left">Model</td>
                                            <th class="text-right">Quantity</th>
                                            <th class="text-right">Price</th>
                                            <th class="text-right">Total</th>
                                            <!-- <th style="width: 20px;"></th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
if(isset($products)){
foreach ($products as $product) { ?>
                                        <tr>
                                            <td class="text-left">
                                                <?php echo $this->common->getDbValue($product['name']); ?>
                                                <?php
if(isset($product['image'])){
?>
                                                <div class="product-image-sm">
                                                    <img
                                                        src="<?php echo $this->common->showImage('uploads/prod_images/',$product['image']);?>">
                                                </div>
                                                <?php }
?>
                                            </td>
                                            <td class="text-left">
                                                <?php echo $this->common->getDbValue($product['model']); ?></td>
                                            <td class="text-right"><?php echo $product['quantity']; ?></td>
                                            <td class="text-right"><?php echo $product['price']; ?></td>
                                            <td class="text-right"><?php echo $product['total']; ?></td>
                                            <!--<td class="text-right" style="white-space: nowrap;"> <a style="display:none" href="dddd" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Reorder"><i class="fa fa-shopping-cart"></i></a>
<br>

            <a href="dddd" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Return"><i class="fa fa-reply"></i></a></td>-->
                                        </tr>
                                        <?php }
}
?>
                                    </tbody>
                                    <?php
              if(isset($totals)){

              ?>
                                    <tfoot>
                                        <?php
      foreach ($totals as $total) { 
?>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td class="text-right">
                                                <b><?php echo $this->common->getDbValue($total['title']); ?></b>
                                            </td>
                                            <td class="text-right">
                                                <?php echo $this->common->getDbValue($total['text']); ?>
                                            </td>

                                        </tr>
                                        <?php } ?>
                                    </tfoot>
                                    <?php } ?>
                                </table>
                            </div>
                            <?php if ($comment) { ?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-left">Order Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">
                                            <div style="max-width:400px; overflow:scroll"><?php echo $comment; ?></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <?php } ?>
                            <?php if ($histories) { ?>
                            <h3>Order History</h3>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-left">Date Added</td>
                                        <th class="text-left">Status</th>
                                        <th class="text-left">Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($histories) { ?>
                                    <?php foreach ($histories as $history) { ?>
                                    <tr>
                                        <td class="text-left"><?php echo $history['date_added']; ?></td>
                                        <td class="text-left"><?php echo $history['status']; ?></td>
                                        <td class="text-left"><?php echo $history['comment']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php } ?>

                            <div class="buttons clearfix">
                                <div class="pull-right"><a href="<?php echo site_url('my_dashboard');?>"
                                        class="btn btn-primary">Continue</a></div>
                            </div>
                        </div>



                        <aside id="column-right" class="col-right col-xs-12  col-sm-3">
                            <?php 

$this->load->view('account_left'); ?>
                        </aside>
                    </div>
                </div>
            </div>
        </section>


        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>