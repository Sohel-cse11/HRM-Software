<?php            
$class_name = $this->router->fetch_class();
$method_name = $this->router->fetch_method();
?>

<div class="page-container">
	<div class="page-sidebar-wrapper">	
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<div class="sidebar-toggler">
					</div>	
				</li>

				<?php if($this->session->userdata('user_roles')=='1'){ ?>

				<li class="class=<?php echo ($class_name == 'dashboard') ? 'start active open' : ''; ?>">
					<a href="<?php echo base_url('dashboard');?>">
					<i class="fa fa-desktop"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>	
				</li>
				
				<li class="<?php echo ($class_name == 'project'||$class_name == 'job' || $class_name == 'training'||$class_name == 'leave' ||$class_name == 'audit_log'||$class_name == 'qualification') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-cubes "></i>
					<span class="title">Admin</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						
						<li class="<?php echo ($class_name == 'job') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('job') ?>">
							<i class="fa fa-columns"></i>
							Job Details Setup </a>
						</li>
						<li class="<?php echo ($class_name == 'qualification') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('qualification/skill_index') ?>">
							<i class="fa fa-check-square "></i>
							Qualification Setup </a>
						</li>
						<li class="<?php echo ($class_name == 'training') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('training/course') ?>">
							<i class="fa fa-briefcase "></i>
							Training Setup </a>
						</li>
						<li class="<?php echo ($class_name == 'leave') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('leave') ?>">
							<i class="fa fa-sign-out "></i>
							Leave Setting </a>
						</li>
						<li class="<?php echo ($class_name == 'project') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('project') ?>">
							<i class="fa fa-tasks "></i>
							Projects/Clients Setup </a>
						</li>
						<li class="<?php echo ($class_name == 'audit_log') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('audit_log') ?>">
							<i class="fa fa-sun-o "></i>
							Audit log </a>
						</li>
						
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'zone'||$class_name == 'company' ||$class_name == 'department') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">Company Setting</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						
						<li class="<?php echo ($class_name == 'zone') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('zone') ?>">
							<i class="fa fa-sitemap"></i>
							Zone </a>
						</li>
						<li class="<?php echo ($class_name == 'company') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('company') ?>">
							<i class="fa fa-building-o"></i>
							Company </a>
						</li>
						<li class="<?php echo ($class_name == 'department') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('department') ?>">
							<i class="fa fa-university  "></i>
							Department </a>
						</li>
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'employee' || $class_name == 'attendance'||$class_name == 'expense'|| $class_name == 'travel'|| $class_name == 'chart') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-group (alias)"></i>
					<span class="title">Employees</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'employee') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('employee/employees') ?>">
							<i class="fa fa-group (alias)"></i>
							Employees </a>
						</li>
						<li class="<?php echo ($class_name == 'travel') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('travel') ?>">
							<i class="fa  fa-plane"></i>
							Travel Administration </a>
						</li>	
						<li class="<?php echo ($class_name == 'expense') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('expense/category') ?>">
							<i class="fa  fa-reorder (alias)"></i>
							Expense Administration </a>
						</li>
						<li class="<?php echo ($class_name == 'attendance') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('attendance') ?>">
							<i class="glyphicon glyphicon-time"></i>
							Monitor Attendance </a>
						</li>
						<li class="<?php echo ($class_name == 'chart') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('chart') ?>">
							<i class="fa fa-bar-chart-o"></i>
							Performance Charts </a>
						</li>
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'daytype' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-file-excel-o"></i>
					<span class="title">Admin Reports</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-file-word-o"></i>
							Report Files </a>
						</li>	
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'notification' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class=" glyphicon glyphicon-envelope "></i>
					<span class="title">Notice Setup</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'notification') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('notification') ?>">
							<i class="fa icon-calendar"></i>
							Notice Setup</a>
						</li>	
					</ul>
				</li>


				<li class="<?php echo ($class_name == 'salary' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-meh-o "></i>
					<span class="title">Payroll</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'salary') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('salary') ?>">
							<i class="fa fa-smile-o "></i>
							Salary </a>
						</li>	
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-file-pdf-o "></i>
							Payroll Report</a>
						</li>
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'recruitment' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-tasks "></i>
					<span class="title">Recruitment</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'recruitment') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('recruitment/employee_type') ?>">
							<i class="fa fa-share-alt"></i>
							Recruitment Setup </a>
						</li>
						<li class="<?php echo ($class_name == 'job_require') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('job_require') ?>">
							<i class="fa fa-columns"></i>
							Job Positions </a>
						</li>
						
					</ul>
				</li>

				<li class="<?php echo ($class_name == '' ||  $class_name == 'personal_info') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-child "></i>
					<span class="title">Personal Information</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-user"></i>
							Basic Information</a>
						</li>
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-graduation-cap"></i>
							Qualifications</a>
						</li>
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-sliders"></i>
							Dependents </a>
						</li>
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-phone-square"></i>
							Emergency Contacts </a>
						</li>	
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'my_leave' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-calendar-o"></i>
					<span class="title">Leave</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'my_leave') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('my_leave/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-sign-out"></i>
							Leave Management </a>
						</li>
							
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'time_management' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa  fa-clock-o"></i>
					<span class="title">Time Management</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'time_management') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('time_management/project');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-pencil-square"></i>
							Project</a>
						</li>	
						<li class="<?php echo ($class_name == 'time_management') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('time_management/attendance');?>/<?php echo $this->session->userdata('id');?>">
							<i class=" fa fa-clock-o"></i>
							Attendance </a>
						</li>
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="icon-speedometer"></i>
							Time Sheets</a>
						</li>
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-clock-o"></i>
							Attendance Sheets</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo ($class_name == 'notice' ) ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="glyphicon glyphicon-envelope"></i>
					<span class="title">Notification</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'notice') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('notice') ?>">
							<i class="fa icon-calendar"></i>
							Notice </a>
						</li>	
					</ul>
				</li>
				<li class="<?php echo ($class_name == 'daytype' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-file-word-o "></i>
					<span class="title">Documents</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-file-o "></i>
							My Documents </a>
						</li>	
					</ul>
				</li>


				<li class="<?php echo ($class_name == 'my_training' ) ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-briefcase "></i>
					<span class="title">Training</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'my_training') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('my_training/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-briefcase "></i>
							Training </a>
						</li>	
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'mytravels') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa  fa-plane"></i>
					<span class="title">Travel Management</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'mytravels') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('mytravels/mytravel');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-plane"></i>
							Travel</a>
						</li>	
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'personal_expense' ) ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa  fa-file-archive-o"></i>
					<span class="title">Finance</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'personal_expense') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_expense/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-reorder (alias)"></i>
							Expenses </a>
						</li>	
						<li class="<?php echo ($class_name == 'personal_expense') ? 'active' : ''; ?>">			
							<a href="<?php echo base_url('personal_expense/my_salary');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-smile-o "></i>
							Salary </a>
						</li>
					</ul>
				</li>
				<li class="<?php echo ($class_name == 'daytype' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-file-excel-o"></i>
					<span class="title">Users Reports</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-file-word-o"></i>
							Report Files </a>
						</li>	
					</ul>
				</li>

				
						<?php 
