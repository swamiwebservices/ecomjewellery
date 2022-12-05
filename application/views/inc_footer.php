
      <?php
      $session_user_data = $this->session->userdata('front_user_detail');
      
      $product_category  = json_decode(file_get_contents('uploads/jsondata/product_category.json'), true);

      $domains = $this->services->getDomainId();
      $resultdata = array();
      $wti_m_address = array();
    
      $sql = "select *  from  `wti_m_address` where `domains`='" . $domains . "'  ";
      $query = $this->db->query($sql);
      if ($query->num_rows() > 0) {
          $resultdata = $query->row_array();
         
          $wti_m_address = $resultdata;
      }
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
                                        <p>Address: <?php echo (!empty($wti_m_address['address'])) ? $wti_m_address['address']:''?></p>
                                        <?php $phone1 =  (isset($wti_m_address['phone1'])) ? $wti_m_address['phone1']:''; 
                                $phone1_exp = explode(",",$phone1);
                                foreach($phone1_exp as $key => $phone1_data){
                            ?>
                                        <p>Phone: <a href="tel:<?php echo (!empty($phone1_data)) ? trim($phone1_data):''?>" class="text-footer"><?php echo (!empty($phone1_data)) ? trim($phone1_data):''?></a></p>
                                        <?php }?> 
                                        <p>Email: <a href="mail:<?php echo (!empty($wti_m_address['email1'])) ? $wti_m_address['email1']:''?>" class="text-footer"><?php echo (!empty($wti_m_address['email1'])) ? $wti_m_address['email1']:''?></a></p>
                                        <ul>
                                            <!-- <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>

                                            <li><a href="#"><i class="ion-social-youtube"></i></a></li> -->
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-4 col-6">
                                <div class="widgets_container widget_menu">
                                    <h3>Information</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="<?php echo site_url("about-us")?>">About Us</a></li>
                                            <!-- <li><a href="blog.html">blog</a></li> -->
                                            <li><a href="<?php echo site_url("terms-condition")?>">Terms & Conditions</a></li>
                                            <li><a href="<?php echo site_url("privacy-policy")?>">Privacy Policy</a></li>
                                            <li><a href="<?php echo site_url("refund")?>">Refund</a></li>
                                            <li><a href="<?php echo site_url("shipping-policy")?>">Shipping Policy</a></li>
                                            <!-- <li><a href="<?php echo site_url("faq")?>">FAQ</a></li> -->
                                            <li><a href="<?php echo site_url("contact-us")?>">Contact</a></li>
                                            <!-- <li><a href="services.html">Services</a></li> -->
                                             
                                             
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-5 col-6">
                                <div class="widgets_container widget_menu">
                                    <h3>My Account</h3>
                                    <div class="footer_menu">
                                        <ul>
                                        <?php
                                    if (isset($session_user_data['customer_id'])) {
                                    ?>
                                            <li><a href="<?php echo site_url("account")?>">My Account</a></li>
                                            <li><a href="<?php echo site_url("account/address")?>">Address</a></li>
                                            <li><a href="<?php echo site_url("account/mywishlist")?>">Wishlist</a></li>
                                            <?php    
                                    } else {
                                    ?>
                                    <li><a href="<?php echo site_url("login")?>">Login</a></li>
                                    <li><a href="<?php echo site_url("login/register")?>">Register</a></li>
                                     <?php }?>       
                                            <!-- <li><a href="<?php echo site_url("disclaimer")?>">Wishlist</a></li>
                                           -->
                                             
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

        
                                        </div>