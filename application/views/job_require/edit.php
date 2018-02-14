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
			Edit Job Position
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('job_require'); ?>"> Job Position</a>
						<i class="fa fa-angle-right"></i>
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
								<i class="fa fa-gift"></i>Edit Job Position
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
									<?php
                                    $attributes = array('class' => 'form-horizontal form-row-seperated', 'id' => '');
                                    echo form_open('', $attributes);
                                    ?>
									
									<div class="form-group">
                                        <label class="control-label col-md-3">Job Title</label>
                                        <div class="col-md-4">
                                            <select name="job_title" class="form-control">
                                                     <?php
                                                    $job_title = set_value('job_title',$content->job_title);
                                                    
                                                    if (!empty($job_code_list)) {
                                                        foreach ($job_code_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->jt_id;?>" <?php echo ($job_title == $list->jt_id) ? 'selected' : ''?>><?php echo 
                                                                $list->jt_name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
									
									
									<div class="form-group">
										<label class="control-label col-md-3"> Description </label>
										<div class="col-md-4">
										<?php
                                            $code = array(
                                                'name' => 'job_description',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter Job Description  here',
                                                'id' => '',
                                                 'cols' => 3,
                                                'rows' => 5,
                                                'value' => set_value('job_description',(!empty($content->job_description)) ? $content->job_description : '')
                                            );
                                            echo form_textarea($code);
                                            echo form_error('job_description', '<p class="text-danger">', '</p>');
                                            ?>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3"> Requirement </label>
										<div class="col-md-4">
										<?php
                                            $code = array(
                                                'name' => 'requirement',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter requirement  here',
                                                'id' => '',
                                                 'cols' => 3,
                                                'rows' => 5,
                                                'value' => set_value('requirement',(!empty($content->requirement)) ? $content->requirement : '')
                                            );
                                            echo form_textarea($code);
                                            echo form_error('requirement', '<p class="text-danger">', '</p>');
                                            ?>
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Benefits</label>
                                        <div class="col-md-4">
                                            <select name="benefit" class="form-control">
                                                     <?php
                                                    $benefit = set_value('benefit',$content->benefit);
                                                    
                                                    if (!empty($benefit_list)) {
                                                        foreach ($benefit_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->benefit_id;?>" <?php echo ($benefit == $list->benefit_id) ? 'selected' : ''?>><?php echo 
                                                                $list->benefit_name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="control-label col-md-3">Department</label>
                                        <div class="col-md-4">
                                            <select name="department" class="form-control">
                                                     <?php
                                                    $department = set_value('department',$content->department);
                                                    
                                                    if (!empty($department_list)) {
                                                        foreach ($department_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->DepartmentID;?>" <?php echo ($department == $list->DepartmentID) ? 'selected' : ''?>><?php echo 
                                                                $list->DepartmentName;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="control-label col-md-3">Experience</label>
                                        <div class="col-md-4">
                                            <select name="experience" class="form-control">
                                                     <?php
                                                    $experience = set_value('experience',$content->experience);
                                                    
                                                    if (!empty($experience_list)) {
                                                        foreach ($experience_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->experience_id;?>" <?php echo ($experience == $list->experience_id) ? 'selected' : ''?>><?php echo 
                                                                $list->experience_name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="control-label col-md-3">Employee Type</label>
                                        <div class="col-md-4">
                                            <select name="employee_type" class="form-control">
                                                     <?php
                                                    $employee_type = set_value('employee_type',$content->employee_type);
                                                    
                                                    if (!empty($employee_type_list)) {
                                                        foreach ($employee_type_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->recruit_type_id;?>" <?php echo ($employee_type == $list->recruit_type_id) ? 'selected' : ''?>><?php echo 
                                                                $list->employee_type_name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Job Function</label>
                                        <div class="col-md-4">
                                            <select name="job_function" class="form-control">
                                                     <?php
                                                    $job_function = set_value('job_function',$content->job_function);
                                                    
                                                    if (!empty($job_function_list)) {
                                                        foreach ($job_function_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->job_function_id;?>" <?php echo ($job_function == $list->job_function_id) ? 'selected' : ''?>><?php echo 
                                                                $list->job_function_name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="control-label col-md-3">Education</label>
                                        <div class="col-md-4">
                                            <select name="education_level" class="form-control">
                                                     <?php
                                                    $education_level = set_value('education_level',$content->education_level);
                                                    
                                                    if (!empty($education_list)) {
                                                        foreach ($education_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->education_level_id;?>" <?php echo ($education_level == $list->education_level_id) ? 'selected' : ''?>><?php echo 
                                                                $list->education_level_name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="control-label col-md-3">Maximum Salary</label>
                                        <div class="col-md-4">
                                            <select name="max_salary" class="form-control">
                                                     <?php
                                                    $max_salary = set_value('max_salary',$content->max_salary);
                                                    
                                                    if (!empty($salary_list)) {
                                                        foreach ($salary_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->p_id;?>" <?php echo ($max_salary == $list->p_id) ? 'selected' : ''?>><?php echo 
                                                                $list->max_salary;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="control-label col-md-3">Minimu Salary</label>
                                        <div class="col-md-4">
                                            <select name="min_salary" class="form-control">
                                                     <?php
                                                    $min_salary = set_value('min_salary',$content->min_salary);
                                                    
                                                    if (!empty($salary_list)) {
                                                        foreach ($salary_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->p_id;?>" <?php echo ($min_salary == $list->p_id) ? 'selected' : ''?>><?php echo 
                                                                $list->min_salary;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-md-3">DeadLine</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">

                                                <?php
                                                $date_end = array(
                                                    'name' => 'deadline',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'first_contact_date',
                                                    'id' => '',
                                                    'value' => set_value('deadline',(!empty($content->deadline)) ? $content->deadline : '')
                                                );
                                                echo form_input($date_end);
                                                ?>

                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('deadline', '<p class="text-danger">', '</p>');?>
                                            
                                        </div>
                                    </div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-pencil"></i>Save</button>
											<a href="<?php echo base_url('job_require'); ?>">
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