//-------------------------------------------end admin area---------------------------------------
						}?>

						<?php if($this->session->userdata('user_roles')=='2'){ ?>

					<li class="class=<?php echo ($class_name == 'dashboard') ? 'start active open' : ''; ?>">
					<a href="<?php echo base_url('dashboard');?>">
					<i class="fa fa-desktop"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>	
				    </li>

				    <li class="<?php echo ($class_name == 'project'||$class_name == 'job' || $class_name == 'training'||$class_name == 'leave' ||$class_name == 'audit_log'||$class_name == 'qualification') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-cubes "></i>
					<span class="title">Admin</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">

						<li class="<?php echo ($class_name == 'qualification') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('qualification/skill_index') ?>">
							<i class="fa fa-check-square "></i>
							Qualification Setup </a>
						</li>
						<li class="<?php echo ($class_name == 'training') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('training/course') ?>">
							<i class="fa fa-briefcase "></i>
							Training Setup </a>
						</li>
						
						<li class="<?php echo ($class_name == 'project') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('project') ?>">
							<i class="fa fa-tasks "></i>
							Projects/Clients Setup </a>
						</li>	
					</ul>
				</li>

				    <li class="<?php echo ($class_name == 'employee' || $class_name == 'attendance'||$class_name == 'expense'|| $class_name == 'travel') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-group (alias)"></i>
					<span class="title">Employees</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'employee') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('employee/employees') ?>">
							<i class="fa fa-group (alias)"></i>
							Employees </a>
						</li>
						<li class="<?php echo ($class_name == 'travel') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('travel') ?>">
							<i class="fa  fa-plane"></i>
							Travel Administration </a>
						</li>	
						<li class="<?php echo ($class_name == 'expense') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('expense/category') ?>">
							<i class="fa  fa-reorder (alias)"></i>
							Expense Administration </a>
						</li>
						<li class="<?php echo ($class_name == 'attendance') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('attendance') ?>">
							<i class="glyphicon glyphicon-time"></i>
							Monitor Attendance </a>
						</li>
						<li class="<?php echo ($class_name == 'chart') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('chart') ?>">
							<i class="fa fa-bar-chart-o"></i>
							Performance Charts </a>
						</li>
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'daytype' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-file-excel-o"></i>
					<span class="title">Admin Reports</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-file-word-o"></i>
							Report Files </a>
						</li>	
					</ul>
				</li>

				

				<li class="<?php echo ($class_name == 'recruitment' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-tasks "></i>
					<span class="title">Recruitment</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'recruitment') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('recruitment/employee_type') ?>">
							<i class="fa fa-share-alt"></i>
							Recruitment Setup </a>
						</li>
						<li class="<?php echo ($class_name == 'job_require') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('job_require') ?>">
							<i class="fa fa-columns"></i>
							Job Positions </a>
						</li>
						
					</ul>
				</li>

					<li class="<?php echo ($class_name == '' ||  $class_name == 'personal_info') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-child "></i>
					<span class="title">Personal Information</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-user"></i>
							Basic Information</a>
						</li>
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-graduation-cap"></i>
							Qualifications</a>
						</li>
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-sliders"></i>
							Dependents </a>
						</li>
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-phone-square"></i>
							Emergency Contacts </a>
						</li>	
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'my_leave' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-calendar-o"></i>
					<span class="title">Leave</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'my_leave') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('my_leave/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-sign-out"></i>
							Leave Management </a>
						</li>
							
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'time_management' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa  fa-clock-o"></i>
					<span class="title">Time Management</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'time_management') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('time_management/project');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-pencil-square"></i>
							Project</a>
						</li>	
						<li class="<?php echo ($class_name == 'time_management') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('time_management/attendance');?>/<?php echo $this->session->userdata('id');?>">
							<i class=" fa fa-clock-o"></i>
							Attendance </a>
						</li>
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="icon-speedometer"></i>
							Time Sheets</a>
						</li>
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-clock-o"></i>
							Attendance Sheets</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo ($class_name == 'notice' ) ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="glyphicon glyphicon-envelope"></i>
					<span class="title">Notification</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'notice') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('notice') ?>">
							<i class="fa icon-calendar"></i>
							Notice </a>
						</li>	
					</ul>
				</li>
				<li class="<?php echo ($class_name == 'daytype' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-file-word-o "></i>
					<span class="title">Documents</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-file-o "></i>
							My Documents </a>
						</li>	
					</ul>
				</li>


				<li class="<?php echo ($class_name == 'my_training' ) ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-briefcase "></i>
					<span class="title">Training</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'my_training') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('my_training/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-briefcase "></i>
							Training </a>
						</li>	
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'mytravels') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa  fa-plane"></i>
					<span class="title">Travel Management</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'mytravels') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('mytravels/mytravel');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-plane"></i>
							Travel</a>
						</li>	
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'personal_expense' ) ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa  fa-file-archive-o"></i>
					<span class="title">Finance</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'personal_expense') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_expense/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-reorder (alias)"></i>
							Expenses </a>
						</li>	
						<li class="<?php echo ($class_name == 'personal_expense') ? 'active' : ''; ?>">			
							<a href="<?php echo base_url('personal_expense/my_salary');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-smile-o "></i>
							Salary </a>
						</li>
					</ul>
				</li>
				<li class="<?php echo ($class_name == 'daytype' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-file-excel-o"></i>
					<span class="title">Users Reports</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-file-word-o"></i>
							Report Files </a>
						</li>	
					</ul>
				</li>

				
						<?php 
