<?php $this->load->view('common/header1');?>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<?php $this->load->view('common/header2');?>
<!-- BEGIN CONTAINER -->
<?php $this->load->view('common/sidebar');?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Edit Job Details 
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('job'); ?>">Job Details</a>
						
					</li>
					
					
				</ul>
			
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Edit Job Details
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
									<?php
                                    $attributes = array('class' => 'form-horizontal form-row-seperated', 'id' => '');
                                    echo form_open('', $attributes);
                                    ?>
									
									<div class="form-group">
										<label class="control-label col-md-3"> Code </label>
										<div class="col-md-4">
										<?php
                                            $code = array(
                                                'name' => 'code',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter code  here',
                                                'id' => '',
                                                'value' => set_value('code',!empty($content->code)? $content->code:'')
                                            );
                                            echo form_input($code);
                                            echo form_error('code', '<p class="text-danger">', '</p>');
                                            ?>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3"> Job Name </label>
										<div class="col-md-4">
										<?php
                                            $name = array(
                                                'name' => 'jt_name',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter job name  here',
                                                'id' => '',
                                                 'value' => set_value('jt_name',!empty($content->jt_name)? $content->jt_name:'')
                                            );
                                            echo form_input($name);
                                            echo form_error('jt_name', '<p class="text-danger">', '</p>');
                                            ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> Description </label>
										<div class="col-md-4">
										<?php
                                            $description = array(
                                                'name' => 'description',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter description  here',
                                                'id' => '',
                                                 'cols' => 3,
                                                'rows' => 5,
                                                'value' => set_value('description',!empty($content->description)? $content->description:'')
                                            );
                                            echo form_textarea($description);
                                            echo form_error('description', '<p class="text-danger">', '</p>');
                                            ?>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3"> Specification </label>
										<div class="col-md-4">
										<?php
                                            $specification = array(
                                                'name' => 'specification',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter specification  here',
                                                'id' => '',
                                                'value' => set_value('specification',!empty($content->specification)? $content->specification:'')
                                            );
                                            echo form_input($specification);
                                            echo form_error('specification', '<p class="text-danger">', '</p>');
                                            ?>
										</div>
									</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-pencil"></i>Save</button>
											<a href="<?php echo base_url('job'); ?>">
											<button type="button" class="btn default">Cancel</button></a>
										</div>
									</div>
								</div>
							     
							      <?php
                                   echo form_close();
                                   ?>
							<!-- END FORM-->
						
						<!-- END VALIDATION STATES-->
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php $this->load->view('common/footer1');?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-markdown/lib/markdown.js"></script>
<script src="<?php echo base_url();?>assets/admin/pages/scripts/form-validation.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<script>
jQuery(document).ready(function() {   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   FormValidation.init();
});
</script>
<!-- END JAVASCRIPTS -->
<?php $this->load->view('common/footer2');?>