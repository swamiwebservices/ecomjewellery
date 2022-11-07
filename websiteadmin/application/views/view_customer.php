<?php
$tab = (isset($tab) && $tab!="")?$tab :'1';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('inc_metacss');?>
    <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_layouts.js"></script>
    <script src="<?php echo base_url() ?>global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
    <style>
    .nav-tabs-highlight .nav-link {
        /* text-transform: uppercase; */
        font-size: 16px;
        letter-spacing: 0.5px;
        color: #777 !important;
    }

    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
        color: #333 !important;
    }
    </style>
</head>

<body>
    <!-- Main navbar -->
    <?php $this->load->view('inc_topmenu');?>
    <!-- /main navbar -->
    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->
        <?php $this->load->view('inc_leftmenu');?>
        <!-- /main sidebar -->
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="<?php echo site_url("home");?>" class="breadcrumb-item"><i
                                    class="icon-home2 mr-2"></i> Home</a>
                            <a href="<?php echo site_url($this->ctrl_name);?>" class="breadcrumb-item"><span
                                    class="breadcrumb-item "><?php echo (isset($this->pg_title))?$this->pg_title:''?></span></a>
                            <span
                                class="breadcrumb-item active"><?php echo (isset($sub_heading))?$sub_heading:''?></span>
                        </div>
                        <!-- <i href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a> -->
                    </div>
                    <div class="header-elements d-none">
                        <div class="breadcrumb justify-content-center">
                            <a href="<?php echo site_url($back_link ); ?>" class="breadcrumb-elements-item">
                                <button type="button" class="btn btn-light btn-sm"><i class="icon-arrow-left7"></i>
                                    Back</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->
            <!-- Content area -->
            <div class="content">
            <?php
						$success = $this->session->flashdata('success');
						if ($success) {
					?>
                <div class="alert bg-success text-white alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    <span class="font-weight-semibold">Success! </span><?php echo $success?>
                </div>
                <?php }?>
                <?php
						$error = $this->session->flashdata('error');
						if ($error) {
					?>
                <div class="alert bg-danger text-white alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    <span class="font-weight-semibold">Error! </span> <?php echo $error?>
                </div>
                <?php }?>
                <?php
						$warning = $this->session->flashdata('warning');
						if ($warning) {
					?>
                <div class="alert bg-danger text-white alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    <span class="font-weight-semibold">Warning! </span> <?php echo $warning?>
                </div>
                <?php }?>
                <!-- Basic datatable -->


                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title"><?php echo (isset($sub_heading))?$sub_heading:''?> </h6>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-highlight">
                            <li class="nav-item"><a href="#highlighted-tab1"
                                    class="nav-link <?php echo ($tab==1)?'active':'' ?>" data-toggle="tab"><i
                                        class="icon-user mr-2"></i> Customer Info</a></li>

                            <!-- <li class="nav-item"><a href="#highlighted-tab3"
                                    class="nav-link <?php echo ($tab==3)?'active':'' ?>" data-toggle="tab"><i
                                        class="icon-basket  mr-2"></i>Order</a></li> -->

                        </ul>

                        <div class="tab-content">
                        
                            <div class="tab-pane fade <?php echo ($tab==1)?'show active':'' ?>" id="highlighted-tab1">
                            <?php
                            //print_r($records);
                            ?>
                            <form class="form-horizontal" id="blogform1" name="blogform1" method="post"
                            action="<?php echo site_url($controller.'/'.$fun_name)?>" enctype="multipart/form-data">
                                        <input type="hidden" name="mode" id="mode" value="submitform">


                                    <div class="form-group row  ">
                                        <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                                        <div class="col-sm-10">
                                            <input name="firstname" required placeholder="First Name"
                                                id="input-firstname" class="form-control" type="text"
                                                value="<?php echo isset($records['firstname']) ? $this->common->getDbValue($records['firstname']) : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                                        <div class="col-sm-10">
                                            <input name="lastname" required
                                                value="<?php echo isset($records['lastname']) ? $this->common->getDbValue($records['lastname']) : ''; ?>"
                                                placeholder="Last Name" id="input-lastname" class="form-control"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row required">
                                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                                        <div class="col-sm-10">
                                            <input name="email" required
                                                value="<?php echo isset($records['email']) ? $this->common->getDbValue($records['email']) : ''; ?>"
                                                placeholder="E-Mail" id="input-email" class="form-control" type="text">
                                            <input name="oldemail"
                                                value="<?php echo isset($records['email']) ? $this->common->getDbValue($records['email']) : ''; ?>"
                                                class="form-control" type="hidden">
                                        </div>
                                    </div>
                                    <div class="form-group row required">
                                        <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                                        <div class="col-sm-10">
                                            <input name="telephone"
                                                value="<?php echo isset($records['telephone']) ? $this->common->getDbValue($records['telephone']) : ''; ?>"
                                                placeholder="Telephone" id="input-telephone" class="form-control"
                                                type="text">
                                        </div>
                                    </div>

                                    <fieldset>
                                        <legend class="font-weight-semibold text-uppercase font-size-sm">Edit Login
                                            Details</legend>

                                        <h4 class="header-title m-t-0">Address Details</h4>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label" for="input-company">Company</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="company"
                                                    value="<?php echo isset($records['company']) ? $this->common->getDbValue($records['company']) : ''; ?>"
                                                    placeholder="Company" id="input-company`" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group  row required">
                                            <label class="col-sm-2 control-label" for="input-address_1">Address
                                                1</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="address_1" required
                                                    value="<?php echo isset($records['address_1']) ? $this->common->getDbValue($records['address_1']) : ''; ?>"
                                                    placeholder="Address 1" id="input-address_1" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label" for="input-address_2">Address
                                                2</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="address_2"
                                                    value="<?php echo isset($records['address_2']) ? $this->common->getDbValue($records['address_2']) : ''; ?>"
                                                    placeholder="Address 2" id="input-address_2" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group  row required">
                                            <label class="col-sm-2 control-label" for="input-city">City</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="city" required
                                                    value="<?php echo isset($records['city']) ? $this->common->getDbValue($records['city']) : ''; ?>"
                                                    placeholder="City" id="input-city" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group row required">
                                            <label class="col-sm-2 control-label" for="input-postcode">Postcode</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="postcode" required
                                                    value="<?php echo isset($records['postcode']) ? $this->common->getDbValue($records['postcode']) : ''; ?>"
                                                    placeholder="Postcode" id="input-postcode" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group row required">
                                            <label class="col-sm-2 control-label" for="input-country_id">Country</label>
                                            <div class="col-sm-10">
                                                <?php $country_id = isset($records['country_id']) ? $records['country_id'] : 99; ?>
                                                <?php $zone_id = isset($records['zone_id']) ? $records['zone_id'] : 0; ?>
                                                <select name="country_id" id="input-country_id"
                                                    onchange="country(this, '1', '<?php echo $zone_id?>');"
                                                    class="form-control">

                                                    <?php  echo $this->common->getCountry($country_id);?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row required">
                                            <label class="col-sm-2 control-label" for="input-zone_id">Region /
                                                State</label>
                                            <div class="col-sm-10">
                                                <select name="zone_id" id="input-zone1" class="form-control">

                                                    <?php echo $this->common->getState($zone_id,$country_id);?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2" for="status">User Status :</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input-styled-success"
                                                            value="Active" name="status_flag" id="status1"
                                                            <?php if (isset($records['status_flag']) && $records['status_flag'] == 'Active')  {  echo 'checked'; } ?>>
                                                        Active
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input-styled-danger"
                                                            value="Inactive" name="status_flag" id="status2"
                                                            <?php if (isset($records['status_flag']) && $records['status_flag'] == 'Inactive')  {  echo 'checked'; } ?>>
                                                        In-Active
                                                    </label>
                                                </div>
                                                <div class="hidedefault validation-invalid-label mt-2" id=" ">Please
                                                    select
                                                    status</div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-lg-2"></label>
                                            <div class="col-lg-9">
                                                <button type="submit" class="btn bg-blue">Submit <i
                                                        class="icon-paperplane ml-2"></i></button>
                                                <a href="<?php echo site_url($back_link ); ?>"
                                                    class="breadcrumb-elements-item">
                                                    <button type="button" class="btn btn-light ml-2"><i
                                                            class="icon-arrow-left7"></i> Back</button>
                                                </a>
                                            </div>
                                        </div>
                                    </fieldset>

                                </form>

                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Edit Login Details
                                    </legend>
                                    <form class="form-horizontal" id="blogform1" name="blogform1" method="post"
                            action="<?php echo site_url($controller.'/'.$fun_name)?>" enctype="multipart/form-data">
                                        <input type="hidden" name="mode" id="mode" value="edit_content_password">


                                    <div class="form-group row required">
                                        <label class="col-sm-2 control-label" for="input-password">Password</label>
                                        <div class="col-sm-10">
                                            <input name="password" value="" placeholder="Password" id="input-password"
                                                class="form-control" autocomplete="off" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group row required">
                                        <label class="col-sm-2 control-label" for="input-confirm">Confirm</label>
                                        <div class="col-sm-10">
                                            <input name="confirm" value="" placeholder="Confirm" autocomplete="off"
                                                id="input-confirm" class="form-control" type="password">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-lg-2"></label>
                                        <div class="col-lg-9">
                                            <button type="submit" class="btn bg-blue">Submit <i
                                                    class="icon-paperplane ml-2"></i></button>
                                            <a href="<?php echo site_url($back_link ); ?>"
                                                class="breadcrumb-elements-item">
                                                <button type="button" class="btn btn-light ml-2"><i
                                                        class="icon-arrow-left7"></i> Back</button>
                                            </a>
                                        </div>
                                    </div>
                                    </form>
                                </fieldset>

                            </div>


                            <div class="tab-pane fade  <?php echo ($tab==3)?'show active':'' ?>" id="highlighted-tab3">
                                <?php
