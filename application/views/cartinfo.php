                                <?php
                                foreach($record['items'] as $key => $value){
                                    $main_image = (isset($value['main_image']) && $value['main_image']!="" ) ? base_url().'uploads/prod_images/'.$value['main_image']:base_url().'assets/img/350x350.png';

                                    
                                      $sellprice = $value['price'];  
                                ?>    
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><img src="<?php echo $main_image?>" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="<?php echo site_url('product-detail/'.$value['slug_name']);?>"><?php echo $value['name']?></a>
                                        <span class="quantity">Qty: <?php echo $value['cart_qty']?></span>
                                        <span class="price_cart"><?php echo $this->services->format($sellprice)?></span>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="javascript:void(0);" onclick="cart.remove('<?php echo $value['product_id']?>');" title="Remove from Cart" class="btnRemoveItem" id="quickcart-<?php echo $value['product_id']?>" data-product_id='<?php echo $value['product_id']?>'><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <?php }?>
                                <div class="cart_total">
                                    <span>Subtotal:</span>
                                    <span><?php $subtotal = (!empty($record['subtotal'])) ? $record['subtotal'] : '0.00';
                                                echo $this->services->format($subtotal);
                                    ?></span>
                                </div>
                                <div class="mini_cart_footer">
                                    <div class="cart_button view_cart">
                                        <a href="<?php echo site_url('cart')?>">View cart</a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a class="active" href="<?php echo site_url('checkout')?>">Checkout</a>
                                    </div>
                                </div>