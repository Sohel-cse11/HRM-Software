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
			Employee
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('employee/employees'); ?>">Employee</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('employee/edit'); ?>">Edit Employee</a>
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
								<i class="fa fa-gift"></i>Edit Employee
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
									<?php
                                    //echo validation_errors();
                                    $attributes = array('class' => 'form-horizontal form-row-seperated', 'id' => '');
                                    echo form_open('', $attributes);
                                    ?>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">First Name</label>
                                        <div class="col-md-4">

                                            <?php
                                            $first_name = array(
                                                'name' => 'first_name',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter first name here',
                                                'id' => '',
                                                'value' => set_value('first_name',!empty($content->first_name)? $content->first_name:'')
                                                );
                                            echo form_input($first_name);
                                            echo form_error('first_name', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Middle Name</label>
                                        <div class="col-md-4">

                                            <?php
                                            $middle_name = array(
                                                'name' => 'middle_name',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter middle name here',
                                                'id' => '',
                                                'value' => set_value('middle_name',!empty($content->middle_name)? $content->middle_name:'')
                                                );
                                            echo form_input($middle_name);
                                            echo form_error('middle_name', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Last Name</label>
                                        <div class="col-md-4">

                                            <?php
                                            $last_name = array(
                                                'name' => 'last_name',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter last name here',
                                                'id' => '',
                                                'value' => set_value('last_name',!empty($content->last_name)? $content->last_name:'')
                                                );
                                            echo form_input($last_name);
                                            echo form_error('last_name', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                        

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Date of Birth</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">

                                                <?php
                                                $birthday = array(
                                                    'name' => 'birthday',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'first_contact_date',
                                                    'id' => '',
                                                    'value' => set_value('birthday', date('Y-m-d'))
                                                );
                                                echo form_input($birthday);
                                                ?>

                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('birthday', '<p class="text-danger">', '</p>');?>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Blood Group</label>
                                        <div class="col-md-3">
                                            <?php
                                            $blood_group = array(
                                                '1' => 'A+',
                                                '2' => 'A-',
                                                '3' => 'B+',
                                                '4' => 'B-',
                                                '5' => 'AB+',
                                                '6' => 'AB-',
                                                '7' => 'O+',
                                                '8' => 'O-',
                                            );
                                            ?>

                                            <select name="blood" class="form-control">
                                                <option value="">Select Blood Group</option>
                                                <?php
                                                $BloodGroup_val = set_value('blood', $content->blood);

                                                if (!empty($blood_group)) {
                                                    foreach ($blood_group as $key => $list) {
                                                        ?>
                                                        <option value="<?php echo $key; ?>" <?php echo ($BloodGroup_val == $key) ? 'selected' : '' ?>><?php echo $list; ?></option>
                                                        <?php
                                                    }
                                                }

                                                echo form_error('blood', '<p class="text-danger">', '</p>');
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <?php
                                    /*
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Picture</label>
                                        <div class="col-md-9">
                                            <?php
                                            $Picture_field = array(
                                                'name' => 'Picture',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter Picture here',
                                                'id' => '',
                                                'value' => set_value('Picture', (!empty($content->Picture)) ? $content->Picture : '')
                                            );
                                            echo form_input($Picture_field);
                                            echo form_error('Picture', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                     */
                                    ?>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Gender</label>
                                        <div class="col-md-9">
                                            <?php
                                            $gender_value = set_value('gender', (!empty($content->gender)) ? $content->gender : '');

                                            $checked_male = ($gender_value == 0) ? 'checked' : '';
                                            $checked_female = ($gender_value == 1) ? 'checked' : '';
                                            ?>

                                            <label>
                                                <?php
                                                echo form_radio(array('name' => 'gender', 'checked' => $checked_male, 'value' => '0',));
                                                ?>
                                                Male   </label>

                                            <label>
                                                <?php
                                                echo form_radio(array('name' => 'gender', 'checked' => $checked_female, 'value' => '1',));
                                                ?>
                                                Female   </label>

                                            <?php
                                            echo form_error('gender', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3">Marital Status</label>
                                        <div class="col-md-3">
                                            <?php
                                            $marry_group = array(
                                                '1' => 'Married',
                                                '0' => 'Un-Married',
                                            );
                                            ?>

                                            <select name="marital_status" class="form-control">
                                                <option value="">Select Marital Status</option>
                                                <?php
                                                echo $marry_val = set_value('marital_status', $content->marital_status);

                                                if (!empty($marry_group)) {
                                                    foreach ($marry_group as $key => $list) {
                                                        ?>
                                                        <option value="<?php echo $key; ?>" <?php echo ($marry_val == $key) ? 'selected' : '' ?>><?php echo $list; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <?php echo form_error('marital_status', '<p class="text-danger">', '</p>');?>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3">National ID</label>
                                        <div class="col-md-4">
                                            <?php
                                            $NID = array(
                                                'name' => 'NID',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter National-ID here',
                                                'id' => '',
                                                 'value' => set_value('NID',!empty($content->NID)? $content->NID:'')
                                            );
                                            echo form_input($NID);
                                            echo form_error('NID', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Passport ID</label>
                                        <div class="col-md-4">
                                            <?php
                                            $passport_id = array(
                                                'name' => 'passport_id',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter Passport-ID here',
                                                'id' => '',
                                                'value' => set_value('passport_id',!empty($content->passport_id)? $content->passport_id:'')
                                            );
                                            echo form_input($passport_id);
                                            echo form_error('passport_id', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="control-label col-md-3">City</label>
                                        <div class="col-md-4">
                                            <?php
                                            $city = array(
                                                'name' => 'city',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter city  here',
                                                'id' => '',
                                                'value' => set_value('city',!empty($content->city)? $content->city:'')
                                            );
                                            echo form_input($city);
                                            echo form_error('city', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Postal Code</label>
                                        <div class="col-md-4">
                                            <?php
                                            $postal_code = array(
                                                'name' => 'postal_code',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter postal code here',
                                                'id' => '',
                                                'value' => set_value('postal_code',!empty($content->postal_code)? $content->postal_code:'')
                                            );
                                            echo form_input($postal_code);
                                            echo form_error('postal_code', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Mobile No</label>
                                        <div class="col-md-4">
                                            <?php
                                            $mobile_phone = array(
                                                'name' => 'mobile_phone',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter mobile phone here',
                                                'id' => '',
                                                'value' => set_value('mobile_phone',!empty($content->mobile_phone)? $content->mobile_phone:'')
                                            );
                                            echo form_input($mobile_phone);
                                            echo form_error('mobile_phone', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Working Phone No</label>
                                        <div class="col-md-4">
                                            <?php
                                            $work_phone = array(
                                                'name' => 'work_phone',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter work phone here',
                                                'id' => '',
                                                'value' => set_value('work_phone',!empty($content->work_phone)? $content->work_phone:'')
                                            );
                                            echo form_input($work_phone);
                                            echo form_error('work_phone', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Emergency Contact Person</label>
                                        <div class="col-md-4">
                                            <?php
                                            $EmergencyContactPerson_field = array(
                                                'name' => 'emergencycontactperson',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter Emergency contact person here',
                                                'id' => '',
                                                'value' => set_value('emergencycontactperson',!empty($content->emergencycontactperson)? $content->emergencycontactperson:'')
                                                );
                                            echo form_input($EmergencyContactPerson_field);
                                            echo form_error('Emergencycontactperson', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Emergency Contact No</label>
                                        <div class="col-md-4">
                                            <?php
                                            $EmergencyContactNo_field = array(
                                                'name' => 'emergencycontactno',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter Emergency contact no here',
                                                'id' => '',
                                                'value' => set_value('emergencycontactno',!empty($content->emergencycontactno)? $content->emergencycontactno:'')
                                            );
                                            echo form_input($EmergencyContactNo_field);
                                            echo form_error('emergencycontactno', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Private E-Mail</label>
                                        <div class="col-md-4">
                                            <?php
                                            $private_email = array(
                                                'name' => 'private_email',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter E-Mail here',
                                                'id' => '',
                                               'value' => set_value('private_email',!empty($content->private_email)? $content->private_email:'')
                                                );
                                            echo form_input($private_email);
                                            echo form_error('private_email', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Working E-Mail</label>
                                        <div class="col-md-4">
                                            <?php
                                            $work_email = array(
                                                'name' => 'work_email',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter E-Mail here',
                                                'id' => '',
                                                'value' => set_value('work_email',!empty($content->work_email)? $content->work_email:'')
                                                );
                                            echo form_input($work_email);
                                            echo form_error('work_email', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Present Address</label>
                                        <div class="col-md-4">
                                            <?php
                                            $present_address = array(
                                                'name' => 'present_address',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter Present Address here',
                                                'cols' => 3,
                                                'rows' => 5,
                                                'id' => '',
                                                 'value' => set_value('present_address',!empty($content->present_address)? $content->present_address:'')
                                                );
                                            echo form_textarea($present_address);
                                            echo form_error('present_address', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Permanent Address</label>
                                        <div class="col-md-4">
                                            <?php
                                            $permanent_address = array(
                                                'name' => 'permanent_address',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter Permanent Address here',
                                                'cols' => 3,
                                                'rows' => 5,
                                                'id' => '',
                                               'value' => set_value('permanent_address',!empty($content->permanent_address)? $content->permanent_address:'')
                                                );
                                            echo form_textarea($permanent_address);
                                            echo form_error('permanent_address', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label class="control-label col-md-3">Join Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">

                                                <?php
                                                $joined_date = array(
                                                    'name' => 'joined_date',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'first_contact_date',
                                                    'id' => '',
                                                    'value' => set_value('joined_date', date('Y-m-d'))
                                                );
                                                echo form_input($joined_date);
                                                ?>

                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('joined_date', '<p class="text-danger">', '</p>');?>
                                            
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Confirmation Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">

                                                <?php
                                                $confirmation_date = array(
                                                    'name' => 'confirmation_date',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'first_contact_date',
                                                    'id' => '',
                                                    'value' => set_value('confirmation_date', date('Y-m-d'))
                                                );
                                                echo form_input($confirmation_date);
                                                ?>

                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('confirmation_date', '<p class="text-danger">', '</p>');?>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Select Joining Department</label>
                                        <div class="col-md-3">
                                            <select name="department" class="form-control join-dept" id="">
                                                <?php
                                                $join_dept_val = set_value('department', $content->department);

                                                if (!empty($department)) {
                                                    foreach ($department as $val) {
                                                        ?>
                                                        <option value="<?php echo $val->DepartmentID; ?>" <?php echo ($join_dept_val == $val->DepartmentID) ? 'selected' : '' ?>>
                                                            <?php echo $val->DepartmentName; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <?php echo form_error('department', '<p class="text-danger">', '</p>');?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Select Pay Grade</label>
                                        <div class="col-md-3">
                                            <select name="pay_grade" class="form-control join-dept" id="">
                                                <?php
                                                $join_desg_val = set_value('pay_grade', $content->pay_grade);

                                                if (!empty($paygrade)) {
                                                    foreach ($paygrade as $val) {
                                                        ?>
                                                        <option value="<?php echo $val->p_id; ?>" <?php echo ($join_desg_val == $val->p_id) ? 'selected' : '' ?>>
                                                            <?php echo $val->name; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <?php echo form_error('pay_grade', '<p class="text-danger">', '</p>');?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Designation</label>
                                        <div class="col-md-3">
                                            <select name="job_title" class="form-control join-dept" id="">
                                                <?php
                                                $join_job_cat_val = set_value('job_title', $content->job_title);

                                                if (!empty($jobtitle)) {
                                                    foreach ($jobtitle as $val) {
                                                        ?>
                                                        <option value="<?php echo $val->jt_id; ?>" <?php echo ($join_job_cat_val == $val->jt_id) ? 'selected' : '' ?>>
                                                            <?php echo $val->jt_name; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <?php echo form_error('job_title', '<p class="text-danger">', '</p>');?>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="control-label col-md-3">Supervisor</label>
                                        <div class="col-md-3">
                                            <select name="supervisor" class="form-control join-dept" id="">
                                                <?php
                                                $join_job_cat_val = set_value('supervisor', $content->supervisor);

                                                if (!empty($supervisor)) {
                                                    foreach ($supervisor as $val) {
                                                        ?>
                                                        <option value="<?php echo $val->id; ?>" <?php echo ($join_job_cat_val == $val->id) ? 'selected' : '' ?>>
                                                            <?php echo $val->first_name; ?> <?php echo $val->middle_name; ?> <?php echo $val->last_name; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <?php echo form_error('supervisor', '<p class="text-danger">', '</p>');?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="control-label col-md-3">Profile Image</label>
                                            <div class="col-md-9">
                                                <?php
                                                $profileimage = array(
                                                    'name' => 'profileimage', 
                                                    'class' => 'form-control', 
                                                    'placeholder' => '', 
                                                    'id' => '', 
                                                    'value' => set_value('')
                                                );
                                                echo form_upload($profileimage);
                                                echo form_error('profileimage', '<p class="text-danger">', '</p>');
                                                ?>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Employee Level</label>
                                        <div class="col-md-4">
                                            <select name="employee_level" class="form-control">
                                                     <?php
                                                    $status = set_value('employee_level');
                                                    
                                                    if (!empty($userrole)) {
                                                        foreach ($userrole as $list){
                                                            ?>
                                                                <option value="<?php echo $list->id;?>" <?php echo ($status == $list->id) ? 'selected' : ''?>><?php echo 
                                                                $list->name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Status</label>
                                        <div class="col-md-4">
                                            <select name="employee_status" class="form-control">
                                                     <?php
                                                    $status = set_value('employee_status');
                                                    
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
											<a href="<?php echo base_url('employee/employees'); ?>">
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