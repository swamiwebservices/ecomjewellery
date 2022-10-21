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
                            <h1>Account Login</h1>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">home</a></li>
                                <li>&gt;</li>
                                <li>Account Login</li>
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
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-body mb-5">
                                <h2>New Customer</h2>

                                <p>By creating an account you will be able to shop faster, be up to date on an order's
                                    status, and keep track of the orders you have previously made.</p>
                                <div class="buttons">
                                    <div class="pull-right">
                                        <a href="<?php echo site_url("login/register")?>"
                                            class="btn btn-primary">Continue</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">



                        <div class="card ">
                            <div class="card-body">
                                <h2>Returning Customer</h2>
                                <?php
						$error = $this->session->flashdata('error');
						if ($error!='') {
					?>
                                <div class="alert bg-danger text-white alert-dismissible">
                                    <span class="font-weight-bold">Error!</span> <?php echo $error?>
                                </div>
                                <?php }?>
                                <form id="form-login" action="<?php echo site_url("login")?>" method="post"
                                    data-oc-toggle="ajax">
                                    <input type="hidden" name="mode" id="mode" value="login">

                                    <div class="mb-4 row">
                                        <label for="staticEmail" class="col-lg-2 col-form-label">Email</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="email" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-lg-2 col-form-label">Password</label>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                    </div>
                                    <div class="mb-0 row ">
                                        <div class="col-lg-12 text-right">
                                            <button type="submit" class="btn btn-primary">Confirm identity</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>