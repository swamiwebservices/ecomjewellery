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
                    <div class="card pt-2 ">
                        <?php
if (isset($results) && sizeof($results) > 0) {
    ?>

                        <table class="table table-hover datatablecustom">
                            <thead>
                                <tr class="bg-blue ">
                                    <th width="4%">#</th>
                                    <th width="17%">Name</th>

                                 
                                    <th width="7%">UUID</th>
                                   
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i=0;
								foreach($results as $key => $value){
                                    $i++;

								?>
                                <tr class="  border-left-3  ">
                                    <td valign="top"><?php echo $i?></td>
                                    <td valign="top">
                                        <?php echo $this->common->getDbValue($value['first_name']); ?>
                                            <?php echo $this->common->getDbValue($value['last_name']); ?></br>
                                            <?php echo $this->common->getDbValue($value['email']); ?>
                                    </td>
                                    <td  ><?php echo $this->common->getDbValue($value['uuid']); ?></td>
                                  

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <?php } else {
    ?>
                        <div class=" text-center  card-body border-top-info1">
                            No record found
                        </div>
                        <?php
}?>


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
        // Scrollable datatable
        $('.datatablecustom').DataTable({

            columnDefs: [{
                orderable: false,
                targets: [0]
            }],
            autoWidth: false,
            scroller: true,
            scrollX: true,
            scrollY: '70vh',
            scrollCollapse: false,
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



        // Show calendars on left
        $('#date_range').daterangepicker({
            autoUpdateInput: false,
            opens: 'left',
            applyClass: 'bg-slate-600',
            cancelClass: 'btn-light'
        }, function(start_date, end_date) {
            // $('#date_range').val(chosen_date.format('YYYY-MM-DD'));
            $('#date_range').val(start_date.format('YYYY/MM/DD') + ' - ' + end_date.format('YYYY/MM/DD'));

        });
        </Script>
    </body>

</html>