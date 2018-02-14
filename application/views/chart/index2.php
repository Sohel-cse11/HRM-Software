<?php $this->load->view('common/header1'); ?>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>

<!-- END PAGE LEVEL STYLES -->
<?php $this->load->view('common/header2'); ?>
<?php $this->load->view('common/sidebar'); ?>
	<!-- BEGIN CONTENT -->
	
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		  <div class="page-content">
			<!-- BEGIN PAGE HEADER-->
		<h3 class="page-title">
			Performance
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('chart'); ?>">Performance</a>
					</li>
				</ul>
			</div>
					
						<div class="row">
									<div class="col-md-12">
									<div class="btn-group pull-right">
										<div class="btn-group">
										<a href="<?php echo base_url("chart/filter_employee");?>">
											<button id="sample_editable_1_new" class="btn green">
											Filter <i class="fa fa-plus"></i>
											</button></a>	
										</div>
									</div>	
									</div>	
								</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
				<div class="row">
				<div class="col-md-12 news-page blog-page">
					
						
        <!-- Load Google chart api -->
      
          
     <div id="chartContainer" style="height: 650px; width: 100%;">


				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
<?php $this->load->view('common/footer1'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->

<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/admin/pages/scripts/form-samples.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script>
jQuery(document).ready(function() {       
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
TableAdvanced.init();
FormSamples.init();
});
</script>
<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {

      title:{
        text: "Performance Chart of a Employee"              
      },

            subtitles: [
                {
                    text: "X-axis Hours/day && Y-axis Date/month"
                }
            ],
      data: [//array of dataSeries              
        { //dataSeries object

         /*** Change type "column" to "bar", "area", "line" or "pie"***/
         type: "column",
         color: "#6DBCEB",

         dataPoints: [
         { label: "1", y: 8 },
         { label: "2", y: 8 },
         { label: "3", y: 8 },                                    
         { label: "4", y: 8 },
         { label: "5", y: 6.5 },
         { label: "8", y: 8 },
         { label: "9", y: 8 },
         { label: "10", y: 8 },                                    
         { label: "11", y: 6 },
         { label: "12", y: 8 },
         { label: "15", y: 8 },
         { label: "16", y: 8 },
         { label: "17", y: 7 },
         { label: "18", y: 8 },
         { label: "19", y: 8 },                                    
         { label: "22", y: 7 },
         { label: "23", y: 8 },
         { label: "24", y: 8 },
         { label: "25", y: 8 },
         { label: "26", y: 6 },                                    
         { label: "29", y: 8 },
         { label: "30", y: 8 },
        
         ]
       }
       ]
     });

    chart.render();
  }
  </script>
  <script type="text/javascript" src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<?php $this->load->view('common/footer2'); ?>

