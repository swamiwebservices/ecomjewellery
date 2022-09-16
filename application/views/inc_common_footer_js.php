
<!--menuzord -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/menuzord.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery("#menuzord").menuzord({
		align:"left"
	});
});
</script>
<!--menuzord-->    
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    
<!--slick slider-->
<script src="<?php echo base_url();?>assets/js/slick.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).on('ready', function() {
    
    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        autoplay: true,
        slidesToScroll: 4,
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },        
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
  ]
      });
});
</script>
<!--jquery-min-->

<!-- font-increase-decrease jquery -->    
<script type="text/javascript">
	$(document).ready(
			function() {

				
				var $affectedElements = $("div,p,a,h5,h4,h3,h2,h1,ul,li,li.nav-link"); // Can be extended, ex. $("div, p, span.someClass")
				var rtext = 0;
				// Storing the original size in a data attribute so size can be reset
				$affectedElements.each(function() {
					var $this = $(this);
					$this.data("orig-size", $this.css("font-size"));
				});

				$(".increase").click(function() {
					if (rtext < 3) {
						rtext = rtext + 1;
						changeFontSize(1);
					}
				})

				$(".decrease").click(function() {
					if (rtext > -1) {
						rtext = rtext - 1;
						changeFontSize(-1);
					}
				})

				$(".reset").click(function() {
					$affectedElements.each(function() {
						var $this = $(this);
						$this.css("font-size", $this.data("orig-size"));
					});
				})

				function changeFontSize(direction) {

					$affectedElements.each(function() {
						var $this = $(this);
						//alert(parseInt($this.css("font-size"))+direction);
						$this.css("font-size", parseInt($this.css("font-size"))
								+ direction);
					});
				}

				
			});
</script>  
    
    
<!--scroll to top-->
<script type="text/javascript">
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>    
    
<!--visitor Counter-->
<script src="<?php echo base_url();?>assets/js/jquery.incremental-counter.js"></script>
<script>
$(".incremental-counter").incrementalCounter();
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>  
    

