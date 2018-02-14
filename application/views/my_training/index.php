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
			My Training 
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('my_training/index'); ?>">My Training</a>
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
						
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
				
			
			
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								My Training
							</div>
							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								
								<th class="text-center" >
									 Name
								</th>
								<th class="text-center">
									 Course
								</th>
								<th class="text-center">
									Scheduled Time
								</th>
								<th class="text-center">
									Delivery Method
								</th>
								<th class="text-center">
									Attedance Type
								</th>
								
								
							</tr>
							</thead>
							<?php
                                 
                                   foreach ($content as $con) {
                             ?>
							<tbody>
							<tr>
								
								<td class="text-center">
									 <?php echo $con->name;?>
								</td>
								<td class="text-center">
									  <?php echo $con->session_name;?> 
								</td>
								<td class="text-center">
									  <?php echo $con->scheduled_time;?>
								</td>
								<td class="text-center">
									 <?php echo $con->delivery_name;?>
								</td>
								<td class="text-center">
									  <?php echo $con->attendance_name;?> 
								</td>
								
								
							</tr>
							
                                    <?php
                                   
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

