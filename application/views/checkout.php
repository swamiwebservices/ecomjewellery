<?php
$DEFAULT_COUNTRY_DOMAINs = $this->config->item("DEFAULT_COUNTRY_DOMAINs");
$getDomainId = $this->services->getDomainId();
 $default_country = $DEFAULT_COUNTRY_DOMAINs[$getDomainId];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>
    .submitbutton {
        background: #c09578;
        border: 0;
        color: #ffffff;
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        height: 34px;
        line-height: 21px;
        padding: 5px 20px;
        text-transform: uppercase;
        cursor: pointer;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        margin-left: 20px;
        border-radius: 20px;
    }

    .paymentselctedki {
        border: 0px solid #ebebeb !important;
        background: none !important;
        height: unset !important;
        width: unset !important;
        padding: 0 10px !important;

    }
    </style>
</head>

<body>
    <?php $this->load->view('inc_header_menu'); ?>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1>Checkout</h1>
                        <ul>
                            <li><a href="<?php echo site_url("home")?>">home</a></li>
                            <li>></li>
                            <li><a href="<?php echo site_url("cart")?>">Shopping Cart</a></li>
                            <li>></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <!--Checkout page section-->
    <div class="Checkout_section" id="accordion">
        <div class="container">
            <?php
           
                                $error = $this->session->flashdata('error');
                                if ($error!='') {
                            ?>
            <div class="alert bg-danger text-white alert-dismissible">
                <span class="font-weight-bold">Error!</span> <?php echo $error?>
            </div>
            <?php }?>
            <form id="form-checkout" class="form-horizontal" action="<?php echo site_url('checkout');?>" method="post">
                <input type="hidden" name="shipping_payment_error" id="shipping_payment_error" value="">
                <input type="hidden" name="mode" value="checkout">
                <div class="checkout_form">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <h3>Account Information</h3>
                            <div id="billing_address_div">
                                <?php //print_r($shipping_address); 
                                echo (isset($payment_address)) ? $payment_address : ''; ?>
                            </div>
                            <h3>Shipping address</h3>
                             
                        <?php //echo $shipping_address_text;
                        ?>
                            <div id="shipping-new">
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col mb-3 required">
                                        <label for="input-shipping-firstname" class="form-label">First Name</label>
                                        <input type="text" name="shipping_firstname"
                                            value="<?php echo (isset($shipping_address['shipping_firstname'])) ? $shipping_address['shipping_firstname'] : ''?>"
                                            placeholder="First Name" id="input-shipping-firstname" class="form-control"
                                            required>
                                        <div id="error-shipping-firstname" class="invalid-feedback"></div>
                                    </div>
                                    <div class="col mb-3 required">
                                        <label for="input-shipping-lastname" class="form-label">Last Name</label> <input
                                            type="text" name="shipping_lastname"
                                            value="<?php echo (isset($shipping_address['shipping_lastname'])) ? $shipping_address['shipping_lastname'] : ''?>"
                                            placeholder="Last Name" id="input-shipping-lastname" class="form-control"
                                            required>
                                        <div id="error-shipping-lastname" class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="input-shipping_mobile" class="form-label">Mobile
                                        </label>
                                        <input type="text" name="shipping_mobile"
                                            value="<?php echo (isset($shipping_address['shipping_mobile'])) ? $shipping_address['shipping_mobile'] : ''?>"
                                            placeholder="Mobile)" id="input-shipping_mobile" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="input-shipping-company" class="form-label">Company
                                            (Optional)</label>
                                        <input type="text" name="shipping_company"
                                            value="<?php echo (isset($shipping_address['shipping_company'])) ? $shipping_address['shipping_company'] : ''?>"
                                            placeholder="Company (optional)" id="input-shipping-company"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-12 mb-3 required">
                                        <label for="input-shipping-address-1" class="form-label">Address 1</label>
                                        <input type="text" name="shipping_address_1"
                                            value="<?php echo (isset($shipping_address['shipping_address_1'])) ? $shipping_address['shipping_address_1'] : ''?>"
                                            placeholder="Address 1" id="input-shipping-address-1" class="form-control"
                                            required>
                                        <div id="error-shipping-address-1" class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-md-12 mb-3 required">
                                        <label for="input-shipping-address-1" class="form-label">Address2
                                            (optional)</label>
                                        <input type="text" name="shipping_address_2"
                                            value="<?php echo (isset($shipping_address['shipping_address_2'])) ? $shipping_address['shipping_address_2'] : ''?>"
                                            placeholder="Apartment, suite, etc. (optional)"
                                            id="input-shipping-address-1" class="form-control">
                                        <div id="error-shipping-address-1" class="invalid-feedback"></div>
                                    </div>
                                    <div class="co-md-12 mb-3 required">
                                        <label for="input-shipping-country" class="form-label">Country</label>
                                        <select name="shipping_country_id" id="input-shipping-country"
                                            class="form-select" required>
                                            <option value=""> --- Please Select --- </option>
                                            <?php foreach($country_rs as $det){?>
                                            <option value="<?php echo $this->common->getDbValue($det['country_id'])?>"
                                                <?php echo ($shipping_address['shipping_country_id']==$det['country_id']) ? ' selected' : '' ?>>
                                                <?php echo $this->common->getDbValue($det['name'])?></option>
                                            <?php } ?>
                                        </select>
                                        <div id="error-shipping-country" class="invalid-feedback"></div>
                                    </div>
                                    <div class="col mb-3 required">
                                        <?php 
                                       // print_r($shipping_address);
                                        ?>
                                        <label for="input-shipping-zone" class="form-label">Region /
                                            State</label>
                                        <select name="shipping_zone_id" id="input-shipping-zone" class="form-select"
                                            required>
                                            <option value=""> --- Please Select --- </option>
                                            <?php foreach($state_rs as $det){?>
                                            <option value="<?php echo stripslashes($det['zone_id'])?>"
                                                <?php if($shipping_address['shipping_zone_id']==$det['zone_id']){?>selected<?php } ?>>
                                                <?php echo stripslashes($det['name'])?></option>
                                            <?php } ?>
                                        </select>
                                        <div id="error-shipping-zone" class="invalid-feedback"></div>
                                    </div>
                                    <div class="co-md-4 mb-3 required">
                                        <label for="input-shipping-city" class="form-label">City</label>
                                        <input type="text" name="shipping_city"
                                            value="<?php echo (isset($shipping_address['shipping_city'])) ? $shipping_address['shipping_city'] : ''?>"
                                            placeholder="City" id="input-shipping-city" class="form-control" required>
                                        <div id="error-shipping-city" class="invalid-feedback"></div>
                                    </div>
                                    <div class="co-md-4 mb-3 required">
                                        <label for="input-shipping-postcode" class="form-label">Post Code</label>
                                        <input type="text" name="shipping_postcode"
                                            value="<?php echo (isset($shipping_address['shipping_postcode'])) ? $shipping_address['shipping_postcode'] : ''?>"
                                            placeholder="Post Code" id="input-shipping-postcode" class="form-control"
                                            required>
                                        <div id="error-shipping-postcode" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <!-- <div class="text-end mb-3">
                                <button type="submit" id="button-shipping-address"
                                    class="btn btn-primary">Continue</button>
                            </div> -->
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div id="checkout-confirm">
                                <div class="col-md-12 mb-2">
                                    <h3>Add Comments About Your Order</h3>
                                    <textarea name="comment" rows="3" id="input-comment" class="form-control"
                                        spellcheck="false"></textarea>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td class="text-start">Product Name</td>
                                                <td class="text-end">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        
                                        
                                         foreach($record['items'] as $key => $value){
                                            $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/'.$value['main_image']:base_url().'assets/img/350x350.png';
                                            
                                             $sellprice = $value['price']; 
                                             $sellprice_total   = $sellprice * $value['cart_qty'];
                                        ?>
                                            <tr>
                                                <td class="text-start"><?php echo $value['cart_qty']?> x <a
                                                        href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><?php echo $value['name']?></a>
                                                </td>
                                                <td class="text-end">
                                                    <?php echo $this->services->format($sellprice_total)?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <?php foreach ($totals as $total) { ?>

                                            <tr>
                                                <td class="text-end"><strong><?php echo $total['title']; ?></strong>
                                                </td>
                                                <td class="text-end"><?php echo $total['text']; ?></td>
                                            </tr>
                                            <?php } ?>

                                            <!-- <tr>
                                            <td class="text-end"><strong>Free Shipping</strong></td>
                                            <td class="text-end">$0.00</td>
                                        </tr> -->
                                            <!-- <tr>
                                                <td class="text-end"><strong>Total</strong></td>
                                                <td class="text-end"><?php //$subtotal = (!empty($record['subtotal'])) ? $record['subtotal'] : '0.00';
                                               // echo $this->services->format($subtotal); ?></td>
                                            </tr> -->
                                        </tfoot>
                                    </table>
                                </div>
                                <?php
                                if ($payment_methods) {
                                
                                ?>
                                <div class="col-md-12 mb-2">
                                    <h3>PAYMENT OPTIONS</h3>

                                </div>
                                <div class="table-responsive">
                                    <div class="panel-body">
                                        <p>Please select the preferred payment method to use on this order.</p>
                                         
                                            <?php foreach ($payment_methods as $payment_method) { ?>
                                            <div>
                                                <?php if ($payment_method['code'] == $code || !$code) { ?>
                                                <?php $code = $payment_method['code']; ?>
                                                <label for="<?php echo $payment_method['code']; ?>"><input type="radio"
                                                        name="payment_method"
                                                        value="<?php echo $payment_method['code']; ?>"
                                                        class="paymentselctedki"
                                                        id="<?php echo $payment_method['code']; ?>" checked="checked" />
                                                    <?php } else { ?>
                                                    <label for="<?php echo $payment_method['code']; ?>"><input
                                                            type="radio" name="payment_method" class="paymentselctedki"
                                                            id="<?php echo $payment_method['code']; ?>"
                                                            value="<?php echo $payment_method['code']; ?>" />
                                                        <?php } ?>
                                                        <?php echo $payment_method['title']; ?>
                                                    </label>


                                            </div>
                                            <?php } ?>
                                         
                                    </div>
                                    <br />

                                    <div class="extrainfoaboutpayment" id="extrainfoaboutpayment">
                                        <div class="alert alert-danger" style="display:none">
                                            Please select payment option
                                        </div>

                                         
                                    </div>
                                </div>
                                <?php }?>
                                <!-- <div id="checkout-payment">
                                    <div class="d-inline-block pt-2 pd-2 w-100 text-end">
                                        <button type="button" id="button-confirm" class="btn btn-primary">Confirm
                                            Order</button>  
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--Checkout page section end-->
    <?php $this->load->view('inc_footer'); ?>
    <!-- JS ============================================ -->
    <?php $this->load->view('inc_common_footer_js'); ?>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
    $('#input-shipping-country').on('change', function() {
        var element = this;
        chain.attach(function() {
            return $.ajax({
                url: '<?php echo site_url("commonajax/country")?>?country_id=' + $(
                    '#input-shipping-country').val(),
                dataType: 'json',
                beforeSend: function() {
                    $(element).prop('disabled', true);
                },
                complete: function() {
                    $(element).prop('disabled', false);
                },
                success: function(json) {
                    // if (json['postcode_required'] == '1') {
                    //     $('#input-shipping-postcode').parent().addClass('required');
                    // } else {
                    //     $('#input-shipping-postcode').parent().removeClass('required');
                    // }
                    var input_zone = $("#input-shipping-zone").val();
                    html = '<option value=""> --- Please Select --- </option>';
                    if (json['zone'] && json['zone'] != '') {
                        for (i = 0; i < json['zone'].length; i++) {
                            html += '<option value="' + json['zone'][i]['zone_id'] + '"';
                            if (json['zone'][i]['zone_id'] == input_zone) {
                                html += ' selected';
                            }
                            html += '>' + json['zone'][i]['name'] + '</option>';
                        }
                    } else {
                        html += '<option value="0" selected> --- None --- </option>';
                    }
                    $('#input-shipping-zone').html(html);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr
                        .responseText);
                }
            });
        });
    });
    $('#input-shipping-country').trigger('change');
    </script>
    <script type="text/javascript">
    $('#button-confirm1').on('click', function(e) {
        // e.preventDefault();

        //form-checkout
        var dataString = $("#form-checkout").serialize();
        var shipping_payment_error = $("#shipping_payment_error").val();
        if (shipping_payment_error != "") {
            $("#div_shipping_payment_error").html(shipping_payment_error);
            $("#div_shipping_payment_error").show();
        } else {
            $("#div_shipping_payment_error").hide();
            var comment = $("#comment").val();
            //var dataString = 'comment=' + comment;
            $.ajax({
                type: 'post',
                dataType: 'json',
                data: dataString,
                cache: false,
                url: '<?php echo site_url('cod/confirm')?>',
                cache: false,
                beforeSend: function() {
                    //$('#button-confirm').button('loading');
                    $.blockUI({
                        message: '<h6>Please wait. We are processing your request.</h6>'
                    });
                },
                complete: function() {
                    //	$('#button-confirm').button('reset');
                },
                success: function(dataresp) {
                    //alert(msg);
                    console.log(dataresp);

                    $.unblockUI();

                    location = '<?php echo site_url('checkout/success/')?>' + dataresp.uuid;
                }
            });
        }
    });

    $(document).ready(function() {
        $('.paymentselctedki').on('click', function() {
            var paymentmothod_id = $(this).attr('id')
            var payment_url = '<?php echo site_url()?>/' + paymentmothod_id + '/information';

            $.ajax({
                type: 'get',
                url: payment_url,
                cache: false,
                beforeSend: function() {

                },
                complete: function() {

                },
                success: function(htmldata) {
                    //location = 'http://localhost/opencart/index.php?route=checkout/success';
                    //alert(htmldata);
                    console.log(htmldata);
                    $("#extrainfoaboutpayment").html(htmldata);
                }
            });
        });
    })
    </script>
    <script>
    $(document).ready(function() {
        //	$(".mega-menu-category").hide();

        var form = $('#form-checkout');
        var checkedValue = form.find('input[name=payment_method]:checked').val();
        // alert(checkedValue);
        // load default payment module
        if (typeof(checkedValue) !== "undefined") {
           // alert(checkedValue);
            //bank_transfer
            var payment_url_temp = '<?php echo site_url()?>' + checkedValue + '/information';
            //alert(payment_url_temp)
            //$("#extrainfoaboutpayment").load(payment_url_temp);

            $.ajax({
                url: payment_url_temp,
                dataType: "html",
                success: function(html) {
                    $("#extrainfoaboutpayment").html(html)
                }
            });

        } else {

            //$("#extrainfoaboutpayment").hml("Please select payment option");
            //$("#extrainfoaboutpayment").show();
        }

    });
    </script>

</body>

</html>