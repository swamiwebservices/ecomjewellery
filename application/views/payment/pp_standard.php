 <?php 
 
			
 if ($testmode) {
	//print_r($this->session->userdata('payment_method'));
	  ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $text_testmode; ?></div>
<?php } ?>
  <div class="alert alert-danger div_shipping_payment_error" id="div_shipping_payment_error"  style="display:none"></div>
<form action="<?php echo $action; ?>" method="post" id="paypalfrm" name="paypalfrm">
  <input type="hidden" name="cmd" value="_cart" />
  <input type="hidden" name="upload" value="1" />
  <input type="hidden" name="business" value="<?php echo $business; ?>" />
  <?php $i = 1; ?>
  <?php
 
  foreach ($products as $product) { 
 
  ?>
  <input type="hidden" name="item_name_<?php echo $i; ?>" value="<?php echo $product['name']; ?>" />
  <input type="hidden" name="item_number_<?php echo $i; ?>" value="<?php echo isset($product['id'])?$product['id']:''; ?>" />
  <input type="hidden" name="amount_<?php echo $i; ?>" value="<?php echo $product['price']; ?>" />
  <input type="hidden" name="quantity_<?php echo $i; ?>" value="<?php echo $product['quantity']; ?>" />
  <input type="hidden" name="weight_<?php echo $i; ?>" value="<?php echo $product['weight_gms']/1000; ?>" />
  <input type="hidden" name="weight_unit<?php echo $i; ?>" value="kgs" />

  <?php $j = 0; ?>
 
  <?php $i++; ?>
  <?php } ?>
  <?php if ($discount_amount_cart) { ?>
    <input type="hidden" name="discount_amount_cart" value="<?php echo $discount_amount_cart; ?>" />
  <?php } ?>
  <input type="hidden" name="currency_code" value="<?php echo $currency_code; ?>" />
  <input type="hidden" name="first_name" value="<?php echo $first_name; ?>" />
  <input type="hidden" name="last_name" value="<?php echo $last_name; ?>" />
  <input type="hidden" name="address1" value="<?php echo $address1; ?>" />
  <input type="hidden" name="address2" value="<?php echo $address2; ?>" />
  <input type="hidden" name="city" value="<?php echo $city; ?>" />
  <input type="hidden" name="zip" value="<?php echo $zip; ?>" />
  <input type="hidden" name="country" value="<?php echo $country; ?>" />
  <input type="hidden" name="address_override" value="1" />
  <input type="hidden" name="email" value="<?php echo $email; ?>" />
  <input type="hidden" name="invoice" value="<?php echo $invoice; ?>" />
  <input type="hidden" name="lc" value="<?php echo $lc; ?>" />
  <input type="hidden" name="rm" value="2" />
   <input type="hidden" name="no_shipping" value="1" />
  <input type="hidden" name="charset" value="utf-8" />
  <input type="hidden" name="return" value="<?php echo $return; ?>" />
  <input type="hidden" name="notify_url" value="<?php echo $notify_url; ?>" />
  <input type="hidden" name="cancel_return" value="<?php echo $cancel_return; ?>" />
  <input type="hidden" name="paymentaction" value="<?php echo $paymentaction; ?>" />
  <input type="hidden" name="custom" value="<?php echo $custom; ?>" />
 
   
  <div id="checkout-payment">
	<div class="d-inline-block pt-2 pd-2 w-100 text-end">
			<button type="button" id="button-confirm" class="btn btn-primary">Confirm
			Order</button> 
	</div>
</div>
</form>
<script type="text/javascript"><!--
$('#button-confirm11').on('click', function() {
 
	var shipping_payment_error = $("#shipping_payment_error").val();
	if(shipping_payment_error!=""){
		$("#div_shipping_payment_error").html(shipping_payment_error);
		$("#div_shipping_payment_error").show();
	} else {	 
		$("#div_shipping_payment_error").hide();	
		var comment = $("#comment").val();
		var dataString = 'comment='+ comment;
		 
		$.ajax({
			type: 'post',
			dataType: 'html',
			data: dataString,
			cache: false,
			url: '<?php echo site_url("pp_standard/confirm")?>',
			 
			beforeSend: function() {
				//$('#button-confirm').button('loading');
			},
			complete: function() {
			//	$('#button-confirm').button('reset');
			 
			},
			success: function(msg) {
				//alert(msg);
			 
				$("#paypalfrm").submit();		
			}
		});
	}
	
});

$('#button-confirm').on('click', function() {
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
                url: '<?php echo site_url("pp_standard/confirm")?>',
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

                    $("#paypalfrm").submit();		

                    
                }
            });
        }
	
});
//--></script>

     
 