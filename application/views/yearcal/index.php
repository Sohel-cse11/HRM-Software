<?php $this->load->view('common/header'); ?>
<!-- BEGIN CONTAINER -->
<?php $this->load->view('common/sidebar'); ?>

    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?php echo base_url('dashboard'); ?>">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo base_url('yearcal'); ?>">Year Calender</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                  <div class="portlet box grey-cascade">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-globe"></i>Year Calender 
                            </div>    
                        </div>
                    <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <a href="<?php echo base_url('yearcal/add') ?>">
                                        <button id="sample_editable_1_new" class="btn green"> Add New <i class="fa fa-plus"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <?php
                    if ($this->session->flashdata('success')) {
                        ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php
                    }
                    if ($this->session->flashdata('error')) {
                        ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>

                    <?php } ?>
                    
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->

                    

                        <div class="portlet-body">

                            <table class="table table-striped table-bordered table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <th width="8">Sl</th>
                                        <th>Date</th>
                                        <th>Day Name</th>
                                        <th>Day Type</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sl = 1;
                                    if(!empty($content)) {
                                        foreach ($content as $con) {
                                            ?>

                                            <tr class="odd gradeX" style="background: <?php echo $con->Color;?>">
                                                <td> <?php echo $sl;?> </td>
                                                <td> <?php echo $con->YearDay; ?> </td>
                                                <td> <?php echo date('l', strtotime($con->YearDay)); ?> </td>
                                                <td> <?php echo $con->daytype_desc; ?> </td>
                                                <td class="text-center">
                                                    <a href="<?php echo base_url('yearcal/edit/' . $con->YearDayID);?>" class="btn default btn-xs purple" onClick="return confirm('Do you want to edit this item?');"><i class="fa fa-edit"></i> Edit </a>
                                                </td>
                                            </tr>

                                            <?php
                                            $sl++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        
                   
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
</div>
</div>

    <!-- END CONTENT -->

<!-- END CONTAINER -->


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
        jQuery('#myTable').DataTable({
            "pageLength": 30,
            "lengthMenu": [[10, 30, 60, 100, -1], [10, 30, 60, 100, "All"]]
        });
    });
</script>
 </body>
 </html>