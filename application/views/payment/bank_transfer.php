<h2><?php echo $text_instruction; ?></h2>
<p><b><?php echo $text_description; ?></b></p>
  <div class="alert alert-danger div_shipping_payment_error" id="div_shipping_payment_error"  style="display:none"></div>
<div class="well well-sm">
  <p><?php echo $this->common->getDbValue(nl2br($bank)); ?></p>
  <p><?php echo $this->common->getDbValue($text_payment); ?></p>
  <input type="hidden" name="order_id_post" value="<?php echo $this->session->userdata('order_id_ki'); ?>" />
</div>
<div class="buttons">
  <div class="pull-right">
    <input type="button" value="Confirm" id="button-confirm" class="btn btn-primary"   />
  </div>
</div>
<script type="text/javascript"><!--
$('#button-confirm').on('click', function() {
	//alert("Bank");
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
		dataType : 'html',
		data: dataString,
		url: '<?php echo site_url('bank_transfer/confirm')?>',
		cache: false,
		beforeSend: function() {
			//$('#button-confirm').button('loading');
			 $.blockUI({ 
													message: '<h6>Please wait. We are processing your request.</h6>' 
												 });
		},
		complete: function() {
			//$('#button-confirm').button('reset');
		},
		success: function(htmloutput) {
			//alert(htmloutput);
			 $.unblockUI(); 
			<?php
			 $checkout_type = 	$this->session->userdata('checkout_type');
			 if($checkout_type == "custom"){
			?>
			location = '<?php echo site_url('checkout_payment/success')?>';
			<?php		 
			 } else {
			 ?>
			location = '<?php echo site_url('checkout/success')?>'; 
			 <?php	 
			 }
			?>
			
		}
	});
	}
	
});
//--></script>
