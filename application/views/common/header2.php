<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url();?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url();?>assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->

<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="<?php echo base_url('dashboard');?>">
			<img src="<?php echo base_url();?>assets/admin/layout/img/logo3.jpg" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-envelope-open"></i>
					
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3> Notifications</h3>
							<a href="<?php echo base_url('notice');?>">view all</a>
						</li>
						
					</ul>

				</li>
				      
				<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Quick Access
					<i class="fa fa-caret-square-o-down "></i>
					
					</a>
					<ul class="dropdown-menu extended tasks">
						<li class="external">
							<h3> <span class="bold">My Project</span> </h3>
							<a href="<?php echo base_url('time_management/project');?>/<?php echo $this->session->userdata('id');?>">view all</a>
						</li>
						<li class="external">
							<h3> <span class="bold">My Attendance</span> </h3>
							<a href="<?php echo base_url('time_management/attendance');?>/<?php echo $this->session->userdata('id');?>">view all</a>
						</li>
						<li class="external">
							<h3> <span class="bold">My Training</span> </h3>
							<a href="<?php echo base_url('my_training/index');?>/<?php echo $this->session->userdata('id');?>">view all</a>
						</li>
						
					</ul>
				</li>
				
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="<?php echo base_url();?>uploads/profile_image/<?php echo $this->session->userdata('profileimage');?>"/>
					<span class="username username-hide-on-mobile">
					<?php echo $this->session->userdata('username');?> </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
					<a href="<?php echo base_url('personal_info/index');?>/<?php echo $this->session->userdata('id');?>">
							<i class="icon-user"></i> My Profile </a>
						</li>
						
						<li>
							<a href="<?php echo base_url('auth/logout');?>">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				
				
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>