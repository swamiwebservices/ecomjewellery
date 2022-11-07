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
                            <h3>My Address</h3>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">Home</a></li>
                                <li>&gt;</li>
                                <li><a href="<?php echo site_url('account')?>">Account</a></li>
                                <li>&gt;</li>
                                <li>Address</li>
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
                          
                            <div class="login ">
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

                                <div class="table-responsive1">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="text-left"> <?php if($cust_adrs_rs) {?>
                                                    <?php echo $cust_adrs_rs;?>

                                                    <?php } else { ?>
                                                    <div class="error-box" id="err_div_log" style="display:11"><i
                                                            class="icon-letterx"></i>Please add your address</div>
                                                    <?php } ?>
                                                    </p>
                                                </td>
                                                <td class="text-right"><a
                                                        href="<?php echo site_url('account/edit_address')?>"
                                                        class="btn btn-info">Edit</a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="mt-2 buttons clearfix">
                                        <div class="pull-left"><a href="<?php echo site_url("account")?>"
                                                class="btn btn-light">Back</a></div>
                                        <div class="pull-right">
                                             
                                            
                                        </div>
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