
      <?php
      $product_category  = json_decode(file_get_contents('uploads/jsondata/product_category.json'), true);
      ?>
      <!--footer area start-->
         <footer class="footer_widgets footer_black">
            <div class="container">  
                <div class="footer_top">
                    <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="widgets_container contact_us">
                                    <h3><div class="logo">
                                <a href="<?php echo site_url("")?>"><img src="<?php echo base_url('assets/img/logo/logo.png')?>" alt=""></a>
                            </div></h3>
                                    <div class="footer_contact">
                                        <p>Address: Your address goes here.</p>
                                        <p>Phone: <a href="tel:0123456789">0123456789</a></p>
                                        <p>Email: demo@example.com</p>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>

                                            <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-4 col-6">
                                <div class="widgets_container widget_menu">
                                    <h3>Information</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="#">Sample Page</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-5 col-6">
                                <div class="widgets_container widget_menu">
                                    <h3>My Account</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="faq.html">Frequently Questions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-7">
                            <div class="widgets_container widget_menu">
                                    <h3>Category</h3>
                                    <div class="footer_menu">
                                        <ul>
                                        <?php
                                foreach($product_category as $key => $menuCategory){
                                    //print_r($menuCategory);
                                      ?>
                                            <li><a href="<?php echo site_url('category/'.$menuCategory['slug_name'])?>"><?php echo $menuCategory['name']?></a></li>
                                            <?php
                                         }
                                        ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                 
                
            </div>     
        </footer>
        <!--footer area end-->