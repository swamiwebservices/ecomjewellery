
  <div class="alert alert-danger div_shipping_payment_error" id="div_shipping_payment_error" style="display:none"></div>
      
  <form action="<?php echo $action ?>" method="post" id="razorpay_form" name="razorpay_form">
  <input type="hidden" name="order_id" id="order_id" value="0">
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
                url: '<?php echo site_url("razorpay/confirm")?>',
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

                    if (dataresp.status == "1") {
                        
                        console.log("dataresp  success : ", dataresp);
                      //  $("#order_id").val(dataresp.options.order_id);
                     //   $("#razorpay_form").attr('action', dataresp.options.callback_url);

                        options = dataresp.options;
                        console.log("redata  success : ", dataresp);
                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                        // e.preventDefault();
                    } else {
                        console.log("dataresp  error : ", dataresp);

                        // alert(redata.msg);
                    }
                $.unblockUI();
                    
                }
            });
        }
	
});
  </script>