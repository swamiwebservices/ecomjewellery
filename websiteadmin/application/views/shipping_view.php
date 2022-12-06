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
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="<?php echo site_url("home");?>" class="breadcrumb-item"><i
                                    class="icon-home2 mr-2"></i> Home</a>
                            <span
                                class="breadcrumb-item "><?php echo (isset($this->pg_title))?$this->pg_title:''?></span>
                            <span
                                class="breadcrumb-item active"><?php echo (isset($sub_heading))?$sub_heading:''?></span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="breadcrumb justify-content-center">
                            <!-- <a href="<?php echo site_url($add_link); ?>" class="breadcrumb-elements-item">
                                <button type="button" class="btn btn-success btn-sm"><i class="icon-plus2 mr-2"></i> Add
                                    New</button>
                            </a> -->

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
                <div class="card  ">




                    <div class="table-responsive">
                        <table class="table table-hover datatable-basicwti">
                            <thead>
                                <tr class="bg-blue ">
                                    <td class="text-left">Name</td>
                                    <td class="text-left">Free Shipping</td>
                                    <td class="text-left">Shipping Charge</td>
                                    <td class="text-center">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        if (isset($results) && sizeof($results) > 0) {
                                            ?>
                                <?php   foreach ($results as $key => $value) {?>
                                <tr>
                                    <td class="text-left"><?php echo $value['name']; ?></td>

                                    <td class="text-left"><?php echo $value['free_shipping']; ?></td>
                                    <td class="text-left"><?php echo $value['shipping_charge']; ?></td>

                                    <td valign="top" class="text-center">
                                         
                                            <a href="<?php echo site_url($edit_link.'/'.$value['geo_zone_id'])?>"
                                                class="list-icons-item text-primary-600" data-popup="tooltip" title=""
                                                data-original-title="Edit"><i class="icon-pencil7"></i></a>
                                            

                                         
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php } else { ?>
                                <tr>
                                    <td class="text-center" colspan="5">No results</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

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
            targets: [3]
        }],
        lengthMenu: [
            [100, 250, 500, -1],
            [100, 250, 500, 'All'],
        ],
        autoWidth: false,

        scrollCollapse: false,
        "paging": false,
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
    </Script>
</body>

</html>