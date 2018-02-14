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
			Add Project 
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('project'); ?>">Project</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('project/add'); ?>">Add Project</a>
					</li>
					
				</ul>
			
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Add Project
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
									<?php
                                    $attributes = array('class' => 'form-horizontal form-row-seperated', 'id' => '');
                                    echo form_open('', $attributes);
                                    ?>
									
									<div class="form-group">
										<label class="control-label col-md-3"> Project Name </label>
										<div class="col-md-4">
										<?php
                                            $Project_Name_field = array(
                                                'name' => 'project_name',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter project name here',
                                                'id' => '',
                                                'value' => set_value('project_name')
                                            );
                                            echo form_input($Project_Name_field);
                                            echo form_error('project_name', '<p class="text-danger">', '</p>');
                                            ?>
										</div>
									</div>
									<div class="form-group">
                                        <label class="control-label col-md-3">Client</label>
                                        <div class="col-md-4">
                                            <select name="client" class="form-control">
                                                     <?php
                                                    $client = set_value('client');
                                                    
                                                    if (!empty($client_list)) {
                                                        foreach ($client_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->id;?>" <?php echo ($client == $list->id) ? 'selected' : ''?>><?php echo 
                                                                $list->name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="control-label col-md-3"> Details </label>
										<div class="col-md-4">
										<?php
                                            $details = array(
                                                'name' => 'details',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter details  here',
                                                'id' => '',
                                                 'cols' => 3,
                                                'rows' => 5,
                                                'value' => set_value('project_name')
                                            );
                                            echo form_textarea($details);
                                            echo form_error('details', '<p class="text-danger">', '</p>');
                                            ?>
										</div>
									</div>
									<div class="form-group">
                                        <label class="control-label col-md-3">Status</label>
                                        <div class="col-md-4">
                                            <select name="status" class="form-control">
                                                     <?php
                                                    $status = set_value('status');
                                                    
                                                    if (!empty($status_list)) {
                                                        foreach ($status_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->id;?>" <?php echo ($status == $list->id) ? 'selected' : ''?>><?php echo 
                                                                $list->status_name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-pencil"></i>Save</button>
											<a href="<?php echo base_url('project'); ?>">
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