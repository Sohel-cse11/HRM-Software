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
			Project Setup 
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('project'); ?>">Project Setup</a>
					</li>
					
				</ul>
				
			</div>
						<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
										<a class="btn btn-sm blue" href="javascript:;">
											Client
											<i class="fa fa-edit"></i></a>
										<a class="btn btn-sm blue" href="javascript:;">
											Employee
											<i class="fa fa-edit"></i></a>
										<a class="btn btn-sm blue" href="javascript:;">
											Client
											<i class="fa fa-edit"></i></a>
										
										</div>
										</div>

									<div class="col-md-6">
									<div class="btn-group pull-right">
										<div class="btn-group">
										<a href="<?php echo base_url("project/add");?>">
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
				
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								Project Setup 
							</div>
							<div class="tools">
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
									 Project Name
								</th>
								<th class="text-center">
									 Client
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
									 <?php echo $con->project_name;?>
								</td>
								<td class="text-center">
									  <?php echo $con->name;?>
								</td>
								<td class="text-center">
									<a  href="#">
									Edit </a> || <a  href="#">
									Delete </a>
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
<!-- END PAGE LEVEL PLUGINS -->
<script>
jQuery(document).ready(function() {       
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
TableAdvanced.init();
});
</script>
<?php $this->load->view('common/footer2'); ?>

         <td> <a href="<?php echo base_url("dashboard");?>">
         <img alt="" class="img-circle" style="width:40px;height: 40px;" src="<?php echo base_url();?>uploads/profile_image/<?php echo $this->session->userdata('profileimage');?>"/>
         </a></td>