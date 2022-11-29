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
                            <h1>Account</h1>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">home</a></li>
                                <li>&gt;</li>
                                <li>Forgotten Password</li>
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
                    <div id="content" class="col-sm-9">
                        <div class="card ">
                            <div class="card-body">
                                <h1>Forgot Your Password?</h1>
                                <p>Enter the e-mail address associated with your account. Click submit to have a
                                    password reset link e-mailed to you.</p>

                                <?php
                                       if($this->session->userdata('success')!=""){
									   ?>
                                <div id="err_div2" class="alert alert-success">
                                    <?php echo $this->session->userdata('success')?>
                                </div>
                                <?php }?>
                                <?php
                                       if($this->session->userdata('error')!=""){
									   ?>
                                <div id="err_div2" class="alert bg-danger text-white">
                                    <?php echo $this->session->userdata('error')?>
                                </div>
                                <?php }?>
                                <form action="<?php echo site_url("login/forgotten");?>" method="post"
                                    enctype="multipart/form-data" class="form-horizontal">
                                    <input type="hidden" name="mode" id="mode" value="forgotten">
                                    <div class=" row ">
                                        <div class="col-md-12 ">
                                            <div class="form-group row required">
                                                <label class="col-sm-2 control-label" for="input-email">E-Mail
                                                    Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Email Address"
                                                        id="email" name="email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row mt-3">
                                        <div class="col-md-12 ">

                                            <div class="pull-left"><a href="<?php echo site_url("login");?>"
                                                    class="btn btn-primary">Back</a></div>
                                            <div class="pull-right">
                                                <input value="Submit" class="btn btn-primary" type="submit">
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>



                    <div id="column-right" class="col-right col-xs-12  col-sm-3">
                        <?php 
		 
		$this->load->view('account_left'); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>