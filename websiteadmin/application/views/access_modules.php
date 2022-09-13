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
                                <a href="<?php echo site_url("dashboard");?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item ">Admin Users</span>
                                <span class="breadcrumb-item active">Users Access</span>
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

				<!-- Page length options -->
			  <div class="card">
			  <div class="card-header header-elements-inline">
						<h5 class="card-title">Module Access (<?php echo $this->common->getDbValue($user_rs['first_name'])?> <?php echo $this->common->getDbValue($user_rs['last_name'])?>)</h5>
			    </div>
<form action="<?php echo site_url($controller.'/access_modules/'.$id)?>" name="ed_pg_frm" id="ed_pg_frm" method="post" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="mode_edt" id="mode_edt" value="edit_att">

				  <table width="100%" class="table datatable-basic table-bordered table-striped table-hover">

					  <thead>
						  <tr class="bg-table-tr">
						    <th colspan="2" >Access Modules</th>
						  </tr>
					  </thead>
					  <tbody>
<?php 
			  $i=1;
			  foreach($sel_rs as $det){
				  
						$where_cond = " WHERE parent_id=".$det['acc_id']." ORDER BY acc_id ";
						$sub_sel_rs = $this->common->getAllRow('site_acc_right_master',$where_cond);
?>                         
						  <tr>
						    <td colspan="2"><strong><?php echo $this->common->getDbValue($det['acc_module_name'])?></strong></td>
						  </tr>
	<?php foreach($sub_sel_rs as $det_sub){
		
			 	$chke = '';
				if (in_array($this->common->getDbValue($det_sub['acc_id']), $selected_acc_ids)) {
					$chke = 'checked';
				}			
   ?>                          
						  <tr>
						    <td width="5%">&nbsp;</td>
						    <td width="74%"><label class="checkbox">
						      <input type="checkbox" name="cli_locations[]" id="cli_locations[]" <?php echo $chke?> value="<?php echo $this->common->getDbValue($det_sub['acc_id'])?>" />
					        <?php echo $this->common->getDbValue($det_sub['acc_module_name'])?> </label></td>
					    </tr>

  <?php } ?>                         
<?php 
$i++;
} ?>  

						  <tr>
						    <td colspan="2"><div class="form-group row">
						      <label class="col-form-label col-lg-2"></label>
						      <div class="col-lg-9">
						        <button type="submit" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
						        </div>
					        </div></td>
					    </tr>                        
					  </tbody>
				  </table>
</form>				  
				  
				</div>
				<!-- /page length options -->


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
	 $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            columnDefs: [{ 
                orderable: false,
                width: 100,
                targets: [ 4 ]
            }],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
        });

        // Basic datatable
        $('.datatable-basic').DataTable({
        columnDefs: [{
            orderable: false,
            targets: [4]
        }],
        autoWidth: true,
        
        scrollCollapse: true,
        "paging": true,
        "bLengthChange": true, //thought this line could hide the LengthMenu
        "bInfo": true,
        "aaSorting": [],
        /*  fixedColumns : {
					leftColumns : 2,
					rightColumns : 1
				},  */
        "bFilter": true,
        responsive: true,
    });
	</script>	
</body>
 
</html>
