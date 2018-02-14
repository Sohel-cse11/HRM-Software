<?php $this->load->view('common/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<?php $this->load->view('common/sidebar'); ?>
<!-- BEGIN CONTAINER -->
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
                       <a href="<?php echo base_url('offtime'); ?>">Office Time</a>  
                    </li>  
                </ul>      
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box grey-cascade">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-globe"></i>Office Time 
                            </div> 
                            <div class="tools">
                            </div>   
                        </div>
                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn-group">
                                         <a href="<?php echo base_url('offtime/add') ?>">
                                            <button id="sample_editable_1_new" class="btn green">
                                            Add New <i class="fa fa-plus"></i>
                                            </button></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btn-group pull-right">    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                            <tr>
                               <th width="8">Sl
                                </th>
                                <th>
                                    Day Type
                                </th>
                                <th>
                                   In-Time
                                </th>
                                <th>
                                    Considerable In-Time
                                </th>
                                <th>
                                     Out-Time
                                </th>
                                <th>Considerable Out-Time </th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                             <?php
                                    $sl = 1;
                                    foreach ($content as $con) {
                                        ?>

                                        <tr class="odd gradeX">
                                            <td> <?php echo $sl; ?> </td>
                                            <td> <?php echo $con->daytype_name;?> </td>
                                            <td> <?php echo date('g:i A', strtotime($con->InTime));?> </td>
                                            <td> <?php echo date('g:i A', strtotime($con->ConsiderableInTime));?> </td>
                                            <td> <?php echo date('g:i A', strtotime($con->OutTime));?> </td>
                                            <td> <?php echo date('g:i A', strtotime($con->ConsiderableOutTime));?> </td>
                                            <td class="text-center">
                                                <a href="<?php echo base_url('offtime/edit/' . $con->OfficeTimingID) ?>" class="btn default btn-xs purple" onClick="return confirm('Do you want to edit this item?');"><i class="fa fa-edit"></i>Edit</a>
                                            </td>
                                        </tr>

                                        <?php
                                        $sl++;
                                    }
                                    ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <!-- END QUICK SIDEBAR -->
</div>
<!-- BEGIN FOOTER -->
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
        <!-- END JAVASCRIPTS -->
        <script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#myTable').DataTable();
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#myTable').DataTable({
            "pageLength": 30,
            "lengthMenu": [[10, 30, 60, 100, -1], [10, 30, 60, 100, "All"]]
        });
    });
</script>
 </body>
 </html>