if (isset($order_completed) && sizeof($order_completed) > 0) {
    ?>
                                <table class="table table-hover datatablecustom">
                                    <thead>
                                        <tr class="bg-blue ">

                                            <th style="width:2%">#</th>
                                            <th style="width:auto">Deliver to </th>
                                            <th style="width:auto">Phone</th>
                                            <th style="width:auto">Mode</th>
                                            <th style="width:auto">Total</th>
                                            <th>Order Date</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$i = 0;
    foreach ($order_completed as $key => $value) {
        $i++;
        ?>
                                        <tr>
                                            <td><?php echo stripslashes($value['invoice_no']) ?></td>
                                            <td><?php echo stripslashes($value['shipping_firstname']) ?>
                                                <?php echo stripslashes($value['shipping_lastname']) ?></td>
                                            <td><?php echo stripslashes($value['telephone']) ?></td>
                                            <td><?php echo stripslashes($value['payment_method']) ?></td>
                                            <td><?php echo $this->currencymodal->format($value['total'], currency_code, 1);

        ?></td>
                                            <td>
                                                <?php echo $this->common->getDateFormat($value['date_added'], 'd-m-Y'); ?>

                                            <td><a
                                                    href="<?php echo site_url('orders/orderdetail/' . $value['oorder_uid']."?l_s_act=".$l_s_act."&page=".$page) ?>">Detail</a>


                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <?php } else {
    ?>
                                <div class=" text-center  card-body border-top-info1">
                                    No record found
                                </div>
                                <?php
}?>

                                <div class="row">
                                    <div class="col-xl-12 text-center  ">
                                        <ul
                                            class="pagination-flat justify-content-center twbs-flat pagination pull-right">
                                            <?php echo $this->common->ajaxpagingnation_lux_new($page,$order_completed_total,$maxm,'7',$fun_name,$other_para); ?>

                                        </ul>
                                    </div>
                                </div>

                            </div>



                        </div>


                    </div>
                </div>

            </div>
            <!-- /content area -->
            <!-- Footer -->
            <?php $this->load->view('inc_footer');?>
            <!-- /footer -->
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
 
 
<script type="text/javascript"><!--
function country(element, index, zone_id) {
	$.ajax({
		url: '<?php echo site_url('customers/getZonesByCountryId/')?>' + element.value,
		dataType: 'json',
		beforeSend: function() {
			 
		},
		complete: function() {
			 
		},
		success: function(json) {
			 
			html = '';

			if (json['zone'] && json['zone'] != '') {
				for (i = 0; i < json['zone'].length; i++) {
					html += '<option value="' + json['zone'][i]['zone_id'] + '"';

					if (json['zone'][i]['zone_id'] == zone_id) {
						html += ' selected="selected"';
					}

					html += '>' + json['zone'][i]['name'] + '</option>';
				}
			} else {
				html += '<option value="0"> --- None --- </option>';
			}

			$('select[name=\'zone_id\']').html(html);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
}

$('select[name$=\'[country_id]\']').trigger('change');
//--></script>
</body>

</html>