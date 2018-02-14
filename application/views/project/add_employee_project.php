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
			Add Employee Project
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('project/employee_project_index'); ?>">Employee Project</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('project/add_employee_project'); ?>">Add Employee Project</a>
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
								<i class="fa fa-gift"></i>Add Employee Project
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
									<?php
                                    $attributes = array('class' => 'form-horizontal form-row-seperated', 'id' => '');
                                    echo form_open('', $attributes);
                                    ?>
									
									<div class="form-group">
                                        <label class="control-label col-md-3">Employee Name</label>
                                        <div class="col-md-4">
                                            <select name="employee" class="form-control">
                                                     <?php
                                                    $employee = set_value('employee');
                                                    
                                                    if (!empty($employee_list)) {
                                                        foreach ($employee_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->id;?>" <?php echo ($employee == $list->id) ? 'selected' : ''?>><?php echo 
                                                                $list->first_name;?><?php echo 
                                                                $list->middle_name;?><?php echo 
                                                                $list->last_name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Project Name</label>
                                        <div class="col-md-4">
                                            <select name="project" class="form-control">
                                                     <?php
                                                    $project = set_value('project');
                                                    
                                                    if (!empty($project_list)) {
                                                        foreach ($project_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->p_id;?>" <?php echo ($project == $list->p_id) ? 'selected' : ''?>><?php echo 
                                                                $list->project_name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="control-label col-md-3">Start Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">

                                                <?php
                                                $date_start = array(
                                                    'name' => 'date_start',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'first_contact_date',
                                                    'id' => '',
                                                    'value' => set_value('date_start', date('Y-m-d'))
                                                );
                                                echo form_input($date_start);
                                                ?>

                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('date_start', '<p class="text-danger">', '</p>');?>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">End Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">

                                                <?php
                                                $date_end = array(
                                                    'name' => 'date_end',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'first_contact_date',
                                                    'id' => '',
                                                    'value' => set_value('date_end', date('Y-m-d'))
                                                );
                                                echo form_input($date_end);
                                                ?>

                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('date_end', '<p class="text-danger">', '</p>');?>
                                            
                                        </div>
                                    </div>
                                    
									
									<div class="form-group">
										<label class="control-label col-md-3">Details</label>
										<div class="col-md-4">
										<?php
                                            $details = array(
                                                'name' => 'details',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter details url  here',
                                                'id' => '',
                                                 'cols' => 3,
                                                'rows' => 5,
                                                'value' => set_value('details')
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
											<a href="<?php echo base_url('project/employee_project_index'); ?>">
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