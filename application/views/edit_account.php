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
                            <h3>My Account Information</h3>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">Home</a></li>
                                <li>&gt;</li>
                                <li><a href="<?php echo site_url('account')?>">Account</a></li>
                                <li>&gt;</li>
                                <li>Edit Information</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->

        <section class="main_content_area">
            <div class="container">
                <div class="account_dashboard">
                    <div class="row">

                        <div class="col-sm-12 col-md-9 col-lg-9">
                           
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">

                                        <?php
                                $error = $this->session->flashdata('error');
                                if ($error!='') {
                            ?>
                                        <div class="alert bg-danger text-white alert-dismissible">
                                            <span class="font-weight-bold">Error!</span> <?php echo $error?>
                                        </div>
                                        <?php }?>

                                        <?php
                                 $success = $this->session->flashdata('success');
                                if ($success!='') {?>
                                        <div id="err_div" class="alert alert-success ext-white alert-dismissible">
                                            <?php echo $success?>
                                        </div>
                                        <?php } ?>
                                        <form action="<?php echo site_url('account/edit_account')?>" method="POST"
                                            class="form-horizontal">

                                            <input type="hidden" name="mode" id="mode" value="edit_content">

                                            <label>First Name</label>
                                            <input type="text" name="firstname" id="firstname"
                                                value="<?php echo ucfirst(stripslashes($cust_rs['firstname']))?>"
                                                pattern="[a-zA-Z0-9]+" title="Alpha-Numeric Values only" required>
                                            <label>Last Name</label>
                                            <input type="text" name="lastname" id="lastname" placeholder="Last Name"
                                                value="<?php echo ucfirst(stripslashes($cust_rs['lastname']))?>"
                                                pattern="[a-zA-Z0-9]+" title="Alpha-Numeric Values only" required>
                                            <label>Email</label>
                                            <input type="text" name="email" id="email" placeholder="Email"
                                                value="<?php echo stripslashes($cust_rs['email'])?>" readonly>
                                            <label>Telephone</label>
                                            <input type="text" name="telephone" id="telephone" placeholder="Telephone"
                                                value="<?php echo stripslashes($cust_rs['telephone'])?>" required>


                                            <!-- <br>
                                            <span class="custom_checkbox">
                                                <input type="checkbox" value="1" name="newsletter">
                                                <label>Sign up for our newsletter<br><em>You may unsubscribe at any
                                                        moment. For that purpose.</em></label>
                                            </span> -->
                                            <div class="mt-2 buttons clearfix">
                                                <div class="pull-left"><a href="<?php echo site_url("account")?>"
                                                        class="btn btn-light">Back</a></div>
                                                <div class="pull-right">
                                                    <!--  <input type="submit" value="" class="btn btn-primary" /> -->
                                                    <button type="submit" id="button-save"
                                                        class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <?php 
                            $this->load->view('account_left'); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>