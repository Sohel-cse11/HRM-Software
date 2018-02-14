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
			Edit Employee Expense 
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
                    <li>
                  <a href="<?php echo base_url('expense/employee_expense'); ?>">Employee Expense</a>
					
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
								<i class="fa fa-gift"></i>Edit Employee Expense
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
                                        <div class="col-md-3">
                                            <select name="employee" class="form-control join-dept" id="">
                                                <?php
                                                $join_job_cat_val = set_value('employee', $content->employee);

                                                if (!empty($employees)) {
                                                    foreach ($employees as $val) {
                                                        ?>
                                                        <option value="<?php echo $val->id; ?>" <?php echo ($join_job_cat_val == $val->id) ? 'selected' : '' ?>>
                                                            <?php echo $val->first_name; ?> <?php echo $val->middle_name; ?> <?php echo $val->last_name; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <?php echo form_error('employee', '<p class="text-danger">', '</p>');?>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="control-label col-md-3"> Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">
                                                <?php
                                                $expense_date = array(
                                                    'name' => 'expense_date',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'first_contact_date',
                                                    'id' => '',
                                                    'value' => set_value('expense_date', date('Y-m-d'))
                                                );
                                                echo form_input($expense_date);
                                                ?>
                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('expense_date', '<p class="text-danger">', '</p>');?>   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Payment Method</label>
                                        <div class="col-md-3">
                                            <select name="payment_method" class="form-control join-dept" id="">
                                                <?php
                                                $join_job_cat_val = set_value('payment_method', $content->payment_method);

                                                if (!empty($method)) {
                                                    foreach ($method as $val) {
                                                        ?>
                                                        <option value="<?php echo $val->id; ?>" <?php echo ($join_job_cat_val == $val->id) ? 'selected' : '' ?>>
                                                            <?php echo $val->method_name; ?> 
                                                        </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <?php echo form_error('payment_method', '<p class="text-danger">', '</p>');?>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-md-3">Transaction/Ref No</label>
                                        <div class="col-md-4">
                                            <?php
                                            $transaction_no = array(
                                                'name' => 'transaction_no',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter transaction_no here',
                                                'id' => '',
                                               'value' => set_value('transaction_no',(!empty($content->transaction_no)) ? $content->transaction_no : '')
                                            );
                                            echo form_input($transaction_no);
                                            echo form_error('transaction_no', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Payee</label>
                                        <div class="col-md-4">
                                            <?php
                                            $payee = array(
                                                'name' => 'payee',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter payee here',
                                                'id' => '',
                                                'value' => set_value('payee',(!empty($content->payee)) ? $content->payee : '')
                                            );
                                            echo form_input($payee);
                                            echo form_error('payee', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-md-3">Expense Category</label>
                                        <div class="col-md-3">
                                            <select name="category" class="form-control join-dept" id="">
                                                <?php
                                                $join_job_cat_val = set_value('category', $content->category);

                                                if (!empty($category)) {
                                                    foreach ($category as $val) {
                                                        ?>
                                                        <option value="<?php echo $val->id; ?>" <?php echo ($join_job_cat_val == $val->id) ? 'selected' : '' ?>>
                                                            <?php echo $val->category_name; ?> 
                                                        </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <?php echo form_error('category', '<p class="text-danger">', '</p>');?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Notes</label>
                                        <div class="col-md-4">
                                            <?php
                                            $notes = array(
                                                'name' => 'notes',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter notes here',
                                                'id' => '',
                                                'cols' => 3,
                                                'rows' => 5,
                                                'value' => set_value('notes',(!empty($content->notes)) ? $content->notes : '')
                                                );
                                            echo form_textarea($notes);
                                            echo form_error('notes', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-md-3">Amount</label>
                                        <div class="col-md-4">
                                            <?php
                                            $amount = array(
                                                'name' => 'amount',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter amount here',
                                                'id' => '',
                                                'value' => set_value('amount',(!empty($content->notes)) ? $content->amount : '')
                                                );
                                            echo form_input($amount);
                                            echo form_error('amount', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Currency</label>
                                        <div class="col-md-3">
                                            <select name="currency" class="form-control join-dept" id="">
                                                <?php
                                                $join_job_cat_val = set_value('currency', $content->currency);

                                                if (!empty($currency)) {
                                                    foreach ($currency as $val) {
                                                        ?>
                                                        <option value="<?php echo $val->id; ?>" <?php echo ($join_job_cat_val == $val->id) ? 'selected' : '' ?>>
                                                            <?php echo $val->code; ?> 
                                                        </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <?php echo form_error('currency', '<p class="text-danger">', '</p>');?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Status</label>
                                        <div class="col-md-3">
                                            <?php
                                            $status_group = array(
                                                '0' => 'Pending',
                                                '1' => 'Approved',
                                                '2' => 'Rejected',   
                                            );
                                            ?>
                                            <select name="status" class="form-control">
                                                <option value="">Select Status</option>
                                                <?php
                                                echo $status = set_value('status', $content->status);

                                                if (!empty($status_group)) {
                                                    foreach ($status_group as $key => $list) {
                                                        ?>
                                                        <option value="<?php echo $key; ?>" <?php echo ($status == $key) ? 'selected' : '' ?>><?php echo $list; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <?php echo form_error('status', '<p class="text-danger">', '</p>');?>
                                        </div>
                                    </div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-pencil"></i>Save</button>
											<a href="<?php echo base_url('expense/employee_expense'); ?>">
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