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
                            <h3>Wish List</h3>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">Home</a></li>
                                <li>&gt;</li>
                                <li><a href="<?php echo site_url('account')?>">Account</a></li>
                                <li>&gt;</li>
                                <li>My Wish List</li>
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

                                <div class="table-responsive">
                                    <?php
if(sizeof($sel_rs)){

?>
                                    <table class="table table-hover">
                                        <colgroup>
                                            <col width="10%">
                                            </col>
                                            <col width="35%">
                                            </col>
                                            <col width="13%">
                                            </col>
                                            <col width="10%">
                                            </col>
                                            <col width="15%">
                                            </col>
                                            <col width="17%">
                                            </col>
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th class="text-center">Image</th>
                                                <th class="text-left">Product Name</th>
                                                <th class="text-left">Model</th>
                                                <th class="text-right">Stock</th>
                                                <th class="text-right">Unit Price</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
 
foreach($sel_rs as $det){
	
				$pro_slug = $this->common->getDbValue($det['name_slug']);	
				if($pro_slug==""){
					$pro_slug = $det['product_id'];
				}
	
?>
                                            <tr>
                                                <td class="text-center"> <a
                                                        href="<?php echo site_url('detail/'.$pro_slug.'/'.$det['product_id'])?>"><img
                                                            src="<?php echo $this->common->showImage('uploads/prod_images/',$det['image']);?>"
                                                            alt="<?php echo $this->common->getDbValue($det['name'])?>"
                                                            title="<?php echo $this->common->getDbValue($det['name'])?>"
                                                            style="max-height:47px; width:auto" /></a>
                                                </td>
                                                <td class="text-left"><a
                                                        href="<?php echo site_url('detail/'.$pro_slug.'/'.$det['product_id'])?>"><?php echo $this->common->getDbValue($det['name'])?></a>
                                                </td>
                                                <td class="text-left">
                                                    <?php echo $this->common->getDbValue($det['model'])?></td>
                                                <td class="text-right">
                                                    <?php
              	if($det['quantity']>0){
					echo 'In Stock';
				} else {
					echo 'Out of Stock';
				}
			  ?>
                                                </td>
                                                <td class="text-right">
                                                    <div class="price">
                                                        <?php

                if($det['special_price']>0){

				?>
                                                        <p class="old-price"><span
                                                                class="price"><?php echo $this->currencymodal->format($det['price'],$this->session->userdata('currency'))?></span>
                                                        </p>
                                                        <p class="special-price"><span
                                                                class="price"><?php echo $this->currencymodal->format($det['special_price'],$this->session->userdata('currency'))?></span>
                                                        </p>
                                                        <?php } else {
				?>
                                                        <p class="regular-price"><span
                                                                class="price"><?php echo $this->currencymodal->format($det['price'],$this->session->userdata('currency'))?></span>
                                                        </p>
                                                        <?php	
				}?>
                                                    </div>
                                                </td>
                                                <td class="text-right"><button type="button"
                                                        onclick="cart.add('<?php echo $det['product_id']?>');"
                                                        data-toggle="tooltip" title="Add to Cart"
                                                        class="btn btn-primary"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                    <a href="<?php echo site_url("my_dashboard/my_wish_list");?>?remove=<?php echo $det['product_id']?>"
                                                        data-toggle="tooltip" title="Remove" class="btn btn-danger"><i
                                                            class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                    <?php } else {
						?>
                                    <div class="alert alert-info" style="display:">
                                        No records found
                                    </div>
                                    <?php 
					}?>

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