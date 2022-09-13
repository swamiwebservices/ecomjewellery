<?php
  $session_user_data = $this->session->userdata('user_data');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view('inc_metacss');?>


        <!-- /theme JS files -->
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
                                <a href="<?php echo site_url("home"); ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item "><?php echo (isset($title)) ? $title : '' ?></span>
                                <span class="breadcrumb-item active"><?php echo (isset($sub_heading)) ? $sub_heading : '' ?></span>
                            </div>

                            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                        </div>

                        <div class="header-elements d-none">
                            <div class="breadcrumb justify-content-center">


                            </div>
                        </div>
                    </div>

                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">
                <?php
$error = (isset($error) && $error!="") ? $error :'';
if ($error) {
    ?>
                    <div class="alert bg-danger text-white alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold">Error! </span> <?php echo $error ?>
                    </div>
                    <?php }?>
                    <?php
$success = $this->session->flashdata('success');
if ($success) {
    ?>
                    <div class="alert bg-success text-white alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold">Success! </span><?php echo $success ?>
                    </div>
                    <?php }?>
                    <?php
$error = $this->session->flashdata('error');
if ($error) {
    ?>
                    <div class="alert bg-danger text-white alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold">Error! </span> <?php echo $error ?>
                    </div>
                    <?php }?>
                    <?php
