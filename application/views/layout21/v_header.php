<body class="fixed-navbar fixed-sidebar">
	<!-- Simple splash screen-->
	<div class="splash">
		<div class="color-line"></div>
		<div class="splash-title">
			<h1>SIKAP - Smart Village System</h1>
			<p>
				Layanan Aplikasi Informasi Satu Data Desa
			</p>
			<div class="spinner">
				<div class="rect1"></div>
				<div class="rect2"></div>
				<div class="rect3"></div>
				<div class="rect4"></div>
				<div class="rect5"></div>
			</div>
		</div>
	</div>
	<!--[if lt IE 7]>
      <p class="alert alert-danger">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->

	<!-- Header -->
	<div id="header">
		<div class="color-line"></div>
		<div id="logo" class="light-version">
			<a href="<?= base_url() ?>"><img src="<?= base_url() ?>template/homer/images/sikap.png" width="25%" class="img-circle m-b" alt="logo" />&nbsp;
			</a>
			<span> SIKAP </span>
		</div>
		<nav role="navigation">
			<div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
			<div class="small-logo">
				<span class="text-primary">SIKAP APP</span>
			</div>
			<form role="search" class="navbar-form-custom" method="post" action="#">
				<div class="form-group">
					<input type="text" placeholder="Search something special" class="form-control" name="search" />
				</div>
			</form>
			<div class="mobile-menu">
				<button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
					<i class="fa fa-chevron-down"></i>
				</button>
				<div class="collapse mobile-navbar" id="mobile-collapse">
					<ul class="nav navbar-nav">

						<li>
							<a class="" href="<?= base_url('auth/logout') ?>">Logout</a>
						</li>
						<li>
							<a class="" href="profile.html">Profile</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="navbar-right">
				<ul class="nav navbar-nav no-borders">
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">
							<i class="pe-7s-speaker"></i>
						</a>
						<ul class="dropdown-menu hdropdown notification animated flipInX">
							<li>
								<a>
									<span class="label label-success">NEW</span> It is a long established.
								</a>
							</li>
							<li>
								<a>
									<span class="label label-warning">WAR</span> There are many variations.
								</a>
							</li>
							<li>
								<a>
									<span class="label label-danger">ERR</span> Contrary to popular belief.
								</a>
							</li>
							<li class="summary"><a href="#">See all notifications</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">
							<i class="pe-7s-keypad"></i>
						</a>

						<div class="dropdown-menu hdropdown bigmenu animated flipInX">
							<table>
								<tbody>
									<tr>
										<td>
											<a href="projects.html">
												<i class="pe pe-7s-portfolio text-info"></i>
												<h5>Projects</h5>
											</a>
										</td>
										<td>
											<a href="mailbox.html">
												<i class="pe pe-7s-mail text-warning"></i>
												<h5>Email</h5>
											</a>
										</td>
										<td>
											<a href="contacts.html">
												<i class="pe pe-7s-users text-success"></i>
												<h5>Contacts</h5>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="forum.html">
												<i class="pe pe-7s-comment text-info"></i>
												<h5>Forum</h5>
											</a>
										</td>
										<td>
											<a href="analytics.html">
												<i class="pe pe-7s-graph1 text-danger"></i>
												<h5>Analytics</h5>
											</a>
										</td>
										<td>
											<a href="file_manager.html">
												<i class="pe pe-7s-box1 text-success"></i>
												<h5>Files</h5>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
							<i class="pe-7s-mail"></i>
							<span class="label label-success">4</span>
						</a>
						<ul class="dropdown-menu hdropdown animated flipInX">
							<div class="title">You have 4 new messages</div>
							<li>
								<a> It is a long established. </a>
							</li>
							<li>
								<a> There are many variations. </a>
							</li>
							<li>
								<a> Lorem Ipsum is simply dummy. </a>
							</li>
							<li>
								<a> Contrary to popular belief. </a>
							</li>
							<li class="summary"><a href="#">See All Messages</a></li>
						</ul>
					</li>
					<li>
						<a href="#" id="sidebar" class="right-sidebar-toggle">
							<i class="pe-7s-upload pe-7s-news-paper"></i>
						</a>
					</li>
					<li class="dropdown">
						<a href="<?= base_url('auth/logout') ?>">
							<i class="pe-7s-upload pe-rotate-90"></i>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<!-- Navigation -->
	<aside id="menu">
		<div id="navigation">
			<div class="profile-picture">
				<a href="index.html">

					<img src="<?= base_url('foto/' . $this->session->userdata('foto')) ?>" width="35%" class="img-circle m-b" alt="logo" />
				</a>

				<div class="stats-label text-color">
					<span class="font-extra-bold font-uppercase">Hi, Admin</span>


					<ul class="dropdown-menu animated flipInX m-t-xs">
						<li><a href="contacts.html">Contacts</a></li>
						<li><a href="profile.html">Profile</a></li>
						<li><a href="analytics.html">Analytics</a></li>
						<li class="divider"></li>
						<li><a href="login.html">Logout</a></li>
					</ul>
				</div>


			</div>
		</div>

		<ul class="nav" id="side-menu">
			<li class="active">
				<a href="<?= base_url('admin') ?>"><i class="fa fa-desktop"></i>
					<span class="nav-label">Dashboard</span>
					<span class="label label-success pull-right">v.1</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url() ?>"><span class="nav-label">Website</span><span class="fa arrow"></span>
				</a>
				<ul class="nav nav-second-level">
					<li>
						<a href="<?= base_url() ?>"><i class="fa fa-globe"></i> Website</a>
					</li>
					<li>
						<a href="<?= base_url('analytic') ?>"><i class="fa fa-pie-chart"></i> Analytic</a>
					</li>
					<li>
						<a href="<?= base_url('graphic') ?>"><i class="fa fa-area-chart"></i> Graphic</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?= base_url('form') ?>">
					<span class="nav-label"><i class="fa fa-add"></i> Create Form</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('rumah') ?>">
					<span class="nav-label"><i class="fa fa-map"></i> Data Spatial</span><span class="label label-warning pull-right">NEW</span>
				</a>
			</li>

			<li>
				<a href="<?= base_url('sosial') ?>">
					<span class="nav-label"><i class="fa fa-users"></i> Data Social</span><span class="label label-warning pull-right">NEW</span>
				</a>
			</li>

			<li>
				<a href="<?= base_url('sectoral') ?>">

					<span class="nav-label"><i class="fa fa-institution"></i> Data Sectoral</span><span class="label label-warning pull-right">NEW</span>
				</a>
			</li>

			<li>
				<a href="#"><span class="nav-label"><i class="fa fa-cogs"></i> Settings</span><span class="fa arrow"></span>
				</a>
				<ul class="nav nav-second-level">

					<li>
						<a href="<?= base_url() ?>"><i class="fa fa-globe"></i> Website</a>
					</li>
					<li>
						<a href="<?= base_url('admin') ?>"><i class="fa fa-map"></i> Pemetaan</a>
					</li>
					<li>
						<a href="<?= base_url('rumah') ?>"><i class="fa fa-location-arrow"></i> List Data</a>
					</li>


					<li>
						<a href="<?= base_url('icon') ?>"> <i class="fa fa-map-marker"></i> Icon</a>
					</li>
					<li>
						<a href="<?= base_url('user') ?>"> <i class="fa fa-user"></i> User</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?= base_url('auth/logout') ?>">
					<span class="nav-label"><i class="fa fa-unlock-alt"></i> Logout</span>
				</a>
			</li>

		</ul>
		</div>
	</aside>