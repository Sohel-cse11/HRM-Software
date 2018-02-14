<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/sidebar'); ?>

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
                        <a href="<?php echo base_url('offtime'); ?>">Office Time</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo base_url('offtime/edit/' . $content->OfficeTimingID); ?>">Edit</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable tabbable-custom boxless tabbable-reversed">

                        <div class="tab-content">

                            <div class="portlet light bordered form-fit">
                                <div class="portlet-title">

                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->

                                    <?php
                                    $attributes = array('class' => 'form-horizontal form-row-seperated', 'id' => '');
                                    echo form_open('', $attributes);
                                    //echo validation_errors();
                                    ?>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Selected Day Type </label>
                                        <div class="col-md-3">
                                            <p class="form-control-static">
                                                <strong><?php echo $selected_daytype->Description;?></strong>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">In Time</label>
                                        <div class="col-md-4">
                                            <?php
                                            $InTime_field = array(
                                                'name' => 'InTime',
                                                'class' => 'form-control timepicker timepicker-24',
                                                'placeholder' => 'Enter In-Time here',
                                                'id' => '',
                                                'value' => set_value('InTime', (!empty($content->InTime)) ? $content->InTime : '')
                                                );
                                            echo form_input($InTime_field);
                                            echo form_error('InTime', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                        <span class="help-inline"> (24 hr format)</span>
                                    </div> 
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Considerable In Time</label>
                                        <div class="col-md-4">
                                            <?php
                                            $ConsiderableInTime_field = array(
                                                'name' => 'ConsiderableInTime',
                                                'class' => 'form-control timepicker timepicker-24',
                                                'placeholder' => 'Enter Considerable In-Time here',
                                                'id' => '',
                                                'value' => set_value('ConsiderableInTime', (!empty($content->ConsiderableInTime)) ? $content->ConsiderableInTime : '')
                                                );
                                            echo form_input($ConsiderableInTime_field);
                                            echo form_error('ConsiderableInTime', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                        <span class="help-inline"> (24 hr format)</span>
                                    </div> 


                                   <div class="form-group">
                                        <label class="control-label col-md-3">Out Time</label>
                                        <div class="col-md-4">
                                            <?php
                                            $OutTime_field = array(
                                                'name' => 'OutTime',
                                                'class' => 'form-control timepicker timepicker-24',
                                                'placeholder' => 'Enter Out-Time here',
                                                'id' => '',
                                                'value' => set_value('OutTime', (!empty($content->OutTime)) ? $content->OutTime : '')
                                                );
                                            echo form_input($OutTime_field);
                                            echo form_error('OutTime', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                        <span class="help-inline"> (24 hr format)</span>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="control-label col-md-3 ">Considerable Out Time</label>
                                        <div class="col-md-4">
                                            <?php
                                            $ConsiderableOutTime_field = array(
                                                'name' => 'ConsiderableOutTime',
                                                'class' => 'form-control timepicker timepicker-24',
                                                'placeholder' => 'Enter Considerable Out-Time here',
                                                'id' => '',
                                                'value' => set_value('ConsiderableOutTime', (!empty($content->ConsiderableOutTime)) ? $content->ConsiderableOutTime : '')
                                                );
                                            echo form_input($ConsiderableOutTime_field);
                                            echo form_error('ConsiderableOutTime', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                        <span class="help-inline"> (24 hr format)</span>
                                    </div>

                                  <div class="form-group">
                                        <label class="control-label col-md-3">Remarks</label>
                                        <div class="col-md-4">
                                            <?php
                                            $remarks_field = array(
                                                'name' => 'Remarks',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter Remarks here',
                                                'id' => '',
                                                 'cols' => 3,
                                                'rows' => 5,
                                                'value' => set_value('Remarks',(!empty($content->Remarks)) ? $content->Remarks : '')
                                                );
                                            echo form_textarea($remarks_field);
                                            echo form_error('Remarks', '<p class="text-danger">', '</p>');
                                            ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green"><i class="fa fa-pencil"></i> Save</button>
                                                <a href="<?php echo base_url('offtime'); ?>"> <button type="button" class="btn default">Cancel</button></a>
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
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="<?php echo script_tag('assets/global/plugins/respond.min.js');?>></script>
        <script src="<?php echo script_tag('assets/global/plugins/excanvas.min.js');?>"></script>
        <![endif]-->
        <?php 
        echo script_tag('assets/global/plugins/jquery.min.js');
        echo script_tag('assets/global/plugins/jquery-migrate.min.js');
        
        // <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
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
        <!-- END CORE PLUGINS -->

        <?php /*

        <!-- END PAGE LEVEL PLUGINS -->
        */ ?>

        <?php 
        echo script_tag('assets/global/plugins/select2/select2.min.js');
        echo script_tag('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');
        echo script_tag('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js');
        echo script_tag('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js');
        echo script_tag('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js');
        ?>
        
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <?php
        echo script_tag('assets/global/scripts/metronic.js');
        echo script_tag('assets/admin/layout/scripts/layout.js');
        echo script_tag('assets/admin/layout/scripts/quick-sidebar.js');
        echo script_tag('assets/admin/layout/scripts/demo.js');
        echo script_tag('assets/admin/pages/scripts/index.js');
        echo script_tag('assets/admin/pages/scripts/tasks.js');
        echo script_tag('assets/admin/pages/scripts/table-managed.js');
        ?>
        
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function () {
                Metronic.init(); // init metronic core componets
                Layout.init(); // init layout
                // QuickSidebar.init(); // init quick sidebar
                Demo.init(); // init demo features
                Index.init();
                Index.initDashboardDaterange();
                // Index.initJQVMAP(); // init index page's custom scripts
                // Index.initCalendar(); // init index page's custom scripts
                // Index.initCharts(); // init index page's custom scripts
                // Index.initChat();
                // Index.initMiniCharts();
                // Tasks.initDashboardWidget();
                // TableManaged.init();
                // MapsGoogle.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
        </body>
        </html>