//-------------------------------------------end manager area area---------------------------------------
						}?>


					<?php if($this->session->userdata('user_roles')=='3'){ ?>

					<li class="class=<?php echo ($class_name == 'dashboard') ? 'start active open' : ''; ?>">
					<a href="<?php echo base_url('dashboard');?>">
					<i class="fa fa-desktop"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>	
				    </li>
					<li class="<?php echo ($class_name == '' ||  $class_name == 'personal_info') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-child "></i>
					<span class="title">Personal Information</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-user"></i>
							Basic Information</a>
						</li>
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-graduation-cap"></i>
							Qualifications</a>
						</li>
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-sliders"></i>
							Dependents </a>
						</li>
						<li class="<?php echo ($class_name == 'personal_info') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-phone-square"></i>
							Emergency Contacts </a>
						</li>	
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'my_leave' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-calendar-o"></i>
					<span class="title">Leave</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'my_leave') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('my_leave/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-sign-out"></i>
							Leave Management </a>
						</li>
							
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'time_management' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa  fa-clock-o"></i>
					<span class="title">Time Management</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'time_management') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('time_management/project');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-pencil-square"></i>
							Project</a>
						</li>	
						<li class="<?php echo ($class_name == 'time_management') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('time_management/attendance');?>/<?php echo $this->session->userdata('id');?>">
							<i class=" fa fa-clock-o"></i>
							Attendance </a>
						</li>
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="icon-speedometer"></i>
							Time Sheets</a>
						</li>
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-clock-o"></i>
							Attendance Sheets</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo ($class_name == 'notice' ) ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="glyphicon glyphicon-envelope"></i>
					<span class="title">Notification</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'notice') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('notice') ?>">
							<i class="fa icon-calendar"></i>
							Notice </a>
						</li>	
					</ul>
				</li>
				<li class="<?php echo ($class_name == 'daytype' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-file-word-o "></i>
					<span class="title">Documents</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-file-o "></i>
							My Documents </a>
						</li>	
					</ul>
				</li>


				<li class="<?php echo ($class_name == 'my_training' ) ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-briefcase "></i>
					<span class="title">Training</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'my_training') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('my_training/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-briefcase "></i>
							Training </a>
						</li>	
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'mytravels') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa  fa-plane"></i>
					<span class="title">Travel Management</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'mytravels') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('mytravels/mytravel');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-plane"></i>
							Travel</a>
						</li>	
					</ul>
				</li>

				<li class="<?php echo ($class_name == 'personal_expense' ) ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa  fa-file-archive-o"></i>
					<span class="title">Finance</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'personal_expense') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('personal_expense/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa  fa-reorder (alias)"></i>
							Expenses </a>
						</li>	
						<li class="<?php echo ($class_name == 'personal_expense') ? 'active' : ''; ?>">			
							<a href="<?php echo base_url('personal_expense/my_salary');?>/<?php echo $this->session->userdata('id');?>">
							<i class="fa fa-smile-o "></i>
							Salary </a>
						</li>
					</ul>
				</li>
				<li class="<?php echo ($class_name == 'daytype' ||  $class_name == 'yearcal') ? 'start active open' : ''; ?>">
					<a href="javascript:;">
					<i class="fa fa-file-excel-o"></i>
					<span class="title">Users Reports</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo ($class_name == 'daytype') ? 'active' : ''; ?>">
							<a href="<?php echo base_url('daytype') ?>">
							<i class="fa fa-file-word-o"></i>
							Report Files </a>
						</li>	
					</ul>
				</li>

				
					
						<?php }?>
					
				
			</ul>	
		</div>
	</div>
	


           