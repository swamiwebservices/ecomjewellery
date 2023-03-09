<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view('inc_metacss');?>
        <script src="<?php echo base_url() ?>global_assets/js/demo_pages/datatables_responsive.js"></script>
        <script src="<?php echo base_url() ?>global_assets/js/plugins/notifications/bootbox.min.js"></script>
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
                                <span class="breadcrumb-item text-capitalize"><?php echo (isset($title)) ? $title : '' ?></span>
                                <span class="breadcrumb-item active text-capitalize"><?php echo (isset($sub_heading)) ? $sub_heading : '' ?></span>
                            </div>
                            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                        </div>
                        <div class="header-elements d-none">
                            <div class="breadcrumb justify-content-center">
                                <a href="<?php echo site_url($download_link ); ?>" class="breadcrumb-elements-item">
                                    <button type="button" class="btn bg-success btn-sm"><i class="icon-file-excel"></i> Download</button>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Table header styling -->
                    <div class="card">

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

                        <?php
						        if (isset($results)  &&  sizeof($results)>0 ) { 
                        ?> <div class="table-responsive">
                            <table class="table table-hover datatable-basicwti">

                                <thead>
                                    <tr class="bg-blue">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Purpose</th>
                                        <th>Date Added</th>
                                        <th>Status</th>
                                        <th width="1%" >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $i=0;
                                     
                                      foreach($results as $key => $value){
                                          $i++;
                                          $status = $this->common->getDbValue($value['status']);
									  ?>
                                     <tr class="  border-left-3  <?php echo ($status == "1") ? 'border-left-success' : 'border-left-danger' ?>  tr">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $this->common->getDbValue($value['contact_fname']); ?> <?php echo $this->common->getDbValue($value['contact_lname']); ?></td>
                                        <td><?php echo $this->common->getDbValue($value['contact_email']); ?></td>
                                        <td><?php echo $this->common->getDbValue($value['contact_subject']); ?> </td>
                                        <td><?php echo isset($value['add_date']) ? $this->common->getDateFormat($value['add_date'], DATE_FORMAT_PHP) : ''; ?></td>
                                        <td> 
                                            <?php
if ($status == "1") {echo '<span class="badge badge-info  w-25">New</span>';}
      ?>
                                            <?php
if ($status == "2") {echo '<span class="badge badge-success  w-25">Read</span>';}
      ?></td>
                                        <td class="text-center"><a href="<?php echo site_url($controller.'/editdata/'.$value['id'])?>" class="list-icons-item text-primary-600" data-popup="tooltip" title="Edit" data-container="body"><i class="icon-pencil7"></i></a>
                                            <a href="#" data-uuid="<?php echo $value['id'] ?>" class="list-icons-item text-danger-600 bootbox_custom" data-popup="tooltip" title="Delete" data-container="body"><i class="icon-trash"></i></a>

                                        </td>
                                    </tr>
                                    <?php }?>

                                </tbody>
                            </table>
                        </div>
                        <?php }  else {
                                ?>
                        <div class="row">
                            <div class="col-xl-12 text-center  "> No record found
                            </div>
                        </div>
                        <?php   
                                       }?>
                                             <?php if($num_row>0){ ?>
                        <div class="row">
                            <div class="col-xl-12 text-center  ">  
                            <ul class="pagination-flat justify-content-center twbs-flat pagination pull-right">
                                                         <?php echo $this->common->ajaxpagingnation_admin_new($start,$num_row,$maxm,'',$fun_name,$other_para); ?>
                                                                                                
 </ul>
                            </div>
                        </div>
                        <?php } ?>  

                    </div>
                    <!-- /table header styling -->





                </div>
                <!-- /content area -->


                <!-- Footer -->
                <?php $this->load->view('inc_footer');?>

                <!-- /footer -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </body>
    <!-- Remove modal -->
    <div id="remove_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm action</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    You are about to remove this row. Are you sure?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Yes, remove</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">No, thanks</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /remove modal -->

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
            targets: [0,4,5]
        }],
        autoWidth: true,

        scrollCollapse: true,
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

    <script>
    // Custom bootbox dialog
    $('.bootbox_custom').on('click', function() {
        var uuid = $(this).data("uuid") // will return the number 123
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

                    location.href = "<?php echo site_url($controller . '/delete_data/') ?>" + uuid;


                }
            }
        });
    });
    </Script>

</html>