<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Saúde em Dashboard">
	<meta name="author" content="Saúde em Casa">
	<title>Saúde em Casa - Dashboard</title>
	<!-- Favicon -->
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/brand/favicon.png" type="image/png">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<!-- Icons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
		  type="text/css">
	<!-- Page plugins -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
	<link href="<?php echo base_url(); ?>assets/plugins/tablesaw/css/tablesaw.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/plugins/datetimepicker/css/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
	<!-- Argon CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/argon.css?v=1.1.0" type="text/css">
	<style>
		iframe {
			height: 100vh;
			background-color: transparent;
			border-left: 0;
		}
		/* CUSTOM CSS */
		table.dataTable tbody tr.selected a, table.dataTable tbody th.selected a, table.dataTable tbody td.selected a {
			color: #525f7f;
		}
		table.dataTable tbody > tr.selected {
			background-color: white;
		}
		table.dataTable tbody tr.selected, table.dataTable tbody th.selected, table.dataTable tbody td.selected {
			color: #525f7f;
		}
		/* CUSTOM CSS */
	</style>
	<!-- Core -->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/validate/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/validate/jquery.validate.rules.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/tablesaw/js/tablesaw.jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/tablesaw/js/tablesaw-init.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datetimepicker/js/jquery.datetimepicker.full.js"></script>
</head>

<body>
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
	<div class="scrollbar-inner">
		<!-- Brand -->
		<div class="sidenav-header d-flex align-items-center">
			<a class="navbar-brand" href="<?php echo base_url(); ?>dashboard">
				<img src="<?php echo base_url(); ?>assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
			</a>
			<div class="ml-auto">
				<!-- Sidenav toggler -->
				<div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
					<div class="sidenav-toggler-inner">
						<i class="sidenav-toggler-line"></i>
						<i class="sidenav-toggler-line"></i>
						<i class="sidenav-toggler-line"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar-inner">
			<!-- Collapse -->
			<div class="collapse navbar-collapse" id="sidenav-collapse-main">
				<!-- Nav items -->
				<ul class="navbar-nav">
					<?php echo recursiveMenuNav($menuOrdenado,'id="sidebar-menu"');$menuOrdenado=FALSE; ?>
				</ul>
				<!-- Divider -->
				<hr class="my-3">
				<!-- Heading -->
				<h6 class="navbar-heading p-0 text-muted">Documentos</h6>
				<!-- Navigation -->
				<ul class="navbar-nav mb-md-3">
					<li class="nav-item">
						<a class="nav-link" href="#" target="_blank">
							<i class="ni ni-spaceship"></i>
							<span class="nav-link-text">Manual Primeiros Passos</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<!-- Main content -->
<div class="main-content" id="panel">
	<!-- Topnav -->
	<nav class="navbar navbar-top navbar-expand navbar-dark bg-gradient-template border-bottom">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Search form -->
				<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
					<div class="form-group mb-0">
						<div class="input-group input-group-alternative input-group-merge">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-search"></i></span>
							</div>
							<input class="form-control" placeholder="Search" type="text">
						</div>
					</div>
					<button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
							aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</form>
				<!-- Navbar links -->
				<ul class="navbar-nav align-items-center ml-md-auto">
					<li class="nav-item d-xl-none">
						<!-- Sidenav toggler -->
						<div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
							 data-target="#sidenav-main">
							<div class="sidenav-toggler-inner">
								<i class="sidenav-toggler-line"></i>
								<i class="sidenav-toggler-line"></i>
								<i class="sidenav-toggler-line"></i>
							</div>
						</div>
					</li>
					<li class="nav-item d-sm-none">
						<a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
							<i class="ni ni-zoom-split-in"></i>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
						   aria-expanded="false">
							<i class="ni ni-bell-55"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
							<!-- Dropdown header -->
							<div class="px-3 py-3">
								<h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong>
									notifications.</h6>
							</div>
							<!-- List group -->
							<div class="list-group list-group-flush">
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder"
												 src="<?php echo base_url(); ?>assets/img/theme/team-1.jpg"
												 class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<h4 class="mb-0 text-sm">John Snow</h4>
												</div>
												<div class="text-right text-muted">
													<small>2 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
										</div>
									</div>
								</a>
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder"
												 src="<?php echo base_url(); ?>assets/img/theme/team-2.jpg"
												 class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<h4 class="mb-0 text-sm">John Snow</h4>
												</div>
												<div class="text-right text-muted">
													<small>3 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">A new issue has been reported for Argon.</p>
										</div>
									</div>
								</a>
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder"
												 src="<?php echo base_url(); ?>assets/img/theme/team-3.jpg"
												 class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<h4 class="mb-0 text-sm">John Snow</h4>
												</div>
												<div class="text-right text-muted">
													<small>5 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">Your posts have been liked a lot.</p>
										</div>
									</div>
								</a>
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder"
												 src="<?php echo base_url(); ?>assets/img/theme/team-4.jpg"
												 class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<h4 class="mb-0 text-sm">John Snow</h4>
												</div>
												<div class="text-right text-muted">
													<small>2 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
										</div>
									</div>
								</a>
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder"
												 src="<?php echo base_url(); ?>assets/img/theme/team-5.jpg"
												 class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<h4 class="mb-0 text-sm">John Snow</h4>
												</div>
												<div class="text-right text-muted">
													<small>3 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">A new issue has been reported for Argon.</p>
										</div>
									</div>
								</a>
							</div>
							<!-- View all -->
							<a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View
								all</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
						   aria-expanded="false">
							<i class="ni ni-ungroup"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
							<div class="row shortcuts px-4">
								<a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                        <i class="ni ni-calendar-grid-58"></i>
                    </span>
									<small>Calendar</small>
								</a>
								<a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                        <i class="ni ni-email-83"></i>
                    </span>
									<small>Email</small>
								</a>
								<a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                        <i class="ni ni-credit-card"></i>
                    </span>
									<small>Payments</small>
								</a>
								<a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                        <i class="ni ni-books"></i>
                    </span>
									<small>Reports</small>
								</a>
								<a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                        <i class="ni ni-pin-3"></i>
                    </span>
									<small>Maps</small>
								</a>
								<a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                        <i class="ni ni-basket"></i>
                    </span>
									<small>Shop</small>
								</a>
							</div>
						</div>
					</li>
				</ul>
				<ul class="navbar-nav align-items-center ml-auto ml-md-0">
					<li class="nav-item dropdown">
						<a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="media align-items-center">
								<span class="avatar avatar-sm rounded-circle">
									<img alt="Image placeholder" src="<?php echo base_url(); ?>assets/img/theme/user.png">
								</span>
								<div class="media-body ml-2 d-none d-lg-block">
									<span class="mb-0 text-sm  font-weight-bold"><?= $userdata['nome']; ?></span>
								</div>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="dropdown-header noti-title">
								<h6 class="text-overflow m-0">Welcome!</h6>
							</div>
							<a href="#!" class="dropdown-item">
								<i class="ni ni-single-02"></i>
								<span>My profile</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i class="ni ni-settings-gear-65"></i>
								<span>Settings</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i class="ni ni-calendar-grid-58"></i>
								<span>Activity</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i class="ni ni-support-16"></i>
								<span>Support</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="<?= site_url();?>auth/logout" class="dropdown-item">
								<i class="ni ni-user-run"></i>
								<span>Logout</span>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
