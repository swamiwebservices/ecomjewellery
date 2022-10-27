<?php
$domain_id = $this->domain_id;
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>
    table tbody .td-qty .input-group {
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .stepper {
        display: inline-flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        width: 50px;
        height: 100%;
        border-width: 1px;
        min-height: 30px;
        font-size: 15px;
        transition: all .05s ease-out;
    }

    .stepper span {
        position: absolute;
        right: 0;
        top: 0;
        display: flex;
        flex-direction: column;
        height: 100%;
        border-width: 0 0 0 1px;
        border-color: inherit;
        border-style: inherit;
        z-index: 10;
    }

    .stepper span i:first-of-type {
        border-width: 0 0 1px 0;
        border-color: inherit;
        border-style: inherit;
    }

    .stepper span i {
        color: rgba(6, 36, 44, 1);
        background-color: rgba(245, 245, 245, 1);
    }

    .stepper span i {
        cursor: pointer;
        width: 100%;
        min-width: 18px;
        background: #e6e6e6;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50%;
        transition: all .05s ease-out;
    }

    i.fa {
        font-style: normal;
    }

    .fa {
        position: relative;
    }

    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
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
                        <h1>Shopping Cart</h1>
                        <ul>
                            <li><a href="<?php echo site_url("home")?>">home</a></li>
                            <li>></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">
        <?php
                        //print_r($record);
                        if(isset($record['items']) && sizeof($record['items']) > 0){

                        
                        ?>
            <form action="<?php echo site_url("checkout")?>" method="post">
                <div class="row">
                    <div class="col-12 ">
                       
                        <div class="table_desc ">
                            <div class="cart_page table-responsive">
                                <table class="table1 table-bordered1">
                                    <thead>
                                        <tr>

                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="text-center td-qty">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                foreach($record['items'] as $key => $value){
                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/'.$value['main_image']:base_url().'assets/img/350x350.png';

                                     $price_json = json_decode($value['price_json'],true);
                                    //   print_r($price_json);
                                      
                                      $sellprice = $value['price']; 
                                      $sellprice_total   = $sellprice * $value['cart_qty'];
                                ?>   
                                        <tr>

                                            <td class="product_thumb"><a href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img
                                                        src="<?php echo $main_image?>" class="cart-image"
                                                        alt=""></a></td>
                                                        <td class="product_name"><a href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><?php echo $value['name']?></a></td>
                                            <td class="product-price"><?php echo $this->services->format($sellprice)?></td>
                                            <td class="text-center td-qty">
                                                <div class="input-group btn-block">
                                                    <div class="stepper">
                                                        <input type="text" name="quantity[<?php echo $value['cart_qty']?>]" value="1" size="1"
                                                            class="form-control">
                                                        <span>
                                                            <i class="fa fa-angle-up"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </div>
                                                    <span class="input-group-btn">
                                                       <!-- <button type="submit" data-toggle="tooltip" title=""
                                                            class="btn btn-update" data-original-title="Update"><i
                                                                class="fa fa-refresh"></i></button> -->
                                                        <button type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-remove text-danger"
                                                            onclick="cart.remove('<?php echo $value['product_id']?>');"
                                                            data-original-title="Remove"><i
                                                                class="fa fa-trash-o"></i></button>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product_total">
                                            <?php $subtotal = (!empty($record['subtotal'])) ? $record['subtotal'] : '0.00';
                                                echo $this->services->format($subtotal); ?>
                                            </td>


                                        </tr>

                                        <?php }?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <!-- <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount"><?php $subtotal = (!empty($record['subtotal'])) ? $record['subtotal'] : '0.00';
                                                echo $this->services->format($subtotal);
                                    ?></p>
                                    </div>
                                    <!-- <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                    </div>
                                    <a href="#">Calculate shipping</a> -->

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount"><?php $subtotal = (!empty($record['subtotal'])) ? $record['subtotal'] : '0.00';
                                                echo $this->services->format($subtotal);
                                    ?></p>
                                    </div>
                                    <div class="checkout_btn">
                                    <button type="submit" name="btnCheckout" id="btnCheckout">Proceed to Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
            <?php } else {
            ?>
             <div class="row p-2">
                    <div class="col-md-12 text-center ">
                        <div class="alert alert-warning">Your shopping cart is empty!</div>


                    </div>
                    <div class="col-md-12 cart_submit ">
                     <a href="<?php echo site_url("home")?>" ><button type="button">Continue</button></a> 
                    </div>
             </div>
            <?php    
                }?>
        </div>
    </div>
    <!--shopping cart area end -->

    <?php $this->load->view('inc_footer'); ?>
    <!--footer area end-->


    <!-- JS ============================================ -->
    <?php $this->load->view('inc_common_footer_js'); ?>

    <script>
    $('.stepper').each(function() {
        var $this = $(this);

        if ($this.data('_isEnabled')) {
            return;
        }

        $this.data('_isEnabled', true);

        var $input = $this.find('input[name^="quantity"]');
        var value = $input.val();
        var minimum = parseInt($input.data('minimum')) || 1;

        $this.find('.fa-angle-up').on('click', function() {
            $input.val(parseInt($input.val()) + 1);
            $input.trigger('change');
        });

        $this.find('.fa-angle-down').on('click', function() {
            if (parseInt($input.val()) > minimum) {
                $input.val(parseInt($input.val()) - 1);
                $input.trigger('change');
            }
        });

        $input.on('keypress', function(e) {
            if ((e.which < 48 || e.which > 57) && [8].indexOf(e.which) === -1) {
                e.preventDefault();
            }
        });

        $input.on('keydown', function(e) {
            if (e.which === 38) {
                e.preventDefault();
                $input.val(parseInt($input.val()) + 1);
                $input.trigger('change');
            }

            if (e.which === 40) {
                e.preventDefault();
                if (parseInt($input.val()) > minimum) {
                    $input.val(parseInt($input.val()) - 1);
                    $input.trigger('change');
                }
            }
        });

        $input.on('blur', function() {
            if ($('html').hasClass('firefox')) {
                // window.getSelection().removeAllRanges();
            }

            if ((parseInt($input.val()) || 0) < minimum) {
                $input.val(value);
                $input.trigger('change');
            }
        });
    });
    </script>

</body>

</html>