<?php $this->load->view('common/header1'); ?>
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<?php $this->load->view('common/header2'); ?>
<?php $this->load->view('common/sidebar'); ?>
	<!-- BEGIN CONTENT -->
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
						<a href="<?php echo base_url('personal_info/index/' . $content->id) ?>">User Profile</a>
						
					</li>
					
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row margin-top-20">
				<div class="col-md-12">
					<!-- BEGIN PROFILE SIDEBAR -->
					<div class="profile-sidebar">
						<!-- PORTLET MAIN -->
						<div class="portlet light profile-sidebar-portlet">
							<!-- SIDEBAR USERPIC -->
							<div class="profile-userpic">
								<img src="<?php echo base_url();?>uploads/profile_image/<?php echo $content->profileimage;?>" class="img-responsive" alt="">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									<?php echo $content->first_name?> <?php echo $content->middle_name?> <?php echo $content->last_name?>
								</div>
								<div class="profile-usertitle-job">
									<?php echo$job->jt_name;?>
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->
							<!-- SIDEBAR BUTTONS -->
							<div class="profile-userbuttons">
								<a href="https://bd.linkedin.com/in/iamsohel "><button type="button" class="btn btn-circle green-haze btn-sm">Linked In</button></a>
								<button type="button" class="btn btn-circle btn-danger btn-sm">Facebook</button>
							</div>
							<!-- END SIDEBAR BUTTONS -->
							<!-- SIDEBAR MENU -->
							<div class="profile-usermenu">
								<ul class="nav">
									<li class="active">
										<a href="<?php echo base_url('personal_info/index/' . $content->id) ?>">
										<i class="icon-home"></i>
										Overview </a>
									</li>
									<li>
										<a href="extra_profile_account.html">
										<i class="icon-settings"></i>
										Account Settings </a>
									</li>
								</ul>
							</div>
							<!-- END MENU -->
						</div>
						
						<!-- END PORTLET MAIN -->
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">	
							<div class="col-md-11">
								<!-- BEGIN PORTLET -->
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">    Basic Information</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">
												Job Details </a>
											</li>
											<li >
												<a href="#tab_1_2" data-toggle="tab">
												Personal Info </a>
											</li>
											<li >
												<a href="#tab_1_3" data-toggle="tab">
												Contact Info</a>
											</li>
											
										</ul>
									</div>
									<div class="portlet-body">
										<!--BEGIN TABS-->
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1_1">
												<div class="scroller" style="height: 80px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
											<div class="portlet-body">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th colspan="2">
													 Job Title
												</th>
												<th>
													Department
												</th>
												<th>
													Pay Grade
												</th>		
											</tr>
											</thead>
											<thead>
											<tr>
												<td colspan="2">
													<?php echo $job->jt_name;?>
												</td>
												<td> 
												<?php echo $job->DepartmentName;?>
												</td>
												<td>
													<?php echo $job->name;?>
												</td>	
											</tr>
											</thead>											
											</table>										
									        </div>													
											</div>
											</div>
											<div class="tab-pane" id="tab_1_2">
												<div class="scroller" style="height: 80px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
												<div class="portlet-body">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th colspan="2">
													Date of Birth
												</th>
												<th>
													Gender
												</th>
												<th>
													Marital Status
												</th >
												<th colspan="2">
											    Email
												</th>
												<th colspan="2">	
												Joining Date
												</th>
												<th colspan="4">
												NID	
												</th>		
											</tr>
											</thead>
											<thead>
											<tr>
												<td colspan="2">
													<?php echo $content->birthday;?>
												</td>
												<td> 
												<?php if($content->gender==0){
													echo "Male";
												} else{
													echo "Female";
												}
												?>
												</td>
												<td>
													<?php if($content->marital_status==0){
													echo "Unmarried";
												} else{
													echo "Married";
												}
												?>
												</td>	
												<td colspan="2">
												<?php echo $content->work_email;?>
												</td>
												<td colspan="2">
												<?php echo $content->joined_date;?>	
												</td>
												<td colspan="2">
												<?php echo $content->NID;?>						
												</td>
											</tr>
											</thead>											
											</table>										
									        </div>	
												</div>
											</div>
												<div class="tab-pane" id="tab_1_3">
												<div class="scroller" style="height: 80px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
													<div class="portlet-body">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th colspan="2">
													 Present Address
												</th>
												<th>
													Permanent Address
												</th>
												<th>
													City 
												</th>	
												<th>
													Postal Code
												</th>
												<th>
													Mobile
												</th>	
											</tr>
											</thead>
											<thead>
											<tr>
												<td colspan="2">
													<?php echo $content->present_address;?>
												</td>
												<td> 
												<?php echo $content->permanent_address;?>
												</td>
												<td>
													<?php echo $content->city;?>
												</td>
												<td>
													<?php echo $content->postal_code;?>
												</td>
												<td>
													<?php echo $content->mobile_phone;?>
												</td>	
											</tr>
											</thead>											
											</table>										
									        </div>
												</div>
											</div>
								
										</div>
										<!--END TABS-->
									</div>
								</div>
								<!-- END PORTLET -->
							</div>

			
						</div>

						<div class="row">	
							<div class="col-md-11">
								<!-- BEGIN PORTLET -->
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Qualification</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_2_1" data-toggle="tab">
												Education </a>
											</li>
											<li >
												<a href="#tab_2_2" data-toggle="tab">
												Skill</a>
											</li>
											<li >
												<a href="#tab_2_3" data-toggle="tab">
												Certification</a>
											</li>
											<li >
												<a href="#tab_2_4" data-toggle="tab">
												Language</a>
											</li>
											
										</ul>
									</div>
									<div class="portlet-body">
										<!--BEGIN TABS-->
										<div class="tab-content">
											<div class="tab-pane active" id="tab_2_1">
												<div class="scroller" style="height: 80px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
													<div class="portlet-body">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th colspan="2">
													Qualification
												</th>
												<th>
													Institute
												</th>
												<th>
													Start Date
												</th>
												<th>
													Complete On
												</th>		
											</tr>
											</thead>
											<thead>
											<tr>
												<td colspan="2">
													<?php echo $education->name;?>
												</td>
												<td> 
												<?php echo $education->institute;?>
												</td>
												<td>
													<?php echo $education->date_start;?>
												</td>	
												<td>
													<?php echo $education->date_end;?>
												</td>
											</tr>
											</thead>											
											</table>										
									        </div>
												</div>
											</div>
											<div class="tab-pane" id="tab_2_2">
												<div class="scroller" style="height: 80px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">	
													<div class="portlet-body">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th colspan="2">
													Skills
												</th>
												<th>
													Details
												</th>			
											</tr>
											</thead>
											<thead>
											<tr>
												<td colspan="2">
													<?php echo $skill->name;?>
												</td>
												<td> 
												<?php echo $skill->details;?>
												</td>
											</tr>
											</thead>											
											</table>										
									        </div>
												
												</div>
											</div>
											<div class="tab-pane" id="tab_2_3">
												<div class="scroller" style="height: 120px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
													<div class="portlet-body">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th colspan="2">
													Certification
												</th>
												<th>
													Institute
												</th>	
												<th>
													Granted On
												</th>
												<th>
													Valid Thru
												</th>		
											</tr>
											</thead>
											<thead>
											<?php foreach($certification as $cer){?>
											<tr>

												<td colspan="2">
													<?php echo $cer->name;?>
												</td>
												<td> 
												<?php echo $cer->institute;?>
												</td>
												<td> 
												<?php echo $cer->date_start;?>
												</td>
												<td> 
												<?php echo $cer->date_end;?>
												</td>
												<?php }?>
											</tr>
											
											</thead>											
											</table>										
									        </div>
												</div>
											</div>
											<div class="tab-pane" id="tab_2_4">
												<div class="scroller" style="height: 120px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
												<div class="portlet-body">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th colspan="2">
													Languages
												</th>
												<th>
													Reading
												</th>	
												<th>
													Writing
												</th>
												<th>
													Speaking
												</th>		
											</tr>
											</thead>
											<thead>
											<?php foreach($language as $cer){?>
											<tr>

												<td colspan="2">
													<?php echo $cer->name;?>
												</td>
												<td> 
												<?php echo $cer->reading ;?>
												</td>
												<td> 
												<?php echo $cer->writing;?>
												</td>
												<td> 
												<?php echo $cer->speaking;?>
												</td>
												<?php }?>
											</tr>
											
											</thead>											
											</table>										
									        </div>
												</div>
											</div>
								
										</div>
										<!--END TABS-->
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
						</div>
						<div class="row">	
							<div class="col-md-11">
								<!-- BEGIN PORTLET -->
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Dependents</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">
											 Details </a>
											</li>	
										</ul>
									</div>
									<div class="portlet-body">
										<!--BEGIN TABS-->
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1_1">
												<div class="scroller" style="height: 120px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
											<div class="portlet-body">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th colspan="2">
													Name
												</th>
												<th>
													Relationship
												</th>	
												<th>
													Date of Birth
												</th>
												<th>
													Id Number
												</th>		
											</tr>
											</thead>
											<thead>
											<?php foreach($dependents as $cer){?>
											<tr>

												<td colspan="2">
													<?php echo $cer->name;?>
												</td>
												<td> 
												<?php echo $cer->relationship ;?>
												</td>
												<td> 
												<?php echo $cer->dob;?>
												</td>
												<td> 
												<?php echo $cer->id_number;?>
												</td>
												<?php }?>
											</tr>
											
											</thead>											
											</table>										
									        </div>											
											</div>
											</div>
										</div>
										<!--END TABS-->
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
						</div>
						<div class="row">	
							<div class="col-md-11">
								<!-- BEGIN PORTLET -->
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">   Emergency Contact</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">
												 Details </a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<!--BEGIN TABS-->
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1_1">
												<div class="scroller" style="height: 120px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
											<div class="portlet-body">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th colspan="2">
													Name
												</th>
												<th>
													Relationship
												</th>	
												<th>
													Home phone
												</th>
												<th>
													Mobile
												</th>		
											</tr>
											</thead>
											<thead>
											<?php foreach($contact as $cer){?>
											<tr>

												<td colspan="2">
													<?php echo $cer->name;?>
												</td>
												<td> 
												<?php echo $cer->relationship ;?>
												</td>
												<td> 
												<?php echo $cer->home_phone ;?>
												</td>
												<td> 
												<?php echo $cer->mobile_phone ;?>
												</td>
												<?php }?>
											</tr>
											
											</thead>											
											</table>										
									        </div>										
											</div>
											</div>
										</div>
										<!--END TABS-->
									</div>
								</div>
								<!-- END PORTLET -->
							</div>

			
						</div>
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	
	<!-- END CONTENT -->
<?php $this->load->view('common/footer1'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/pages/scripts/profile.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
Profile.init(); // init page demo
});
</script>
<!-- END JAVASCRIPTS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'keenthemes.com');
  ga('send', 'pageview');
</script>
<?php $this->load->view('common/footer2'); ?>
