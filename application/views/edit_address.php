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
                                <li>Account Information</li>
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
                            <h3>Address Book Entries</h3>
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

                                <form action="<?php echo site_url('account/edit_address')?>" method="post"
                                    enctype="multipart/form-data" class="form-horizontal">
                                    <input type="hidden" name="mode" id="mode" value="edit_content">
                                    <fieldset>
                                        <div class="form-group required">
                                            <label class="col-sm-12 control-label" for="input-firstname">First
                                                Name</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="First Name"
                                                    name="firstname" id="firstname"
                                                    value="<?php echo ucfirst($firstname)?>" pattern="[a-zA-Z0-9]+"
                                                    title="Alpha-Numeric Values only" required>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-12 control-label" for="input-lastname">Last Name</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="Last Name"
                                                    name="lastname" id="lastname"
                                                    value="<?php echo ucfirst( $lastname)?>" pattern="[a-zA-Z0-9]+"
                                                    title="Alpha-Numeric Values only" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 control-label" for="input-company">Company</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="Company"
                                                    name="company" id="company" value="<?php echo ucfirst($company)?>">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-12 control-label" for="input-address-1">Address
                                                1</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="Address 1"
                                                    name="address_1" id="address_1"
                                                    value="<?php echo ucfirst($address_1)?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 control-label" for="input-address-2">Address
                                                2</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="Address 2"
                                                    name="address_2" id="address_2"
                                                    value="<?php echo ucfirst($address_2)?>">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-12 control-label" for="input-city">City</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="City" name="city"
                                                    id="city" value="<?php echo ucfirst($city)?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 control-label" for="input-postcode">Post Code</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" placeholder="Post Code" name="postcode"
                                                    id="postcode" value="<?php echo $postcode?>" type="text"
                                                    title="Zipcode 6 digit" maxlength="6" pattern="[0-9]{6}" required>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-12 control-label" for="input-country">Country</label>
                                            <div class="col-sm-12">
                                                <select name="country_id" id="input-country" class="form-control">
                                                    <option value="0"> Please select</option>
                                                    <?php foreach($country_rs as $det){?>
                                                    <option value="<?php echo stripslashes($det['country_id'])?>"
                                                        <?php if($country_id==$det['country_id']){?>selected<?php } ?>>
                                                        <?php echo stripslashes($det['name'])?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-12 control-label" for="input-zone">Region /
                                                State</label>
                                            <div class="col-sm-12">
                                                <select name="zone_id" id="zone_id" class="form-control" required>
                                                    <option value="0"> Please select</option>
                                                    <?php foreach($state_rs as $det){?>
                                                    <option value="<?php echo stripslashes($det['zone_id'])?>"
                                                        <?php if($zone_id==$det['zone_id']){?>selected<?php } ?>>
                                                        <?php echo stripslashes($det['name'])?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                    </fieldset>
                                    <div class="mt-2 buttons clearfix">
                                        <div class="pull-left"><a href="<?php echo site_url("account")?>"
                                                class="btn btn-light">Back</a></div>
                                        <div class="pull-right">
                                            <!--  <input type="submit" value="" class="btn btn-primary" /> -->
                                            <button type="submit" id="button-save" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
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