<script>
    jQuery('.numbersOnly').keyup(function() {
        this.value = this.value.replace(/[^0-9\.]/g, '');
    });
    jQuery('.validateMobile').keyup(function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    jQuery('.alphaonly').keyup(function() {
        this.value = this.value.replace(/[^a-zA-Z\s]+$/, '');
    });

    jQuery('.alhanumeric').keyup(function() {
        this.value = this.value.replace(/[^a-zA-Z0-9\-\s]+$/, '');
    });



    function validateEmail(email) {
        var eml = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (eml.test($.trim(email)) == false) {
            return false;
        }
        return true;
    }

    function validateMobile(mobile) {
        var mob = /^[1-9]{1}[0-9]{9}$/;
        if (mob.test($.trim(mobile)) == false) {
            return false;
        }
        return true;

    }
    </script>
    <script>
 
    $(document).ready(function() {
        $("input").keypress(function(){
            $(this).removeClass("border-danger");
        });
        $("textarea").keypress(function(){
            $(this).removeClass("border-danger");
        });
        $("select").click(function(){
            $(this).removeClass("border-danger");
        });
        $(".form-control").removeClass("border-danger");
        $(".form-control-select2").removeClass("border-danger");
        $("#error_status_flag").hide();
         $("#frm-admission-enquiry").submit(function(e) {
            e.preventDefault();
            var isError = false;
            var errMsg = "";
            var errMsg_alert = "";
            $(".form-control").removeClass("border-danger");
            $(".form-control-select2").removeClass("border-danger");
            $("#error_status_flag").hide();
           
            if (!$("#full_name").val()) {
                isError = true;
                $("#full_name").addClass("border-danger");
               
            }
            if (!$("#contact_number").val()) {
                isError = true;
                $("#contact_number").addClass("border-danger");
               
            }
            if (!$("#email_addrress").val()) {
                isError = true;
                $("#email_addrress").addClass("border-danger");
               
            }
            
            if (!$("#email_addrress").val() || !validateEmail($("#email_addrress").val())) {
                isError = true;
                error_msg = "Please enter valid email id";
                $("#email_addrress").addClass("border-danger");
            }

            if (!$("#program").val()) {
                isError = true;
                $("#program").addClass("border-danger");
               
            }
            if (!$("#message").val()) {
                isError = true;
                $("#message").addClass("border-danger");
               
            }
            
            if (isError) {
                return false;
            } else {
               var  dataString = $("#frm-admission-enquiry").serialize();
                // alert(dataString);
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    data: dataString, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                  //  contentType: false, // The content type used when sending data to the server.
                  //   cache: false, // To unable request pages to be cached
                 //   processData: false, // To send DOMDocument or non processed data file it is set to false
                    url: '<?php echo site_url($this->uri->segment(1)) ?>',

                    beforeSend: function() {
                        // this is where we append a loading image
                        //$("#contact-btn").attr("disabled", "disabled");
                        //btnRegister

                    },
                    success: function(redata) {
                        //  redata = jQuery.trim(redata);
                        // successful request; do something with the data
                        //  alert(redata);
                        // alert(redata);
                        console.log(redata);
                        if (redata.status) {


                            $("#success_div").html(redata.retcomment);
                            $("#success_div").show();

                            $("#err_div").hide();
                            $('#full_name').val("");
                            $('#contact_number').val("");
                            $('#email_addrress').val("");
                            $('#city').val("");
                            $('#message').val("");
                            $('#program').val("");
                            $('#frm-admission-enquiry').hide();
                        } else {
                            // alert(redata.retcomment);
                            $("#err_div").html(redata.retcomment);
                            $("#err_div").show();

                            $("#success_div").hide();
                            
                        }
                        return false;
                    },
                    error: function(redata) {
                        
                        $("#err_div").html(redata.retcomment);
                        $("#err_div").show();
                        // $('#submit-contact').removeAttr('disabled');
                    }
                });
               // $("#frm-admission-enquiry").submit();
            }

            return false;
        });

       ///
       $("#frm-admission-enquiry2").submit(function(e) {
            e.preventDefault();
            var isError = false;
            var errMsg = "";
            var errMsg_alert = "";
            $(".form-control").removeClass("border-danger");
            $(".form-control-select2").removeClass("border-danger");
            $("#error_status_flag").hide();
            
            if (!$("#full_name2").val()) {
                isError = true;
                $("#full_name2").addClass("border-danger");
               
            }
            if (!$("#contact_number2").val()) {
                isError = true;
                $("#contact_number2").addClass("border-danger");
               
            }
            if (!$("#email_addrress2").val()) {
                isError = true;
                $("#email_addrress2").addClass("border-danger");
               
            }
            
            if (!$("#email_addrress2").val() || !validateEmail($("#email_addrress2").val())) {
                isError = true;
                error_msg = "Please enter valid email id";
                $("#email_addrress2").addClass("border-danger");
            }

            if (!$("#program2").val()) {
                isError = true;
                $("#program2").addClass("border-danger");
               
            }
           
            
            if (isError) {
                return false;
            } else {
               var  dataString = $("#frm-admission-enquiry2").serialize();
              //alert(dataString);
                
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    data: dataString, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                  //  contentType: false, // The content type used when sending data to the server.
                  //   cache: false, // To unable request pages to be cached
                 //   processData: false, // To send DOMDocument or non processed data file it is set to false
                    url: '<?php echo site_url('admission-enquiry') ?>',

                    beforeSend: function() {
                        // this is where we append a loading image
                        //$("#contact-btn").attr("disabled", "disabled");
                        //btnRegister

                    },
                    success: function(redata) {
                        //  redata = jQuery.trim(redata);
                        // successful request; do something with the data
                        //  alert(redata);
                        // alert(redata);
                        console.log(redata);
                        if (redata.status) {


                            $("#success_div2").html(redata.retcomment);
                            $("#success_div2").show();

                            $("#err_div2").hide();
                            $('#full_name2').val("");
                            $('#contact_number2').val("");
                            $('#email_addrress2').val("");
                            $('#city2').val("");
                            $('#message2').val("");
                            $('#program2').val("");
                            $('#frm-admission-enquiry2').hide();
                        } else {
                            // alert(redata.retcomment);
                            $("#err_div2").html(redata.retcomment);
                            $("#err_div2").show();

                            $("#success_div2").hide();
                            
                        }
                        return false;
                    },
                    error: function(redata) {
                        
                        $("#err_div2").html(redata.retcomment);
                        $("#err_div2").show();
                        // $('#submit-contact').removeAttr('disabled');
                    }
                });
               // $("#frm-admission-enquiry").submit();
            }

            return false;
        });
       ///

    });
    </script>