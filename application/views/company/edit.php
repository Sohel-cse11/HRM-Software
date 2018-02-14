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
            Edit Company
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?php echo base_url('dashboard'); ?>">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo base_url('company'); ?>"> Company</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo base_url('company/edit'); ?>">Edit Company</a>
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
                                <i class="fa fa-gift"></i>Edit Company
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
                                        <label class="control-label col-md-3">Company Name</label>
                                        <div class="col-md-4">

                                            <?php
                                            $CompanyName_field = array(
                                                'name' => 'CompanyName',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter company name here',
                                                'id' => '',
                                                'value' => set_value('CompanyName', (!empty($content->CompanyName)) ? $content->CompanyName : '')
                                            );
                                            echo form_input($CompanyName_field);
                                            echo form_error('CompanyName', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Short Name</label>
                                        <div class="col-md-4">

                                            <?php
                                            $ShortName_field = array(
                                                'name' => 'ShortName',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter short name here',
                                                'id' => '',
                                                'value' => set_value('ShortName', (!empty($content->ShortName)) ? $content->ShortName : '')
                                            );
                                            echo form_input($ShortName_field);
                                            echo form_error('ShortName', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Address</label>
                                        <div class="col-md-4">
                                            <?php
                                            $Address_field = array(
                                                'name' => 'Address',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter address here',
                                                'cols' => 3,
                                                'rows' => 5,
                                                'id' => '',
                                                'value' => set_value('Address', (!empty($content->Address)) ? $content->Address : '')
                                            );
                                            echo form_textarea($Address_field);
                                            echo form_error('Address', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Contact Person</label>
                                        <div class="col-md-4">
                                            <?php
                                            $ContactPerson_field = array(
                                                'name' => 'ContactPerson',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter contact person name here',
                                                'id' => '',
                                                'value' => set_value('ContactPerson', (!empty($content->ContactPerson)) ? $content->ContactPerson : '')
                                            );
                                            echo form_input($ContactPerson_field);
                                            echo form_error('ContactPerson', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Contact No</label>
                                        <div class="col-md-4">
                                            <?php
                                            $ContactNo = array(
                                                'name' => 'ContactNo',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter contact no here',
                                                'id' => '',
                                                'value' => set_value('ContactNo', (!empty($content->ContactNo)) ? $content->ContactNo : '')
                                            );
                                            echo form_input($ContactNo);
                                            echo form_error('ContactNo', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email</label>
                                        <div class="col-md-4">
                                            <?php
                                            $Email_field = array(
                                                'name' => 'Email',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter email here',
                                                'id' => '',
                                                'value' => set_value('Email', (!empty($content->Email)) ? $content->Email : '')
                                            );
                                            echo form_input($Email_field);
                                            echo form_error('Email', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Date Range</label>
                                        <div class="col-md-4">
                                            <div class="input-group input-large date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">

                                                <?php
                                                $FromActiveDate_field = array(
                                                    'name' => 'FromActiveDate',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'From date',
                                                    'id' => '',
                                                    'value' => set_value('FromActiveDate', (!empty($content->FromActiveDate) && $content->FromActiveDate != '0000-00-00') ? $content->FromActiveDate : '')
                                                );
                                                echo form_input($FromActiveDate_field);
                                                //echo form_error('FromActiveDate', '<p class="text-danger">', '</p>');
                                                ?>

                                                <span class="input-group-addon"> to </span>
                                                <?php
                                                $ToActiveDate_field = array(
                                                    'name' => 'ToActiveDate',
                                                    'class' => 'form-control date-picker',
                                                    'placeholder' => 'To date',
                                                    'id' => '',
                                                    'value' => set_value('ToActiveDate', (!empty($content->ToActiveDate) && $content->ToActiveDate != '0000-00-00') ? $content->ToActiveDate : ''));
                                                echo form_input($ToActiveDate_field);
                                                //echo form_error('ToActiveDate', '<p class="text-danger">', '</p>');
                                                ?>

                                            </div>
                                            <!-- /input-group -->
                                            <span class="help-block">
                                                Select date range </span>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3">Remarks</label>
                                        <div class="col-md-4">
                                            <?php
                                            $Remarks_field = array(
                                                'name' => 'Remarks',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter remarks here',
                                                'id' => '',
                                                'cols' => 3,
                                                'rows' => 5,
                                                'value' => set_value('Remarks', (!empty($content->Remarks)) ? $content->Remarks : '')
                                            );
                                            echo form_textarea($Remarks_field);
                                            echo form_error('Remarks', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>

                                    <!--</div>-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Zone</label>
                                        <div class="col-md-4">
                                            <select name="ZoneID" class="form-control">
                                                <option value="">Select A zone Here</option>
                                                <?php
                                                $this->zone_model->getTreeCategory(0, 0, (!empty($content->ZoneID)) ? $content->ZoneID : NULL); 
                               
                                                ?>
                                            </select>
                                            <?php echo form_error('ZoneID', '<p class="text-danger">', '</p>'); ?>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3">Parent Company</label>
                                        <div class="col-md-4">
                                            <select name="ParentCompanyID" class="form-control">
                                                <option value="">Select A Parent Company Here </option>
                                                <?php
                                                $this->company_model->getTreeCategory(0, 0, (!empty($content->ParentCompanyID)) ? $content->ParentCompanyID : NULL);
                                               
                                                ?>
                                            </select>
                                            <?php  echo form_error('ParentCompanyID', '<p class="text-danger">', '</p>'); ?>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3">Software Owner</label>
                                        <div class="col-md-4">
                                            <?php
                                            $IsOwner_array = array(
                                                '1' => 'Yes',
                                                '0' => 'No',
                                            );
                                            ?>
                                            <select name="IsOwner" class="form-control">
                                                <?php
                                                $IsOwner_val = set_value('IsOwner', (!empty($content->IsOwner)) ? $content->IsOwner : '');

                                                if (!empty($IsOwner_array)) {
                                                    foreach ($IsOwner_array as $key => $list) {
                                                        ?>
                                                        <option value="<?php echo $key; ?>" <?php echo ($IsOwner_val == $key) ? 'selected' : '' ?>><?php echo $list; ?></option>
                                                        <?php
                                                    }
                                                }

                                                echo form_error('IsOwner', '<p class="text-danger">', '</p>');
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green"><i class="fa fa-pencil"></i>Save</button>
                                            <a href="<?php echo base_url('company'); ?>">
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