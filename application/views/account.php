<?php
$domain_id = $this->domain_id;
?>
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
        <div class="breadcrumbs_area whitebg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <h3>My account</h3>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">home</a></li>
                                <li>&gt;</li>
                                <li>My account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->


        <div class="customer_login">
            <div class="container">
                <div class="row">
                    <div id="content" class="col">
                        <h2>My Account</h2>
                        <ul class="list-unstyled">
                            <li><a href="edit">Edit
                                    your account information</a></li>
                            <li><a href="password">Change
                                    your password</a></li>
                            <li><a href="address">Modify
                                    your address book entries</a></li>
                            <!--  <li><a
                                    href="payment_method">Payment
                                    Methods</a></li> -->
                            <li><a href="wishlist">Modify
                                    your wish list</a></li>
                        </ul>
                        <h2>
                            My Orders
                        </h2>
                        <ul class="list-unstyled">
                            <li><a href="order">View
                                    your order history</a></li>



                            <!--   <li><a
                                    href="returns">View
                                    your return requests</a></li>
                            <li><a
                                    href="transaction">Your
                                    Transactions</a></li> -->
                        </ul>

                        <h2>
                            Newsletter
                        </h2>
                        <ul class="list-unstyled">
                            <li><a href="newsletter">Subscribe
                                    / unsubscribe to newsletter</a></li>
                        </ul>
                    </div>
                    <aside id="column-right" class="col-3 d-none d-md-block">
                        <div class="list-group mb-3">
                            <a href="account" class="list-group-item">Dashboard</a>
                            <a href="edit" class="list-group-item">Edit Account</a>
                            <a href="password" class="list-group-item">Password</a>
                            <a href="address" class="list-group-item">Address Book</a>
                            <a href="wishlist" class="list-group-item">Wish List</a>
                            <a href="order" class="list-group-item">Order History</a>
                            <a href="returns" class="list-group-item">Returns</a>
                            <a href="newsletter" class="list-group-item">Newsletter</a>
                            <a href="newsletter" class="list-group-item">Logout</a>
                        </div>

                    </aside>
                </div>
            </div>
        </div>

        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>