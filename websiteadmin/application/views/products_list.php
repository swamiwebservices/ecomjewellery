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
                            
                            <a href="<?php echo site_url("products/exporttocsv"); ?>" target="_blank" class="breadcrumb-elements-item">
                                <button type="button" class="btn btn-success btn-sm"><i class="icon-file-excel mr-2"></i> Download</button>
                            </a>
                            <a href="<?php echo site_url($add_link); ?>" class="breadcrumb-elements-item">
                                <button type="button" class="btn btn-success btn-sm"><i class="icon-plus2 mr-2"></i> Add
                                    New</button>
                            </a>

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

                                    <th width="20%">Category</th>
                                    <th width="20%">Sub-Cate</th>
                                    <th width="27%">Price</th>

                                    <th width="18%">Image</th>
                                    <th width="8%">Status</th>
                                    <th width="8%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i=0;
									foreach($results as $key => $value){
									$i++;
									$status_flag = $this->common->getDbValue($value['status_flag']);
									
									$main_cat = $this->common->getOneRow('product_category', "where category_id=" . $value['category_id']);
									$sub_cat = $this->common->getOneRow('product_category', "where category_id=" . $value['sub_category_id']);									
									

                                    // $specification2 = (isset($results['specification']) && is_array($results['specification'])) ? $results['specification'] : [];

                                    // $specification = (isset($value['specification']) && !is_array($value['specification']) ) ? json_decode($value['specification'],true) : $specification2;

                                    
                                    // for($p=1;$p<8;$p++){
                                    //  $title =   (isset($specification['title'][$p])) ? $specification['title'][$p] : '' ;
                                    
                                    //  if(strtolower(trim($title))=="weight"){
                                    //       $value_gm =   (isset($specification['value'][$p])) ? (float)$specification['value'][$p] : '0.00' ;
                                    //       $where = "uuid = '" . $value['uuid'] . "'";
                                    //       $add_in_m['weight_gms'] = $value_gm;
                                    //      // $update_status = $this->common->updateRecord('product_master', $add_in_m, $where);
                                    //  }
                                    // }

								?>
                                <tr
                                    class="  border-left-3  <?php echo ($status_flag == "Active") ? 'border-left-success' : 'border-left-danger' ?>  tr<?php echo $this->common->getDbValue($value['status_flag']); ?>">
                                    <td valign="top"><?php echo $i?></td>
                                    <td valign="top">
                                        <strong><?php echo $this->common->getDbValue($value['name']);
                                       
                                        ?></strong></td>

                                    <td><?php echo isset($main_cat['name'])?$this->common->getDbValue($main_cat['name']):''; ?>
                                                                            </td>
                                    <td><?php echo isset($sub_cat['name'])?$this->common->getDbValue($sub_cat['name']):''; ?>
                                    </td>
                                    <td valign="top">
                                        <?php
                                         $domain_list = $this->config->item("DOMAINs");
                                         foreach($domain_list as $domain_id => $domain){
                                        ?>
                                    <?php echo $this->common->getDbValue($domain); ?> : <?php echo isset($value['domain'.$domain_id.'_mrp'])?$this->common->getDbValue($value['domain'.$domain_id.'_mrp']) : $value['mrp']; ?> - <?php echo isset($value['domain'.$domain_id.'_sellprice'])?$this->common->getDbValue($value['domain'.$domain_id.'_sellprice']):$value['sellprice']; ?></br>
                                    <?php }?>
                                    
                                    </td>


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
                                        <?php
                                        if($status_flag=="Active"){echo '<span class="badge badge-success">Active</span>';}
                                        ?>
                                        <?php
                                        if($status_flag=="Inactive"){echo '<span class="badge badge-danger">Inactive</span>';}
                                        ?>
                                    </td>
                                    <td valign="top">
                                        <div class="list-icons">
                                        <a href="<?php echo site_url($edit_link.'/'.$value['uuid'])?>"
                                                class="list-icons-item text-primary-600" data-popup="tooltip" title=""
                                                data-original-title="Edit"><i class="icon-pencil7"></i></a>
                                            <a href="#" class="list-icons-item text-danger-600 bootbox_custom"
                                                data-duid="<?php echo $this->common->getDbValue($value['uuid']) ?>"
                                                data-popup="tooltip" title="" data-original-title="Delete"><i
                                                    class="icon-trash"></i></a>

                                        </div>
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
            targets: [5,6,7]
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