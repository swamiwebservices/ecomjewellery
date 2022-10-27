<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>
    .submitbutton {
        background: #c09578;
        border: 0;
        color: #ffffff;
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        height: 34px;
        line-height: 21px;
        padding: 5px 20px;
        text-transform: uppercase;
        cursor: pointer;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        margin-left: 20px;
        border-radius: 20px;
    }
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
                            <h1>Register Account</h1>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">home</a></li>
                                <li>&gt;</li>
                                <li>Register Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->


        <div class="customer_login">
            <div class="container ">
                <div class="row justify-content-lg-center">
                    <div id="content" class="col-md-8 ">
                        <p>If you already have an account with us, please login at the <a
                                href="<?php echo site_url("login")?>">login page</a>.</p>
                        <form id="form-register" class="form-horizontal"  action="<?php echo site_url('login/register');?>" method="post" >
                        <input type="hidden" name="frm_mode" value="get_register">
                                <?php
                                $error = $this->session->flashdata('error');
                                if ($error!='') {
                            ?>
                                <div class="alert bg-danger text-white alert-dismissible">
                                    <span class="font-weight-bold">Error!</span> <?php echo $error?>
                                </div>
                                <?php }?>
                            <fieldset id="account">
                                <legend>Your Personal Details</legend>
                                <div class="row mb-3 required">
                                    <label for="input-firstname" class="col-lg-2 col-form-label">First Name <span
                                        class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" name="firstname" value="<?php echo isset($records['firstname'])?ucfirst($records['firstname']):''?>" placeholder="First Name"
                                            id="input-firstname" class="form-control" required>
                                        <div id="error-firstname" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="row mb-3 required">
                                    <label for="input-lastname" class="col-lg-2 col-form-label">Last Name <span
                                        class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" name="lastname" value="<?php echo isset($records['lastname'])?ucfirst($records['lastname']):''?>" placeholder="Last Name"
                                            id="input-lastname" class="form-control" required>
                                        <div id="error-lastname" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="row mb-3 required">
                                    <label for="input-email" class="col-lg-2 col-form-label">E-Mail <span
                                        class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="email" name="email" value="<?php echo isset($records['email'])?strtolower($records['email']):''?>" placeholder="E-Mail" id="input-email"
                                            class="form-control" required>
                                        <div id="error-email" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="row mb-3 required">
                                    <label for="input-telephone" class="col-lg-2 col-form-label">Telephone <span
                                        class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="telephone" name="telephone" value="<?php echo isset($records['telephone'])?strtolower($records['telephone']):''?>" placeholder="Telephone" id="input-telephone"
                                            class="form-control" required>
                                        <div id="error-telephone" class="invalid-feedback"></div>
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset>
                                <legend>Your Password</legend>
                                <div class="row mb-3 required">
                                    <label for="input-password" class="col-lg-2 col-form-label">Password <span
                                        class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="password" name="password" value="" placeholder="Password"
                                            id="input-password" class="form-control" required>
                                        <div id="error-password" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="row mb-3 required">
                                    <label for="input-password" class="col-lg-2 col-form-label">Password Confirm <span
                                        class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="password" name="confirm_password" value="" placeholder="Password"
                                            id="input-confirm_password" class="form-control" required>
                                        <div id="error-confirm_password" class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Newsletter</legend>
                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Subscribe</label>
                                    <div class="col-lg-10">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="newsletter" value="1" id="input-newsletter-yes"
                                                class="form-check-input">
                                            <label for="input-newsletter-yes" class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="newsletter" value="0" id="input-newsletter-no"
                                                class="form-check-input" checked="">
                                            <label for="input-newsletter-no" class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>


                            <div class="d-inline-block pt-2 pd-2 w-100">
                                <div class="float-end text-right">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">I have read and agree to the <a
                                                href="<?php echo site_url("information/privacy-policy")?>"
                                                class="modal-link"><b>Privacy Policy</b></a></label> <input
                                            type="checkbox" name="agree" value="1" class="form-check-input" required    >
                                    </div>
                                    <button type="submit" class="btn btn-primary">Continue</button>
                                </div>
                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>

        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>