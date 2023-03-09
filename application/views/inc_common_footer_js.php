<!-- Modal -->
<div class="modal fade" id="addToWishModal" tabindex="-1" aria-labelledby="addToWishModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addToWishModalLabel">Wishlist</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="addToWishModal_body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-midi btn-primary " data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<!-- Modal add cart -->
<div class="modal fade" id="addToCartModal" tabindex="-1" aria-labelledby="addToCartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addToCartModalLabel">Shopping cart!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="addToCartModal_body">

            </div>
            <div class="modal-footer">
                <a href="<?php echo site_url('cart');?>"><button type="button" class="btn btn-midi btn-primary ">View
                        Cart</button></a>
                <a href="<?php echo site_url('checkout');?>"><button type="button"
                        class="btn btn-midi btn-primary ">Checkout</button></a>
            </div>
        </div>
    </div>
</div>



<!-- Plugins JS -->
<!--map js code here-->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script> -->
<!-- <script src="<?php echo base_url();?>assets/js/map.js"></script> -->


<script src="<?php echo base_url();?>assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/popper.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.main.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.nice.select.js"></script>
<script src="<?php echo base_url();?>assets/js/scrollup.js"></script>
<script src="<?php echo base_url();?>assets/js/ajax.chimp.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.ui.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.elevatezoom.js"></script>
<script src="<?php echo base_url();?>assets/js/imagesloaded.js"></script>
<script src="<?php echo base_url();?>assets/js/isotope.main.js"></script>
<script src="<?php echo base_url();?>assets/js/jqquery.ripples.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
<script src="<?php echo base_url();?>assets/js/bpopup.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.blockUI.js"></script>


<!-- Main JS -->
<script src="<?php echo base_url();?>assets/js/main.js"></script>

<script>
// if (window.location.protocol != "https:")
//     window.location.href = "https:" + window.location.href.substring(window.location.protocol.length);



//?fil_category_id=0&search=bana
$('input[name=\'search\']').parent().find('#submit-button-search-header').on('click', function() {
    url = st_url + 'product/search?';
    alert(url);
    var value = $('input[name=\'search\']').val();

    if (value) {
        url += '&category_id=0&search=' + encodeURIComponent(value);
    }

    var category_id = parseInt($('.header select[name=\'category_id\']').val());
    if (category_id > 0) {
        url += '&category_id=' + encodeURIComponent(category_id);
    }

    location = url;
});

$('input[name=\'search\']').on('keydown', function(e) {
    if (e.keyCode == 13) {
        $('input[name=\'search\']').parent().find('#submit-button-search-header').trigger('click');
    }
});
/* Agree to Terms */

$('#agree11').on('click', function(e) {
    e.preventDefault();

    $('#modal-agree').remove();

    var element = this;

    $.ajax({
        url: $(element).attr('href'),
        type: 'get',
        dataType: 'html',
        success: function(data) {
            html = '<div id="modal-agree" class="modal">';
            html += '  <div class="modal-dialog">';
            html += '    <div class="modal-content">';
            html += '      <div class="modal-header">';
            html +=
                '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
            html += '        <h4 class="modal-title">' + $(element).text() + '</h4>';
            html += '      </div>';
            html += '      <div class="modal-body">' + data + '</div>';
            html += '    </div';
            html += '  </div>';
            html += '</div>';

            $('body').append(html);

            $('#modal-agree').modal('show');
        }
    });
});

$('#input-country').on('change', function() {
    var element = this;
    chain.attach(function() {
        return $.ajax({
            url: '<?php echo site_url("commonajax/country")?>?country_id=' + $(
                '#input-country').val(),
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
                var input_zone = $("#input-zone").val();
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
                $('#input-zone').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr
                    .responseText);
            }
        });
    });
});


$('#input-country_address').on('change', function() {
    var element = this;
    chain.attach(function() {
        return $.ajax({
            url: '<?php echo site_url("commonajax/country")?>?country_id=' + $(
                '#input-country_address').val(),
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
                html = '<option value=""> --- Please Select --- </option>';
                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value="' + json['zone'][i]['zone_id'] + '"';
                        if (json['zone'][i]['zone_id'] == '') {
                            html += ' selected';
                        }
                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value="0" selected> --- None --- </option>';
                }
                $('#input-zone').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr
                    .responseText);
            }
        });
    });
});

var mgk_wishlist = {
    'add': function(product_id) {
        //alert(product_id);
        $.ajax({
            url: '<?php echo site_url("commonajax/addwishlist")?>',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            success: function(json) {
                console.log(json);
                //$('.alert').remove();

                if (json['success']) {
                    //$('.breadcrumbs').before('<div class="container"><div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div></div>');
                    $('#addToWishModal_body').html(
                        '<div class="container"><div class="alert alert-success"><i class="fa fa-check-circle"></i> ' +
                        json['success'] + '</div></div>');
                }

                if (json['info']) {
                    //$('.breadcrumbs').before('<div class="container"><div class="alert alert-info"><i class="fa fa-info-circle"></i> ' + json['info'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div></div>');

                    $('#addToWishModal_body').html(
                        '<div class="container"><div class="alert alert-info"><i class="fa fa-info-circle"></i> ' +
                        json['info'] + '</div></div>');
                }
                $('#addToWishModal').modal('show');

                //$('#wishlist-total span').html(json['total']);
                //$('#wishlist-total').attr('title', json['total']);



                //$('html, body').animate({ scrollTop: 0 }, 'slow');
            }
        });
    }
}

$('#input-country').trigger('change');
</script>

<script>
  // Create cookie
  function setCookie(cname, cvalue, exdays) {
                const d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                let expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }

            // Delete cookie
            function deleteCookie(cname) {
                const d = new Date();
                d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
                let expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=;" + expires + ";path=/";
            }

            // Read cookie
            function getCookie(cname) {
                let name = cname + "=";
                let decodedCookie = decodeURIComponent(document.cookie);
                let ca = decodedCookie.split(';');
                for (let i = 0; i < ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            // Set cookie consent
            function acceptCookieConsent() {
                deleteCookie('user_cookie_consent');
                setCookie('user_cookie_consent', 1, 30);
                document.getElementById("cookieNotice").style.display = "none";
            }

            let cookie_consent = getCookie("user_cookie_consent");
            if (cookie_consent != "") {
                document.getElementById("cookieNotice").style.display = "none";
            } else {
                document.getElementById("cookieNotice").style.display = "block";
            }
</script>