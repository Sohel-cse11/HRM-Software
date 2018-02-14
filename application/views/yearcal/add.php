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
                        <a href="<?php echo base_url('yearcal/add'); ?>">Add</a>
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
                            <div class="alert alert-warning alert-dismissable">
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
                                        $year_array = array();
                                        if (!empty($all_exist_year)) {

                                            foreach ($all_exist_year as $val) {
                                                $year_array[$val->year] = 'year';
                                            }
                                        }
                                        
                                        $attributes = array('class' => 'form-horizontal form-row-seperated', 'id' => '');
                                        echo form_open('', $attributes);
                                        ?>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Select Year</label>
                                            <div class="col-md-2">
                                                <select name="year" class="form-control" id="select_year">
                                                    <?php
                                                    $starting_year = date('Y');
                                                    $ending_year = date('Y', strtotime('+10 year'));
                                                    $current_year = date('Y');
                                                    for ($starting_year; $starting_year <= $ending_year; $starting_year++) {
                                                        echo '<option value="' . $starting_year . '"';
//                                                        if ($starting_year == $current_year) {
//                                                            echo ' selected="selected"';
//                                                        }
                                                        if (isset($year_array[$starting_year])) {
                                                            echo ' disabled="disabled"';
                                                        }
                                                        echo ' >' . $starting_year . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                
                                                <?php echo form_error('year', '<p class="text-danger">', '</p>');?>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3">Select Week Ends</label>
                                            <div class="input-group">
                                                <div class="icheck-inline">
                                                    <input name="values[]" id="checkboxes-0" value="Friday" type="checkbox">
                                                    Friday

                                                    <input name="values[]"  id="checkboxes-1" value="Saturday" type="checkbox">
                                                    Saturday

                                                    <input name="values[]"  id="checkboxes-2" value="Sunday" type="checkbox">
                                                    Sunday


                                                    <input name="values[]"  id="checkboxes-3" value="Monday" type="checkbox">
                                                    Monday

                                                    <input name="values[]"  id="checkboxes-4" value="Tuesday" type="checkbox">
                                                    Tuesday

                                                    <input name="values[]"  id="checkboxes-5" value="Wednesday" type="checkbox">
                                                    Wednesday

                                                    <input name="values[]"  id="checkboxes-6" value="Thursday" type="checkbox">
                                                    Thursday
                                                </div>
                                            </div>
                                            
                                            <?php echo form_error('values', '<p class="text-danger">', '</p>');?>
                                            
                                        </div>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green"><i class="fa fa-pencil"></i> Next</button>
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
    jQuery(document).ready(function () {

        //jQuery("#select_year").select2();

    });
</script>
 </body>
 </html>
