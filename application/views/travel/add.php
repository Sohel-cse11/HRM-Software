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
            Add Travel
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?php echo base_url('dashboard'); ?>">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo base_url('travel'); ?>">Travel</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo base_url('travel/add'); ?>">Add Travel</a>
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
                                <i class="fa fa-gift"></i>Add Travel
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                                   <?php
                                    $attributes = array('class' => 'form-horizontal form-row-seperated', 'id' => '');
                                    echo form_open('', $attributes);
                                    ?>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Select Employee Name</label>
                                        <div class="col-md-3">
                                            <select name="employee" class="form-control join-dept" id="">
                                                <?php
                                                $employee = set_value('employee', $content->employee);

                                                if (!empty($employee_list)) {
                                                    foreach ($employee_list as $val) {
                                                        ?>
                                                        <option value="<?php echo $val->id; ?>" <?php echo ($employee == $val->id) ? 'selected' : '' ?>>
                                                            <?php echo $val->first_name;?>  <?php echo $val->middle_name;?>  <?php echo $val->last_name;?>
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
                                        <label class="control-label col-md-3">Purpose of Travel</label>
                                        <div class="col-md-4">
                                            <?php
                                            $purpose = array(
                                                'name' => 'purpose',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter Purpose here',
                                                'id' => '',
                                                'cols' => 3,
                                                'rows' => 5,
                                                'value' => set_value('purpose')
                                                );
                                            echo form_textarea($purpose);
                                            echo form_error('purpose', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Travel From</label>
                                        <div class="col-md-4">
                                            <?php
                                            $travel_from = array(
                                                'name' => 'travel_from',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter travel from here',
                                                'id' => '',
                                                'value' => set_value('travel_from')
                                            );
                                            echo form_input($travel_from);
                                            echo form_error('travel_from', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Travel To</label>
                                        <div class="col-md-4">
                                            <?php
                                            $travel_to = array(
                                                'name' => 'travel_to',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter travel to here',
                                                'id' => '',
                                                'value' => set_value('travel_to')
                                            );
                                            echo form_input($travel_to);
                                            echo form_error('travel_to', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Travel Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">
                                                <?php
                                                $travel_date = array(
                                                    'name' => 'travel_date',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'first_contact_date',
                                                    'id' => '',
                                                    'value' => set_value('travel_date', date('Y-m-d'))
                                                );
                                                echo form_input($travel_date);
                                                ?>
                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('travel_date', '<p class="text-danger">', '</p>');?>   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Return Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">
                                                <?php
                                                $return_date = array(
                                                    'name' => 'return_date',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'first_contact_date',
                                                    'id' => '',
                                                    'value' => set_value('return_date', date('Y-m-d'))
                                                );
                                                echo form_input($return_date);
                                                ?>
                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('return_date', '<p class="text-danger">', '</p>');?>   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Details of Travel</label>
                                        <div class="col-md-4">
                                            <?php
                                            $details = array(
                                                'name' => 'details',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter details here',
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
                                        <label class="control-label col-md-3">Funding</label>
                                        <div class="col-md-4">
                                            <?php
                                            $funding = array(
                                                'name' => 'funding',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter funding here',
                                                'id' => '',
                                                'value' => set_value('funding')
                                            );
                                            echo form_input($funding);
                                            echo form_error('funding', '<p class="text-danger">', '</p>');
                                            ?>
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
                                            <a href="<?php echo base_url('travel'); ?>">
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