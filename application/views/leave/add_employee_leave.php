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
			Add Employee's Leave 
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('leave/employee_list'); ?>">Employee's Leave </a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('leave/add_employee_leave'); ?>">Add Employee's Leave </a>
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
								<i class="fa fa-gift"></i>Add Employee's Leave
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
                                            <select name="emp_name" class="form-control">
                                                     <?php
                                                    $job_title = set_value('emp_name');
                                                    
                                                    if (!empty($emp_list)) {
                                                        foreach ($emp_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->id;?>" <?php echo ($job_title == $list->id) ? 'selected' : ''?>><?php echo 
                                                                $list->first_name;?> <?php echo 
                                                                $list->middle_name;?> <?php echo 
                                                                $list->last_name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Leave Type</label>
                                        <div class="col-md-4">
                                            <select name="leave_type" class="form-control">
                                                     <?php
                                                    $job_title = set_value('leave_type');
                                                    
                                                    if (!empty($leave_list)) {
                                                        foreach ($leave_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->leave_id;?>" <?php echo ($job_title == $list->leave_id) ? 'selected' : ''?>><?php echo 
                                                                $list->leave_name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Days </label>
                                        <div class="col-md-4">
                                        <?php
                                            $code = array(
                                                'name' => 'day',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter Day  here',
                                                
                                                'value' => set_value('day')
                                            );
                                            echo form_input($code);
                                            echo form_error('day', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Start Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">

                                                <?php
                                                $date_end = array(
                                                    'name' => 'start_date',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'start_date',
                                                    'id' => '',
                                                    'value' => set_value('start_date', date('Y-m-d'))
                                                );
                                                echo form_input($date_end);
                                                ?>

                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('start_date', '<p class="text-danger">', '</p>');?>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">End Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">

                                                <?php
                                                $date_end = array(
                                                    'name' => 'end_date',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'end_date',
                                                    'id' => '',
                                                    'value' => set_value('end_date', date('Y-m-d'))
                                                );
                                                echo form_input($date_end);
                                                ?>

                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('end_date', '<p class="text-danger">', '</p>');?>
                                            
                                        </div>
                                    </div>
									
									<div class="form-group">
										<label class="control-label col-md-3"> Reason </label>
										<div class="col-md-4">
										<?php
                                            $code = array(
                                                'name' => 'reason',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter Reason  here',
                                                
                                                'value' => set_value('reason')
                                            );
                                            echo form_input($code);
                                            echo form_error('reason', '<p class="text-danger">', '</p>');
                                            ?>
										</div>
									</div>
									<div class="form-group">
                                        <label class="control-label col-md-3">Status</label>
                                        <div class="col-md-4">
                                            <select name="status" class="form-control">
                                                     <?php
                                                    $job_title = set_value('status');
                                                    
                                                    if (!empty($status_list)) {
                                                        foreach ($status_list as $list){
                                                            ?>
                                                                <option value="<?php echo $list->leave_status_id;?>" <?php echo ($job_title == $list->leave_status_id) ? 'selected' : ''?>><?php echo 
                                                                $list->status_name;?> </option>
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
											<a href="<?php echo base_url('leave/employee_list'); ?>">
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