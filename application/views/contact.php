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
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>contact</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>></li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
     <!--contact map start-->
    <div class="contact_map">
       <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="map-area">
                      <div id="googleMap"></div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact map end-->
    
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message content">
                        <h3>contact us</h3>    
                          
                        <ul>
                            <li><i class="fa fa-fax"></i>  Address : Shop No.34, AL Kifaf Oasis, Near Burjuman Metro exit2</li>
                            <li><i class="fa fa-phone"></i> <a href="mail:info@bondbeyond.ae">info@bondbeyond.ae</a></li>
                            <li><i class="fa fa-envelope-o"></i> <a href="tel:tel:+971 4 2968516">+971 4 2968516</a></li>
                            <li><i class="fa fa-envelope-o"></i> <a href="tel:+971 559632581">+971 559632581</a></li>
                            <li><i class="fa fa-envelope-o"></i> <a href="tel:+971 0543054719">+971 0543054719</a></li>
                        </ul>             
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message form">
                        <h3>Tell us your project</h3>   
                        <form name="contactformwti" id="contactformwti"    action="<?php echo site_url("contact-us")?>" method="post">
                          <input type="hidden" name="mode" value="formsubmit">
                            <p>  
                               <label> Your Name (required)</label>
                                <input  name="contact_fname" id="contact_fname" placeholder="Name *" type="text"> 
                            </p>
                            <p>       
                               <label>  Your Email (required)</label>
                                <input name="contact_email" id="contact_email"  placeholder="Email *" type="email">
                            </p>
                            <p>          
                               <label>  Subject</label>
                                <input name="subject" placeholder="Subject *" type="text">
                            </p>    
                            <div class="contact_textarea">
                                <label>  Your Message</label>
                                <textarea placeholder="Message *" name="contact_message" id="contact_message"  class="form-control2" ></textarea>     
                            </div>   
                            <button type="submit"> Send</button>  
                            <p class="form-messege"></p>
                        </form> 

                    </div> 
                </div>
            </div>
        </div>    
    </div>

    <!--contact area end-->

 
    <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>
        <script type="text/javascript">
    $(document).ready(function($) {




        //btnActive
        $("#err_div").hide();
        $("#success_div").hide();

        $("#contactformwti").submit(function(e) {
            $('#submit-contact').after('<i class="icon_loading loader register"></i>');


            var isError = false;
            var errMsg = "";
            var errMsg_alert = "";
          
            var contact_fname = $('#contact_fname').val();
        //    var contact_lname = $('#contact_lname').val();
            var contact_email = $('#contact_email').val();
          //  var contact_phone = $('#contact_phone').val();

            var contact_message = $('#contact_message').val();
            /* var userCaptcha = $('#userCaptcha').val();
            if ( userCaptcha== "") {
                isError = true;
                error_msg = "Please enter code";
                //return false;
            } */

            if (contact_message == "") {
                isError = true;
                error_msg = "Please enter an enquiry";
                //return false;
            }

            if (contact_email == "") {
                isError = true;
                error_msg = "Please enter your email id";
                //return false;
            }


            if (!$("#contact_email").val() || !validateEmail($("#contact_email").val())) {
                isError = true;
                error_msg = "Please enter valid email id";
                // $("#error_email").show()
            }
            // if (contact_phone == "") {
            //     isError = true;
            //     error_msg = "Please enter  phone number";
            //     //return false;
            // }
           

            if (contact_fname == "") {
                isError = true;
                error_msg = "Please enter name";
                //return false;
            }

            if (country == "") {
                isError = true;
                error_msg = "Please select country";
                //return false;
            }
      
            if (!isError) {
                //dataString = $("#regform").serialize();
                // alert(web_site_url);
                $("#err_div").html("");
                $("#err_div").hide();

                //  $("#contact-btn").attr("disabled", "disabled");
                //ajax send this to php page
                //$("#contactform").submit();			


                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    data: new FormData(
                        this
                        ), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false, // The content type used when sending data to the server.
                    cache: false, // To unable request pages to be cached
                    processData: false, // To send DOMDocument or non processed data file it is set to false
                    url: '<?php echo site_url("contact-us")?>',

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
                            $('#contact_fname').val("");
                           
                            $('#contact_email').val("");
                             
                            $('#contact_message').val("");
                            $('#contactformwti').hide();
                        } else {
                            // alert(redata.retcomment);
                            $("#err_div").html(redata.retcomment);
                            $("#err_div").show();

                            $("#success_div").hide();
                            //   document.getElementById('captchaimg').src='<?php //echo site_url("captchalkishore") ?>?img=' + Math.random(); return false;
                        }
                        
                    },
                    error: function(redata) {
                        //   document.getElementById('message-contact').innerHTML = redata;
                        //    $('#message-contact').slideDown('slow');
                        $("#err_div").html(redata.retcomment);
                        $("#err_div").show();
                        // $('#submit-contact').removeAttr('disabled');
                    }
                });

                //end ajax send this to php page
            } else {
                //alert("11");
                $("#err_div").html(error_msg);
                $("#err_div").show();
            }
            return false;
        });



        // end of password strength			
    });


 
    </script>
