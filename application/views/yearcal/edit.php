<?php $this->load->view('common/header'); ?>

<?php $this->load->view('common/sidebar'); ?>

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">

            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?php echo base_url('dashboard'); ?>">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo base_url('yearcal'); ?>">Year Calendar</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo base_url('yearcal/edit' . $content->YearDayID); ?>">Edit</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        
                        <?php
                        if ($this->session->flashdata('error')) {
                        ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>

                        <?php } ?>
                        
                        <div class="tabbable tabbable-custom boxless tabbable-reversed">

                            <div class="tab-content">

                                <div class="portlet light bordered form-fit">

                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM-->

                                        <?php
                                        $attributes = array('class' => 'form-horizontal form-row-seperated', 'id' => '');
                                        echo form_open('', $attributes);
                                        ?>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date:</label>
                                            <div class="col-md-4">
                                                <p class="form-control-static"><?php echo $content->YearDay;?></p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Day Name:</label>
                                            <div class="col-md-4">
                                                <p class="form-control-static"><?php echo date('l', strtotime($content->YearDay));?></p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Select Day Type:</label>
                                            <div class="col-md-4">
                                                <select name="DayTypeID" class="form-control" id="DayTypeID">
                                                    <?php
                                                    $daytype_list_val = set_value('DayTypeID', $content->DayTypeID);

                                                    if (!empty($daytype_list)) {
                                                        foreach ($daytype_list as $val) {
                                                            ?>
                                                            <option value="<?php echo $val->DayTypeID; ?>" data-IsHoliday="<?php echo $val->IsHolyDay;?>" <?php echo ($daytype_list_val == $val->DayTypeID) ? 'selected' : '' ?>>
                                                                <?php echo $val->Description; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                
                                                <input type="hidden" name="IsHoliday" id="IsHoliday" value="<?php echo $content->IsHoliday;?>" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green"><i class="fa fa-pencil"></i> Save</button>
                                                    <a href="<?php echo base_url('yearcal'); ?>"><button type="button" class="btn default">Cancel</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php
                                        echo form_close();
                                        ?>
                                        <!-- END FORM-->
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
            </div>
        </div>
        <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->

<div class="page-footer">
            <div class="page-footer-inner">
                <?php echo date('Y');?> @ Developed By Sohel Rana
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
       
        <?php 
        echo script_tag('assets/global/plugins/jquery.min.js');
        echo script_tag('assets/global/plugins/jquery-migrate.min.js');  
        echo script_tag('assets/global/plugins/jquery-ui/jquery-ui.min.js');
        echo script_tag('assets/global/plugins/bootstrap/js/bootstrap.min.js');
        echo script_tag('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');
        echo script_tag('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');
        echo script_tag('assets/global/plugins/jquery.blockui.min.js');
        echo script_tag('assets/global/plugins/jquery.cokie.min.js');
        echo script_tag('assets/global/plugins/uniform/jquery.uniform.min.js');
        echo script_tag('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');
        echo script_tag('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js');
        ?>
        <?php 
        echo script_tag('assets/global/plugins/select2/select2.min.js');
        echo script_tag('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');
        echo script_tag('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js');
        echo script_tag('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js');
        echo script_tag('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js');
        ?>
        
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/pages/scripts/table-managed.js"></script>
<script>
    jQuery(document).ready(function() {       
       Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
    QuickSidebar.init(); // init quick sidebar
    Demo.init(); // init demo features
       TableManaged.init();
    });
</script>

    <script type="text/javascript">
        jQuery('#DayTypeID').select2();
        
        jQuery('[name=DayTypeID]').change( function(){
            var IsHoliday = jQuery(this).find(':selected').attr('data-IsHoliday');
            jQuery('#IsHoliday').val(IsHoliday);
        });
    </script>
    
</body>
</html>  
