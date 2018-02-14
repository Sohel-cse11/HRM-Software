<?php $this->load->view('common/header1'); ?>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
<?php $this->load->view('common/header2'); ?>
<?php $this->load->view('common/sidebar'); ?>
	<!-- BEGIN CONTENT -->
	
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		  <div class="page-content">
			<!-- BEGIN PAGE HEADER-->
		<h3 class="page-title">
			Expense Setup 
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('expense/category'); ?>">Expense</a>
					</li>
				</ul>
			</div>
					<?php
                    if ($this->session->flashdata('success')) {
                        ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php
                    }
                    if ($this->session->flashdata('error')) {
                        ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php } ?>
						<div class="row">
									<div class="col-md-12">
									<div class="btn-group pull-right">
										<div class="btn-group">
										<a href="<?php echo base_url("expense/add_category");?>">
											<button id="sample_editable_1_new" class="btn green">
											Add New <i class="fa fa-plus"></i>
											</button></a>	
										</div>
									</div>	
									</div>	
								</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
				<ul class="nav nav-tabs">
							<li class="active">
								<a href="<?php echo base_url('expense/category'); ?>" >
								Expenses Categories </a>
							</li>
							<li>
								<a href="<?php echo base_url('expense/method'); ?>" >
								Payment Methods </a>
							</li>
							<li>
								<a href="<?php echo base_url('expense/employee_expense'); ?>">
								Employees Expenses </a>
							</li>
							
						</ul>
			
			
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								Expenses Categories
							</div>
							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th width="8">
									 Serial No
								</th >
								<th class="text-center" >
									 Category Name
								</th>
								<th class="text-center">
									 Actions
								</th>
								
							</tr>
							</thead>
							<?php
                                   $sl = 1;
                                   foreach ($content as $con) {
                             ?>
							<tbody>
							<tr>
								<td class="text-center">
									<?php echo $sl;?>
								</td>
								<td class="text-center">
									 <?php echo $con->category_name;?>
								</td>
								<td class="text-center">
									<a href="<?php echo base_url('expense/edit_category/' . $con->id) ?>" class="btn default btn-xs purple" onClick="return confirm('Do you want to edit this item?');"><i class="fa fa-edit"></i>Edit</a>|| <a href="<?php echo base_url('expense/delete_category/' . $con->id) ?>" class="btn default btn-xs red" onClick="return confirm('Do you want to delete this item?');"><i class="fa fa-delete"></i>Delete</a>
								</td>
							</tr>
							
                                    <?php
                                    $sl++;
                                    }
                                    ?>
							</tbody>
							</table>
						</div>
					</div>
					</div>
				
					
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
<?php $this->load->view('common/footer1'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/admin/pages/scripts/form-samples.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script>
jQuery(document).ready(function() {       
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
TableAdvanced.init();
FormSamples.init();
});
</script>
<?php $this->load->view('common/footer2'); ?>

