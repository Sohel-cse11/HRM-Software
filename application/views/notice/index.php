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
			Notice
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('notice'); ?>">Notice</a>
					</li>
				</ul>
			</div>
					
						
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
					<div class="row">
				<div class="col-md-12 news-page blog-page">
					<div class="row">
					<?php
                                 
                                    foreach ($content as $con) {
                                        ?>
						<div class="col-md-12 blog-tag-data">
						 
							<h3><?php echo $con->message_title;?></h3>
							
							<div class="row">
								<div class="col-md-6">
									<ul class="list-inline blog-tags">
										<li>
											<i class="fa fa-tags"></i>
											<a href="javascript:;">
											<?php echo $con->first_name;?> <?php echo $con->middle_name;?> <?php echo $con->last_name;?> </a>	
										</li>
									</ul>
								</div>
								<div class="col-md-6 blog-tag-data-inner">
									<ul class="list-inline">
										<li>
											<i class="fa fa-calendar"></i>
											<a href="javascript:;">
											<?php echo $con->time;?> </a>
										</li>
										
									</ul>
								</div>
							</div>
							<div class="news-item-page">
								<p>
								 <?php echo $con->message;?><a href="<?php echo base_url('notice/details/' . $con->n_id) ?>"><h4> Details</h4></a>
								</p>
								
							</div>
						
					
						
						</div>
						 <?php
                                   
                                    }
                                    ?>
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

