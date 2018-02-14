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
                        <a href="<?php echo base_url('yearcal'); ?>">Year Calendar</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo base_url('yearcal/add'); ?>">Add Weekends</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabbable tabbable-custom boxless tabbable-reversed">

                            <div class="tab-content">

                                <div class="portlet box grey-cascade border-top">

                                    <div class="portlet-body">

                                        <?php
                                        $attributes = array('class' => 'form-horizontal form-row-seperated', 'id' => '');
                                        echo form_open('yearcal/add_holiday', $attributes);
                                        echo validation_errors();
                                        ?>
                                        <!-- BEGIN TABLE-->

                                        <table class="table table-striped table-bordered table-hover" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th style="width: 1%;">SL</th>
                                                    <th class="col-md-2">Select Dates</th>
                                                    <th>Day</th>
                                                    <th>Holiday</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (!empty($holiday_list)) {
                                                    $sl = 1;
                                                    foreach ($holiday_list as $list) {
                                                        if($list['HolidayTypeID'] == 3) {
                                                            ?>
                                                            <tr class="odd gradeX">
                                                                <td><?php echo $sl;?></td>
                                                                <td><?php echo $list['YearDay'];?></td>
                                                                <td><?php echo $list['DayName'];?></td>
                                                                
                                                                <td>
                                                                    <input type="hidden" name="HolidayTypeDate[]" value="<?php echo $list['YearDay']?>" class="hidden" />
                                                                    
                                                                    <select name="HolidayTypeDateID[]" class="form-control">
                                                                        <?php
                                                                        $daytype_list_val = set_value('HolidayTypeDateID', 3); // 3 = Govt Holiday

                                                                        if (!empty($daytype_list)) {
                                                                            foreach ($daytype_list as $val) {
                                                                                ?>
                                                                                <option value="<?php echo $val->DayTypeID; ?>" <?php echo ($daytype_list_val == $val->DayTypeID) ? 'selected' : '' ?>>
                                                                                    <?php echo $val->Description; ?>
                                                                                </option>
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </td>
                                                                                
                                                            </tr>
                                                            <?php
                                                            $sl++;
                                                        }
                                                    ?>
                                                            
                                                            <input type="text" name="YearDay[]" value="<?php echo $list['YearDay'];?>" class="hidden" />
                                                            <input type="text" name="DayName[]" value="<?php echo $list['DayName'];?>" class="hidden" />
                                                            <input type="text" name="IsHoliday[]" value="<?php echo $list['IsHoliday'];?>" class="hidden" />
                                                            <input type="text" name="HolidayTypeID[]" value="<?php echo $list['HolidayTypeID'];?>" class="hidden" />

                                                        <?php
                                                    }
                                                }
                                                
                                                
                                                //dd($holiday_list);
                                                
                                                ?>
                                            </tbody>
                                        </table>
                                        <!-- END TABLE-->

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-5 col-md-9">
                                                    <a href="javascript: history.go(-1);" class="btn default button-previous"><i class="m-icon-swapleft"></i> Back </a>
                                                    <button class="btn blue button-next" type="submit"> Submit <i class="m-icon-swapright m-icon-white"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <?php echo form_close();?>
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

<script type="text/javascript">
    jQuery(document).ready(function () {
        
        jQuery('#myTable').DataTable({
            "pageLength": 365,
            "lengthMenu": [[365, -1], [365, "All"]]
        });
        
        jQuery('.date-picker').datepicker({
            orientation: "left",
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
    
    });
</script>
 </body>
 </html>
