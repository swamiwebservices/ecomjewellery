<?php
      $session_user_data = $this->session->userdata('front_user_detail');
      
      $product_category  = json_decode(file_get_contents('uploads/jsondata/product_category.json'), true);

      $domains = $this->services->getDomainId();
      $resultdata = array();
      $wti_m_address = array();
    
      $sql = "select *  from  `wti_m_address`    ";
      $query = $this->db->query($sql);
      if ($query->num_rows() > 0) {
          $resultdata = $query->row_array();
         
          $wti_m_address = $resultdata;
      }
      $wti_m_social = [];
      $sql = "select * from  `wti_m_social`  where status_flag=1 ";
      $query = $this->db->query($sql);
      if ($query->num_rows() > 0) {
          $resultdata = $query->result_array();
         
          $wti_m_social = $resultdata;
      }
      //sprint_r($wti_m_social);
      $resultdata = array();
 $data['records'] = array();
         
 $sql = "select * from  `wti_m_setting` where `group_name`='config_logo'";
 $query = $this->db->query($sql);
  if ($query->num_rows()>0) {
     $resultdata =    $query->result_array();
 }
 $data['records'] = array();
 //print_r($records);
  foreach($resultdata as $key => $value){
     $data['records'][$value['key_name']] = $value['value'];
 }
      ?>
<!--footer area start-->
<footer class="footer_widgets footer_black">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="widgets_container contact_us">
                        <h3>
                            <div class="logo">
                                <a href="<?php echo site_url("")?>"><img
                                        src="<?php echo (!empty($data['records']['config_logo_footer'])) ? base_url("uploads/logo/".$data['records']['config_logo_footer']) : '';?>"
                                        alt=""></a>
                            </div>
                        </h3>
                        <div class="footer_contact">
                            <p>Address: <?php echo (!empty($wti_m_address['address'])) ? $wti_m_address['address']:''?>
                            </p>
                            <?php $phone1 =  (isset($wti_m_address['phone1'])) ? $wti_m_address['phone1']:''; 
                                $phone1_exp = explode(",",$phone1);
                                foreach($phone1_exp as $key => $phone1_data){
                            ?>
                            <p>Phone: <a href="tel:<?php echo (!empty($phone1_data)) ? trim($phone1_data):''?>"
                                    class="text-footer"><?php echo (!empty($phone1_data)) ? trim($phone1_data):''?></a>
                            </p>
                            <?php }?>
                            <p>Email: <a
                                    href="mail:<?php echo (!empty($wti_m_address['email1'])) ? $wti_m_address['email1']:''?>"
                                    class="text-footer"><?php echo (!empty($wti_m_address['email1'])) ? $wti_m_address['email1']:''?></a>
                            </p>
                            <?php
                                        if(!empty($wti_m_social)){

                                        
                                        ?>
                            <ul>
                                <?php
                                             foreach($wti_m_social as $key => $socialValue){
                                            ?>
                                <li><a href="<?php echo $socialValue['url']?>"><i
                                            class="fa fa-<?php echo $socialValue['title']?>"></i></a></li>
                                <?php }?>

                            </ul>
                            <?php }?>

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
                                <li><a href="<?php echo site_url("refund")?>">Refund Policy</a></li>
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
                                <li><a href="<?php echo site_url("faq")?>">FAQ</a></li>
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
                                <li><a
                                        href="<?php echo site_url('category/'.$menuCategory['slug_name'])?>"><?php echo $menuCategory['name']?></a>
                                </li>
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


<noscript>
    <div class="message global noscript">
        <div class="content">
            <p>
                <strong>JavaScript seems to be disabled in your browser.</strong>
                <span>
                    For the best experience on our site, be sure to turn on Javascript in your browser. </span>
            </p>
        </div>
    </div>
</noscript>
 

<div id="cookieNotice" class="light display-right" style="display: none;">
    <div id="closeIcon" style="display: none;">
    </div>
    <div class="title-wrap">
        <h4>Cookie Consent</h4>
    </div>
    <div class="content-wrap">
        <div class="msg-wrap">
        <p>
            <strong>We use cookies to make your experience better.</strong>
            <span>To comply with the new e-Privacy directive, we need to ask for your consent to set the cookies.
            </span>
            <a href="<?php echo site_url("privacy-policy")?>">Learn more</a>.
        </p>
            <div class="btn-wrap">
                <button class="btn-primary" onclick="acceptCookieConsent();">Accept</button>
            </div>
        </div>
    </div>
</div>

<!-- <a class="whatsapp-button" style="text-decoration: none;color:#ffffff;" href="https://wa.me/++97142968516"
    type="image/x-icon" target="_blank">
    <i class="fa fa-whatsapp icon-whatsapp"></i></a> -->