$warning = $this->session->flashdata('warning');
if ($warning) {
    ?>
                    <div class="alert bg-danger text-white alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold">Warning! </span> <?php echo $warning ?>
                    </div>
                    <?php }?>
                    <!-- Basic datatable -->
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Basic layout-->
                            <div class="card">
                                <div class="card-header header-elements-inline">
                                    <h5 class="card-title">Info</h5>
                                </div>

                                <div class="card-body">
                                    <div class=" row">
                                        <label class="col-lg-3 col-form-label">Photo:</label>
                                        <div class="col-lg-9">
                                            <?php 
										if($user_info['profile_pic']!=''){
											$photo = back_path.'uploads/profile_pics/'.stripslashes($user_info['profile_pic']);
										} else {
											$photo = 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image';	
										}
									?>
                                            <img src="<?php echo $photo?>" id="temppreviewimageki1" class="temppreviewimageki1" style="width:100px; height:auto;display:none1">
                                        </div>
                                    </div>
                                    <div class=" row">
                                        <label class="col-lg-3 col-form-label">Bo Ice Id ::</label>
                                        <div class="col-lg-9">
                                            <?php echo $this->common->getDbValue($user_info['bo_ice_id']); ?>
                                        </div>
                                    </div>
                                    <div class=" row">
                                        <label class="col-lg-3 col-form-label">Name:</label>
                                        <div class="col-lg-9">
                                            <?php echo $this->common->getDbValue($user_info['first_name']); ?> <?php echo $this->common->getDbValue($user_info['last_name']); ?>
                                        </div>
                                    </div>
                                    <div class=" row">
                                        <label class="col-lg-3 col-form-label">Mobile:</label>
                                        <div class="col-lg-9">
                                            <?php echo $this->common->getDbValue($user_info['mobile']); ?>
                                        </div>
                                    </div>
                                    <div class=" row">
                                        <label class="col-lg-3 col-form-label">Address:</label>
                                        <div class="col-lg-9">
                                            <?php echo $this->common->getDbValue($user_info['district_name_en']); ?></br>
                                            <?php echo $this->common->getDbValue($user_info['state_name_en']); ?>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- /basic layout -->

                        </div>
                        <div class="col-md-6">

                            <!-- Static mode -->
                            <div class="card">
                                <div class="card-header header-elements-inline">
                                    <h5 class="card-title">Payment</h5>
                                </div>

                                <div class="card-body">
                                    <form name="frm-edit" id="frm-edit" action="<?php echo site_url($form_action);?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="mode" id="mode" value="btnPayment">
                                        <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_info['user_id']?>">

                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3" for="amount">Amount :<span class="text-danger">*</span></label>
                                            <div class="col-lg-9"><input type="text" class="form-control numbersOnly" id="amount" name="amount" placeholder="Amount" value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3" for="date_added">Date Of Payment :<span class="text-danger">*</span></label>
                                            <div class="col-lg-9"><input type="text" name="date_added" id="date_added" class="form-control daterange-single" value="" placeholder="Date">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3" for="description">Notes :<span class="text-danger">*</span></label>
                                            <div class="col-lg-9"><input type="text" class="form-control" id="description" name="description" placeholder="Notes" value="">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3"></label>
                                            <div class="col-lg-9">
                                                <button type="submit" name="btnPayment" id="btnPayment" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>



                            <!-- /static mode -->

                        </div>

                    </div>

                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-header header-elements-inline">
                                    <h5 class="card-title">Commission</h5>
                                </div>

                                <table width="100%" class="table table-hover datatablecustom1">
                                    <thead>
                                        <tr class="bg-blue ">

                                            <th width="18%">Order ID</th>

                                            <th width="10%">Product Info</th>
                                            <th width="9%">Commission</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  $i=0;
                                    $total_commission=0;
                                  $bonus_column =   (isset($user_info['user_type']) && $user_info['user_type']=="DRI" ) ?'driver_bonus':'carry_boy_bonus';

								foreach($results_credit as $key => $value){
								$i++;
                                $description = json_decode($value['description'],true);

								?>
                                        <tr>

                                            <td class="text-left">
                                                <a href="<?php echo site_url('orders/orderdetail/'.$this->common->getDbValue($value['oorder_uid'])) ?>" target='_blank' class="list-icons-item text-primary-600"><?php echo $this->common->getDbValue($value['invoice_no']); ?></a>
                                            </td>

                                            <td class="text-left"><?php 
                                    foreach($description as $key => $desValue){

                                        echo "<div><span>".$desValue['name'] ."</span>  <span> (".$desValue['quantity']."</span> X <span class='text-primary'>".($desValue[$bonus_column] * 1).")</span> = <span>".$desValue['quantity'] * $desValue[$bonus_column]."</span></div>";
                                    }
                                    ?></td>
                                            <td class="text-right"><?php $total_commission = $total_commission + $this->common->getDbValue($value['amount'] ); 
                                    echo abs($this->common->getDbValue($value['amount'])) * 1;
                                    ?></td>


                                        </tr>
                                        <?php } ?>
                                        <tr>

                                            <td class="text-center">
                                            </td>

                                            <td class="text-right font-weight-black"> Total </td>
                                            <td class="text-right font-weight-black"><strong><?php echo  $total_commission;?></strong></td>


                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="card-header header-elements-inline">
                                    <h5 class="card-title">Payment</h5>
                                </div>
                                <table width="100%" class="table table-hover datatablecustom2">
                                    <thead>
                                        <tr class="bg-blue ">
                                           
                                            <th width="18%">Date</th>
                                            <th width="10%">Comments</th>
                                            <th width="9%">Amount</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  $i=0;
                                    $total_paid=0;
								foreach($results_debit as $key => $value){
								$i++;
                                $description = json_decode($value['description'],true);

								?>
                                        <tr>
                                        <td class="text-left">  <?php echo $this->common->getDateFormat($value['date_added'], 'd-m-Y'); ?>
                                            </td>
                                            <td class="text-left"> <?php echo $this->common->getDbValue($value['description']); ?>
                                            </td>
                                           
                                            <td class="text-right"><?php $total_paid = $total_paid + $this->common->getDbValue($value['amount'] ); 
                                    echo abs($this->common->getDbValue($value['amount'])) * 1;
                                    ?></td>


                                        </tr>
                                        <?php } ?>
                                        <tr>

                                            <td class="text-center">
                                            </td>
                                            

                                            <td class="text-right font-weight-black"> Total </td>
                                            <td class="text-right font-weight-black"><strong><?php echo  abs($total_paid);?></strong></td>


                                        </tr>
                                    </tbody>
                                </table>
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
        <script>
        // Setting datatable defaults
        $.extend($.fn.dataTable.defaults, {
            autoWidth: false,
            dom: '<"datatable-header"fBl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;',
                    'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;'
                }
            }
        });
        // Scrollable datatable
        $('.datatablecustom1').DataTable({

            columnDefs: [{
                orderable: false,
                targets: [0]
            }],
            autoWidth: false,
            scroller: true,
            scrollX: true,
            scrollY: '70vh',
            scrollCollapse: true,
            "paging": false,
            "bLengthChange": false, //thought this line could hide the LengthMenu
            "bInfo": true,
            "aaSorting": [],
            'columnDefs': [{
                "width": "10",
                "targets": 1
            }],
            fixedColumns: {
                leftColumns: 0,
                rightColumns: 0
            },
            buttons: {
                dom: {
                    button: {
                        className: 'btn btn-light'
                    }
                },
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            }
        });
        $('.datatablecustom2').DataTable({

            columnDefs: [{
                orderable: false,
                targets: [0]
            }],
            autoWidth: false,
            scroller: true,
            scrollX: true,
            scrollY: '70vh',
            scrollCollapse: true,
            "paging": false,
            "bLengthChange": false, //thought this line could hide the LengthMenu
            "bInfo": true,
            "aaSorting": [],
            'columnDefs': [{
                "width": "10",
                "targets": 1
            }],
            fixedColumns: {
                leftColumns: 0,
                rightColumns: 0
            },
            buttons: {
                dom: {
                    button: {
                        className: 'btn btn-light'
                    }
                },
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            }
        });
        // Single picker
        $('.daterange-single').daterangepicker({
            singleDatePicker: true,
            locale: {
                format: 'YYYY-MM-DD'
            }
        });

        //btnPayment
        $(document).ready(function() {

            $(".form-control").removeClass("border-danger");
            $("#frm-edit").submit(function(e) {
                var isError = false;
                var errMsg = "";
                var errMsg_alert = "";
                $(".form-control").removeClass("border-danger");


                if (!$("#amount").val()) {
                    isError = true;
                    //$("#error_first_name").show()
                    $("#amount").addClass("border-danger");

                }
                if (!$("#date_added").val()) {
                    isError = true;
                    // $("#error_mobile_number1").show()
                    $("#date_added").addClass("border-danger");
                }
                if (!$("#description").val()) {
                    isError = true;
                    // $("#error_mobile_number1").show()
                    $("#description").addClass("border-danger");
                }

                //frd_email
                if (isError) {
                    return false;
                } else {
                    $("#frm-edit").submit();
                }

                return false;
            });


        });
        </Script>
    </body>

</html>