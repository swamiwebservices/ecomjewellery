<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('inc_metacss');?>
    <script src="<?php echo base_url()?>global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url()?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="<?php echo base_url()?>global_assets/js/demo_pages/datatables_responsive.js"></script>
    <script src="<?php echo base_url()?>global_assets/js/plugins/notifications/bootbox.min.js"></script>
    <!-- 	    <script src="<?php echo base_url()?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
 -->
    <!-- <script src="<?php echo base_url()?>global_assets/js/demo_pages/components_modals.js"></script> -->
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
            <!-- Page header -->
            <div class="page-header page-header-light">


                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="<?php echo site_url("home"); ?>" class="breadcrumb-item"><i
                                    class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item "><?php echo (isset($title)) ? $title : '' ?></span>
                            <span
                                class="breadcrumb-item active"><?php echo (isset($sub_heading)) ? $sub_heading : '' ?></span>
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
                <div class="card  ">
                    <?php if (isset($results) && sizeof($results)>0) { ?>
                    <div class="table-responsive">
                        <table class="table table-hover datatable-basicwti">
                            <thead>
                                <tr class="bg-blue ">
                                    <th width="4%">#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Current MRP-Price</th>
                                    <th>Current Sell-Price</th>
                                    <th>Purchased Price</th>
                                    <th>Purchased Qty</th>
                                    <th>Total Amount</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i=0;
									foreach($results as $key => $value){
									$i++;
								 							
								 

								?>
                                <tr
                                    class="  border-left-3">
                                    <td valign="top"><?php echo $i?></td>
                                    <td valign="top">
                                        <strong><?php echo $this->common->getDbValue($value['name']);
                                       
                                        ?></strong></td>

                                    <td valign="top">
                                        <?php 
										if($value['main_image']!=''){
											$photo = back_path.'uploads/prod_images/'.stripslashes($value['main_image']);
										} else {
											$photo = 'https://via.placeholder.com/140x100';	
										}
									?>
                                        <img src="<?php echo $photo?>" width="150">
                                    </td>
                                    <td valign="top">
                                      <?php echo $value['mrp']?>
                                    
                                    </td>
                                    <td valign="top">
                                    <?php echo $value['sellprice']?>
                                    
                                    </td>
                                    <td valign="top">
                                    <?php echo $value['purchased_price']?>
                                    
                                    </td>
                                    <td valign="top">
                                    <?php echo $value['total_qty']?>
                                    
                                    </td>
                                    <td valign="top">
                                    <?php echo $value['total_amount']?>
                                    
                                    </td>

                                   
                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php } else {
                        ?>
                    <div class=" text-center  card-body border-top-info1">
                        No record found
                    </div>
                    <?php    
                            }?>

                <?php if(isset($num_row) && $num_row>0){ ?>
                    <div class="row">
                        <div class="col-xl-12 text-center  ">
                            <ul class="pagination-flat justify-content-center twbs-flat pagination pull-right">
                                <?php echo $this->common->ajaxpagingnation_admin_new($start,$num_row,$maxm,'',$fun_name,$other_para); ?>

                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- /basic datatable -->
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



    // Initialize
    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        dropdownAutoWidth: true,
        width: 'auto'
    });

    // Basic datatable
    var lastIdx = null;
    var table = $('.datatable-basicwti').DataTable({
        columnDefs: [{
            orderable: false,
            targets: [7,8,9]
        }],
        lengthMenu: [
            [100, 250, 500, -1],
            [100, 250, 500, 'All'],
        ],
        autoWidth: true,

        scrollCollapse: true,
        "paging": true,
        buttons: {
            buttons: [{
                    extend: 'copyHtml5',
                    className: 'd-none btn btn-light',
                    text: '<i class="icon-copy3 mr-2"></i> Copy'
                },
                {
                    extend: 'csvHtml5',
                    className: 'd-none  btn btn-light',
                    text: '<i class="icon-file-spreadsheet mr-2"></i> CSV',
                    fieldSeparator: '\t',
                    extension: '.tsv'
                },
                {
                    extend: 'print',
                    className: 'd-none  btn btn-light',
                    text: '<i class="icon-printer mr-2"></i> Print table',
                    autoPrint: false

                }
            ]
        },
        "bLengthChange": true, //thought this line could hide the LengthMenu
        "bInfo": true,
        "aaSorting": [],
        "bInfo": true,
        "bFilter": true,
        responsive: true,
    });


    $('.datatable-basicwti tbody').on('mouseover', 'td', function() {
        var colIdx = table.cell(this).index().column;

        if (colIdx !== lastIdx) {
            $(table.cells().nodes()).removeClass('active');
            $(table.column(colIdx).nodes()).addClass('active');
        }
    }).on('mouseleave', function() {
        $(table.cells().nodes()).removeClass('active');
    });
    </script>
    <Script>
    // Custom bootbox dialog
    $('.bootbox_custom').on('click', function() {
        var duid = $(this).data("duid") // will return the number 123
        bootbox.confirm({
            title: 'Confirm ',
            message: 'Are you sure you want to delete selected records ?',
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-link'
                }
            },
            callback: function(result) {
                if (result) {

                    location.href =
                        "<?php echo site_url($this->ctrl_name . '/delete_product/') ?>" + duid;


                }
            }
        });
    });
    </Script>
</body>

</html>