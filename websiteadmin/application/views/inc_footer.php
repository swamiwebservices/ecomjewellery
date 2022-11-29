<?php
$session_user_data = $this->session->userdata('admin_user_data');
?>
<div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
        <span class="navbar-text">
            &copy; <?php echo date("Y")?>. <?php echo $_SERVER['HTTP_HOST']?>
        </span>

        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item"><a href="#" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>

        </ul>
    </div>
</div>
<script>

        // Primary
        $('.form-check-input-styled-primary').uniform({
            wrapperClass: 'border-primary-600 text-primary-800'
        });

        // Danger
        $('.form-check-input-styled-danger').uniform({
            wrapperClass: 'border-danger-600 text-danger-800'
        });

        // Success
        $('.form-check-input-styled-success').uniform({
            wrapperClass: 'border-success-600 text-success-800'
        });

        // Warning
        $('.form-check-input-styled-warning').uniform({
            wrapperClass: 'border-warning-600 text-warning-800'
        });

        // Info
        $('.form-check-input-styled-info').uniform({
            wrapperClass: 'border-info-600 text-info-800'
        });

        // Custom color
        $('.form-check-input-styled-custom').uniform({
            wrapperClass: 'border-indigo-600 text-indigo-800'
        });
        
jQuery('.isrquired').keyup(function() {
    if (!$(this).val()) {
        $(this).addClass("border-danger");
        
    } else {
        $(this).removeClass("border-danger");
    }

});
jQuery('.isrquired').blur(function() {
    if (!$(this).val()) {
        $(this).addClass("border-danger");
    } else {
        $(this).removeClass("border-danger");
    }
    this.value = this.value.trim();
});
jQuery('.numbersOnly').keyup(function() {
    this.value = this.value.replace(/[^0-9\.]/g, '');
});
jQuery('.alphaonly').keyup(function() {
    this.value = this.value.replace(/[^a-zA-Z\s]+$/, '');
});
jQuery('.alhanumeric').keyup(function() {
    this.value = this.value.replace(/[^a-zA-Z0-9\-\s]+$/, '');
});
jQuery('.alhanumericdash').keyup(function() {
   
});
jQuery('.dob').keyup(function() {
    this.value = this.value.replace(/[^a-zA-Z0-9\-\s]+$/, '');
});

$('.nospacetext').keyup(function() {
 this.value = this.value.replace(/\s/g,'');
});

$('.emailvalidation').keyup(function() {
 var emailstatus  = validateEmail(this.value);
    if(emailstatus==false){
        $(this).addClass("border-danger");
    } else {
        $(this).removeClass("border-danger");
    }
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

function validationzipcode(zipcode) {
    var zip = /^[1-9][0-9]{6}$/;
    if (zip.test($.trim(zipcode)) == false) {
        return false;
    }
    return true;
}
</script>