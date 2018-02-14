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
            Edit Client
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?php echo base_url('dashboard'); ?>">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo base_url('project/client_index'); ?>">Client</a>
                        
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
                                <i class="fa fa-gift"></i>Edit Client
                            </div>
                           
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                                   <?php
                                    $attributes = array('class' => 'form-horizontal form-row-seperated', 'id' => '');
                                    echo form_open('', $attributes);
                                    ?>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Clients Name </label>
                                        <div class="col-md-4">
                                        <?php
                                            $name = array(
                                                'name' => 'name',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter clients name here',
                                                'id' => '',
                                                'value' => set_value('name',!empty($content->name)? $content->name:'')
                                            );
                                            echo form_input($name);
                                            echo form_error('name', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Details </label>
                                        <div class="col-md-4">
                                        <?php
                                            $details = array(
                                                'name' => 'details',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter details here',
                                                'id' => '',
                                                'value' => set_value('details',!empty($content->details)? $content->details:'')
                                            );
                                            echo form_input($details);
                                            echo form_error('details', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">First Contact Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">

                                                <?php
                                                $first_contact_date = array(
                                                    'name' => 'first_contact_date',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'first_contact_date',
                                                    'id' => '',
                                                    'value' => set_value('first_contact_date', date('Y-m-d'))
                                                );
                                                echo form_input($first_contact_date);
                                                ?>

                                                <span class="input-group-addon">  </span>
                                            </div>
                                            <!-- /input-group -->
                                            <?php echo form_error('first_contact_date', '<p class="text-danger">', '</p>');?>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Address </label>
                                        <div class="col-md-4">
                                        <?php
                                            $address = array(
                                                'name' => 'address',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter address  here',
                                                'id' => '',
                                                'value' => set_value('address',!empty($content->address)? $content->address:'')
                                            );
                                            echo form_input($address);
                                            echo form_error('address', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Contact No </label>
                                        <div class="col-md-4">
                                        <?php
                                            $contact = array(
                                                'name' => 'contact_number',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter contact number here',
                                                'id' => '',
                                                 'value' => set_value('contact_number',!empty($content->contact_number)? $content->contact_number:'')
                                            );
                                            echo form_input($contact);
                                            echo form_error('contact_number', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Contact Email </label>
                                        <div class="col-md-4">
                                        <?php
                                            $contact_email = array(
                                                'name' => 'contact_email',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter contact email  here',
                                                'id' => '',
                                               'value' => set_value('contact_email',!empty($content->contact_email)? $content->contact_email:'')
                                            );
                                            echo form_input($contact_email);
                                            echo form_error('contact_email', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Company url </label>
                                        <div class="col-md-4">
                                        <?php
                                            $company_url = array(
                                                'name' => 'company_url',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter company url  here',
                                                'id' => '',
                                                'value' => set_value('company_url',!empty($content->company_url)? $content->company_url:'')
                                            );
                                            echo form_input($company_url);
                                            echo form_error('company_url', '<p class="text-danger">', '</p>');
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
                                            <button type="submit" class="btn green"><i class="fa fa-pencil"></i>Submit</button>
                                            <a href="<?php echo base_url('project/client_index'); ?>">
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