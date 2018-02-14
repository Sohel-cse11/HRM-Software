<?php $this->load->view('common/header1'); ?>
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="<?php echo base_url();?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<?php $this->load->view('common/header2'); ?>
<?php $this->load->view('common/sidebar'); ?>
    <div class="page-content-wrapper">
		<div class="page-content">

       <?php if($this->session->userdata('user_roles')=='1'){ ?>

			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
					</li>
				</ul>
			</div>
			<h3 class="page-title">
			 Admin Dashboard 
			</h3>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $employee;?>
							</div>
							<div class="desc">
								Employees
							</div>
						</div>
						<a class="more" href="<?php echo base_url('employee/employees'); ?>">
						Manage Employees <i class="m-icon-swapright m-icon-white"></i>
						</a>						
					</div>	
				  </div>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
						   
							<div class="desc">
								<h2>Project<h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('project'); ?>">
						Manage Project <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Users</h2> 
							</div>
						</div>
						<a class="more" href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Company</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('company') ?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Attendance</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('attendance') ?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2> Leave</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('leave') ?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Reports</h2>
							</div>
						</div>
						<a class="more" href="javascript:;">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Setting</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('zone') ?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2> Active Jobs</h2> 
							</div>
						</div>
						<a class="more" href="<?php echo base_url('job_require') ?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								 <h2>Training</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('training/course') ?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								 <h2>Travel</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('travel') ?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2> Document</h2>
							</div>
						</div>
						<a class="more" href="javascript:;">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							
							<div class="desc">
								<h2>My Profile</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
						View Details <i class="m-icon-swapright m-icon-white"></i>
						</a>						
					</div>	
				  </div>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
						    
							<div class="desc">
								<h2>Punch In</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('time_management/attendance');?>/<?php echo $this->session->userdata('id');?>">
						Record Attendance <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>My Leaves</h2> 
							</div>
						</div>
						<a class="more" href="<?php echo base_url('my_leave/index');?>/<?php echo $this->session->userdata('id');?>">
						Check Leave status <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>My Projects</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('time_management/project');?>/<?php echo $this->session->userdata('id');?>">
						Project Assigned <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2> My Travel</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('mytravels/mytravel');?>/<?php echo $this->session->userdata('id');?>">
						Travel Management <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2> My Expenses</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('personal_expense/index');?>/<?php echo $this->session->userdata('id');?>">
						 Manageme Expenses <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				
			</div>	


<?php 
//---------------------------- end admin--------------------
}?>

 <?php if($this->session->userdata('user_roles')=='2'){ ?>

			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
					</li>
				</ul>
			</div>
			<h3 class="page-title">
			 Manager Dashboard 
			</h3>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $employee;?>
							</div>
							<div class="desc">
								Employees
							</div>
						</div>
						<a class="more" href="<?php echo base_url('employee/employees'); ?>">
						Manage Employees <i class="m-icon-swapright m-icon-white"></i>
						</a>						
					</div>	
				  </div>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
						    <div class="number">
								<?php ?>
							</div>
							<div class="desc">
								Project
							</div>
						</div>
						<a class="more" href="<?php echo base_url('project'); ?>">
						Manage Project <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Attendance</h2> 
							</div>
						</div>
						<a class="more" href="<?php echo base_url('attendance') ?>">
						Monitor Attendance <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Reports</h2>
							</div>
						</div>
						<a class="more" href="javascript:;">
						View / Download Reports <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Training</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('training/course') ?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Travel</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('travel') ?>">
						Manage Travel<i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $employee;?>
							</div>
							<div class="desc">
								My Profile
							</div>
						</div>
						<a class="more" href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
						View Details <i class="m-icon-swapright m-icon-white"></i>
						</a>						
					</div>	
				  </div>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
						    <div class="number">
								<?php ?>
							</div>
							<div class="desc">
								Punch In
							</div>
						</div>
						<a class="more" href="<?php echo base_url('time_management/attendance');?>/<?php echo $this->session->userdata('id');?>">
						Record Attendance <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>My Leaves</h2> 
							</div>
						</div>
						<a class="more" href="<?php echo base_url('my_leave/index');?>/<?php echo $this->session->userdata('id');?>">
						Check Leave status <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>My Projects</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('time_management/project');?>/<?php echo $this->session->userdata('id');?>">
						Project Assigned <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2> My Travel</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('mytravels/mytravel');?>/<?php echo $this->session->userdata('id');?>">
						Travel Management <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2> My Expenses</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('personal_expense/index');?>/<?php echo $this->session->userdata('id');?>">
						 Manageme Expenses <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				
				
				
			</div>	
<?php 
//---------------------------- end manager--------------------
}?>

 <?php if($this->session->userdata('user_roles')=='3'){ ?>

			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('dashboard'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
					</li>
				</ul>
			</div>
			<h3 class="page-title">
			 Employee Dashboard 
			</h3>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>My Profile</h2> 
							</div>
						</div>
						<a class="more" href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
						View Details <i class="m-icon-swapright m-icon-white"></i>
						</a>						
					</div>	
				  </div>
				
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>My Leaves</h2> 
							</div>
						</div>
						<a class="more" href="<?php echo base_url('my_leave/index');?>/<?php echo $this->session->userdata('id');?>">
						Check Leave status <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>My Projects</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('time_management/project');?>/<?php echo $this->session->userdata('id');?>">
						Project Assigned <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Attendance</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('time_management/attendance');?>/<?php echo $this->session->userdata('id');?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2> My Travel</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('mytravels/mytravel');?>/<?php echo $this->session->userdata('id');?>">
						Travel Management <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2> My Expenses</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('personal_expense/index');?>/<?php echo $this->session->userdata('id');?>">
						 Manageme Expenses <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2> My Training</h2>
							</div>
						</div>
						<a class="more" href="<?php echo base_url('my_training/index');?>/<?php echo $this->session->userdata('id');?>">
						 View More <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Reports</h2>
							</div>
						</div>
						<a class="more" href="javascript:;">
						 View More <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="desc">
								<h2>Documents</h2>
							</div>
						</div>
						<a class="more" href="javascript:;">
						 View More <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				
				
			</div>	

<?php 
//---------------------------- end employee--------------------
}?>

		</div>
    </div>

<?php $this->load->view('common/footer1'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="<?php echo base_url();?>assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   Index.init();   
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>
<?php $this->load->view('common/footer2'); ?>