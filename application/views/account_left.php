 <!-- Nav tabs -->
 <div class="dashboard_tab_button">
     <ul  class="nav flex-column dashboard-list">
        
      
         <?php
   $session_user_data = $this->session->userdata('front_user_detail');

   if (isset($session_user_data['customer_id'])) {
  ?>
    <li><a href="<?php echo site_url('account/edit_account')?>" class="nav-link active1">My Account</a></li>
    <!-- <li><a href="<?php echo site_url('account/edit_account')?>" class="nav-link active1">Edit Account</a> </li> -->
    <li><a href="<?php echo site_url('account/change_password')?>" class="nav-link active1">Password</a></li>
    <li><a href="<?php echo site_url('account/address')?>" class="nav-link active1">Address Book</a> </li>
    <li><a href="<?php echo site_url('account/mywishlist')?>" class="nav-link active1">Wish List</a> </li>
    <li><a href="<?php echo site_url('account')?>" class="nav-link active1">Order History</a> </li>
    <!--<li><a href="<?php echo site_url('account/returnlist')?>" class="nav-link active1">Returns</a> </li>-->
    <li><a href="<?php echo site_url('account/edit_account')?>" class="nav-link active1">Logout</a></li>
    <?php } else {
	?>
     <li><a href="<?php echo site_url('login')?>" class="nav-link active1">Login</a></li>
    <li><a href="<?php echo site_url('login/register')?>" class="nav-link active1">Register</a> </li>
    <li><a href="<?php echo site_url('login/forgotten')?>" class="nav-link active1">Forgotten Password</a></li>
    <li><a href="<?php echo site_url('account/my_account')?>" class="nav-link active1">My Account</a></li>
    <?php	
	}?>

     </ul>
 </div>