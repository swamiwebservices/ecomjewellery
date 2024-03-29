<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>
    .error_row {

        width: 100%;
        margin: 0 0 1px 0;
    }

    .info-msg,
    .success-msg,
    .warning-msg,
    .error-msg {

        padding: 10px;
        border-radius: 3px 3px 3px 3px;

        font-size: 12px;
        font-weight: 400;
    }

    .info-msg {
        color: #059;
        background-color: #BEF;
    }

    .success-msg {
        color: #270;
        background-color: #DFF2BF;
    }

    .warning-msg {
        color: #9F6000;
        background-color: #FEEFB3;
    }

    .error-msg {
        color: #D8000C;
        background-color: #FFBABA;
    }

    .captcha_row {
        display: inline-block;
        width: 100%;
        margin: 15px 0 0 0;
    }

    .captcha_row span {
        display: inline-block;
        margin: 25px 10px 0 0;
        color: #333;
        font-size: 16px;
    }

    .hidedefault {
        display: none;
    }
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
                                <li>contact us</li>
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
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <?php echo (!empty($wti_m_address['google_map'])) ? $wti_m_address['google_map']:''?>
                                </div>
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
                                <p>Have questions regarding your purchase, need technical clarifications or advices
                                    while choosing any products?</p>
                                <ul>
                                    <li><i class="fa fa-fax"></i> Address :
                                        <?php echo (!empty($wti_m_address['address'])) ? $wti_m_address['address']:''?>
                                    </li>
                                    <li><i class="fa fa-envelope"></i> <a
                                            href="mail:<?php echo (!empty($wti_m_address['email1'])) ? $wti_m_address['email1']:''?>"><?php echo (!empty($wti_m_address['email1'])) ? $wti_m_address['email1']:''?></a>
                                    </li>

                                    <?php $phone1 =  (isset($wti_m_address['phone1'])) ? $wti_m_address['phone1']:''; 
                                $phone1_exp = explode(",",$phone1);
                                foreach($phone1_exp as $key => $phone1_data){
                            ?>

                                    <li><i class="fa fa-phone"></i> <a
                                            href="tel:+<?php echo (!empty($phone1_data)) ? trim($phone1_data):''?>"><?php echo (!empty($phone1_data)) ? trim($phone1_data):''?></a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contact_message form">
                                <h3>Drop Us a Line</h3>
                                <p class="tag-line">You can contact us by email or by using our online form.</p>
                                <div class="error_row">
                                    <!-- <div class="info-msg"><i class="fa fa-info-circle"></i> This is an info message.</div> -->
                                    <div id="success_div" class="hidedefault success-msg"><i class="fa fa-check"></i>
                                        This is a success message.</div>
                                    <div id="err_div" class="hidedefault error-msg"><i class="fa fa-times-circle"></i>
                                        This is a error message.</div>
                                </div>

                                <form name="contactformwti" id="contactformwti"
                                    action="<?php echo site_url("contact-us")?>" method="post">
                                    <input type="hidden" name="mode" value="formsubmit">
                                    <p>
                                        <label> Your Name (required)</label>
                                        <input class="error" name="contact_fname" id="contact_fname"
                                            placeholder="Name *" type="text">
                                    </p>
                                    <p>
                                        <label> Your Email (required)</label>
                                        <input name="contact_email" id="contact_email" placeholder="Email *"
                                            type="email">
                                    </p>
                                    <p>
                                        <label> Subject</label>
                                        <input name="contact_subject" id="contact_subject" placeholder="Subject *"
                                            type="text">
                                    </p>
                                    <div class="contact_textarea">
                                        <label> Your Message</label>
                                        <textarea placeholder="Message *" name="contact_message" id="contact_message"
                                            class="form-control2"></textarea>
                                    </div>
                                    <div class="row pb-4">
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                        <input type="text" placeholder="Enter captcha code "  id="userCaptcha" name="userCaptcha"     autocomplete="off" required1  >
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <img src="<?php echo site_url("captchalkishore/index") ?>" id='captchaimg'>
                                            <a href="javascript:void(0);" style="display:none1"
                                                onclick="document.getElementById('captchaimg').src='<?php echo site_url("captchalkishore/index") ?>?img=' + Math.random(); return false"
                                                id="refresh">
                                                <img id="ref_symbol"
                                                    src="<?php echo base_url() ?>assets/img/refresh.png"
                                                    style="width:60px; height:40px"></a>
                                        </div>
                                    </div>
                                    </div>
                                   
                                    <button type="submit" id="submit-contact" name="submit-contact"
                                        class="btn btn-primary"> Send</button>
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
                $("input").keypress(function() {
            $(this).removeClass("border-danger");
        });
        $("select").click(function() {
            $(this).removeClass("border-danger");
        });
        $("textarea").click(function() {
            $(this).removeClass("border-danger");
        });
        $(".form-control2").removeClass("border-danger");
        


                $("input").removeClass("border-danger");
                $("textarea").removeClass("border-danger");
                //btnActive
                $("#err_div").hide();
                $("#success_div").hide();

                $("#contactformwti").submit(function(e) {
                    $('#submit-contact').after('<i class="icon_loading loader register"></i>');

                    $("input").removeClass("border-danger");
                    var isError = false;
                    var errMsg = "";
                    var errMsg_alert = "";

                    var contact_fname = $('#contact_fname').val();
                    //    var contact_lname = $('#contact_lname').val();
                    var contact_email = $('#contact_email').val();
                    var contact_subject = $('#contact_subject').val();

                    var contact_message = $('#contact_message').val();
                     var userCaptcha = $('#userCaptcha').val();
                    // if (userCaptcha == "") {
                    //     isError = true;
                    //     error_msg = "Please enter code";
                    //     //return false;
                    // }

                    if (contact_message == "") {
                        isError = true;
                        error_msg = "Please enter an enquiry";
                        $("#contact_message").addClass("border-danger");
                        //return false;
                    }
                    if (contact_subject == "") {
                        isError = true;
                        error_msg = "Please enter an subject";
                        $("#contact_subject").addClass("border-danger");
                        //return false;
                    }
                    if (contact_email == "") {
                        isError = true;
                        error_msg = "Please enter your email id";
                        //return false;
                        $("#contact_email").addClass("border-danger");
                    }

                    if (userCaptcha == "") {
                        isError = true;
                        error_msg = "Please enter captcha code";
                        //return false;
                        $("#userCaptcha").addClass("border-danger");
                    }
                    // if (!$("#contact_email").val() || !validateEmail($("#contact_email").val())) {
                    //     isError = true;
                    //     error_msg = "Please enter valid email id";
                    //     // $("#error_email").show()
                    //     $("#contact_email").addClass("border-danger");
                    // }


                    if (contact_fname == "") {
                        isError = true;
                        error_msg = "Please enter name";
                        $("#contact_fname").addClass("border-danger");
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
                                    document.getElementById('captchaimg').src='<?php echo site_url("captchalkishore/index") ?>?img=' + Math.random();
                                    // alert(redata.retcomment);
                                    $("#err_div").html(redata.retcomment);
                                    $("#err_div").show();

                                    $("#success_div").hide();
                                    //   document.getElementById('captchaimg').src='<?php //echo site_url("captchalkishore") ?>?img=' + Math.random(); return false;
                                }

                            },
                            error: function(jqXHR, exception) {
                                var msg = '';
                                if (jqXHR.status === 0) {
                                    msg = 'Not connect.\n Verify Network.';
                                } else if (jqXHR.status == 404) {
                                    msg = 'Requested page not found. [404]';
                                } else if (jqXHR.status == 500) {
                                    msg = 'Internal Server Error [500].';
                                } else if (exception === 'parsererror') {
                                    msg = 'Requested JSON parse failed.';
                                } else if (exception === 'timeout') {
                                    msg = 'Time out error.';
                                } else if (exception === 'abort') {
                                    msg = 'Ajax request aborted.';
                                } else {
                                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                                }
                                console.log(msg);
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