  <?php if ($testmode=='demo') {
	//print_r($this->session->userdata('payment_method'));
	  ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Warning: The payment gateway is in 'test
      Mode'. Your account will not be charged.</div>
  <?php } ?>
  <div class="alert alert-danger div_shipping_payment_error" id="div_shipping_payment_error" style="display:none"></div>
  <form action="<?php echo $action ?>" method="post" id="payu_form" name="payu_form">
      <input type="hidden" name="key" value="<?php echo $key; ?>" />
      <input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
      <input type="hidden" name="amount" value="<?php echo $amount; ?>" />
      <input type="hidden" name="productinfo" value="<?php echo $productinfo; ?>" />
      <input type="hidden" name="firstname" value="<?php echo $firstname; ?>" />
        <input type="hidden" name="email" value="<?php echo $email; ?>" />
        <input type="hidden" name="surl" value="<?php echo $surl; ?>" />
      <input type="hidden" name="Furl" value="<?php echo $Furl; ?>" />
      <input type="hidden" name="curl" value="<?php echo $curl; ?>" />
      <input type="hidden" name="Hash" value="<?php echo $Hash;?>" />
      <input type="hidden" name="Pg" value="<?php echo $pg; ?>" />
 	  <input type="hidden" name="service_provider" value="<?php echo $service_provider; ?>"   />
      <div class="buttons">
          <div id="checkout-payment">
              <div class="d-inline-block pt-2 pd-2 w-100 text-end">
                  <button type="button" id="button-confirm" class="btn btn-primary">Confirm
                      Order</button>
              </div>
          </div>
      </div>
  </form>

  <script type="text/javascript">
 
$('#button-confirm11').on('click', function() {
    //alert("COD");
    var shipping_payment_error = $("#shipping_payment_error").val();
    if (shipping_payment_error != "") {
        $("#div_shipping_payment_error").html(shipping_payment_error);
        $("#div_shipping_payment_error").show();
    } else {
        $("#div_shipping_payment_error").hide();
        var comment = $("#comment").val();
        var dataString = 'comment=' + comment;
        //alert(dataString);
        $.ajax({
            type: 'post',
            dataType: 'html',
            data: dataString,
            cache: false,
            url: '<?php echo site_url("payu/confirm")?>',
            cache: false,
            beforeSend: function() {
                //$('#button-confirm').button('loading');
            },
            complete: function() {
                //	$('#button-confirm').button('reset');
            },
            success: function(msg) {
                //	alert(msg);

                $("#payu_form").submit();
            }
        });
    }

});
//
 


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
                url: '<?php echo site_url("payu/confirm")?>',
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

                    $("#payu_form").submit();		

                    
                }
            });
        }
	
});
  </script>