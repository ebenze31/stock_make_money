<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('/theme_cms/images/logo/logo main.jpg') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('/theme_cms/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('/theme_cms/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('/theme_cms/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet" />
	<link href="{{ asset('/theme_cms/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/theme_cms/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('/theme_cms/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('/theme_cms/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('/theme_cms/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('/theme_cms/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/theme_cms/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('/theme_cms/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('/theme_cms/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('/theme_cms/css/header-colors.css') }}" />

	<!-- fontawesome icon -->
	<link href="https://kit-pro.fontawesome.com/releases/v6.2.1/css/pro.min.css" rel="stylesheet">

	<title>ระบบการจัดการคลังสินค้า</title>
</head>

<style>
	.gold_color_text {
	    /* สไตล์ข้อความ */
	    background-image: radial-gradient(ellipse farthest-corner at right bottom, #D1B464 0%, #FFFAF0 8%, #D1B464 30%, #FFFAF0 40%, transparent 80%), radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFFF 8%, #D1B464 25%, #FFFFFF 62.5%, #FFFFFF 100%);
	    background-size: cover;
	    -webkit-background-clip: text;
	    background-clip: text;
	    color: transparent;
	}

</style>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--start header wrapper-->	
		<div class="header-wrapper">
			<!--start header -->
			<header>
				<div class="topbar d-flex align-items-center">
					<nav class="navbar navbar-expand bg-gradient-moonlit">
						<div class="topbar-logo-header">
							<div class="">
								<img src="{{ asset('/theme_cms/images/logo/logo long.png') }}" class="logo-icon" alt="logo icon" style="width:120px;">
							</div>
							<div class="">
								<!-- <h4 class="logo-text">Synadmin</h4> -->
							</div>
						</div>
						<div class="mobile-toggle-menu">
							<i class='bx bx-menu'></i>
						</div>

						<!-- icon บนซ้าย -->
						<div class="top-menu-left d-none d-lg-block ps-3">
							<h5 class="mt-2 gold_color_text"><b>ระบบการจัดการคลังสินค้า</b></h5>
							<ul class="nav d-none">
							  <li class="nav-item">
								<a class="nav-link" href="app-emailbox.html"><i class='bx bx-envelope'></i></a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="app-chat-box.html"><i class='bx bx-message'></i></a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="app-fullcalender.html"><i class='bx bx-calendar'></i></a>
							  </li>
							  <li class="nav-item">
								  <a class="nav-link" href="app-to-do.html"><i class='bx bx-check-square'></i></a>
							  </li>
						  </ul>
						</div>

						<div class="search-bar flex-grow-1">
							<div class="position-relative search-bar-box">
								<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
								<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
							</div>
						</div>

						<!-- icon บนขวา -->
						<div class="top-menu ms-auto">
							<ul class="navbar-nav align-items-center">
								<li class="nav-item mobile-search-icon">
									
								</li>
								<li class="nav-item dropdown dropdown-large d-none">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
										<i class='bx bx-bell'></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="javascript:;">
											<div class="msg-header">
												<p class="msg-header-title">Notifications</p>
												<p class="msg-header-clear ms-auto">Marks all as read</p>
											</div>
										</a>
										<div class="header-notifications-list">
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
													ago</span></h6>
														<p class="msg-info">5 new user registered</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
													ago</span></h6>
														<p class="msg-info">You have recived new orders</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
													ago</span></h6>
														<p class="msg-info">The pdf files generated</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
													ago</span></h6>
														<p class="msg-info">5.1 min avarage time response</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">New Product Approved <span
													class="msg-time float-end">2 hrs ago</span></h6>
														<p class="msg-info">Your new product has approved</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
													ago</span></h6>
														<p class="msg-info">New customer comments recived</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
													ago</span></h6>
														<p class="msg-info">Successfully shipped your item</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
													ago</span></h6>
														<p class="msg-info">24 new authors joined last week</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
													ago</span></h6>
														<p class="msg-info">45% less alerts last 4 weeks</p>
													</div>
												</div>
											</a>
										</div>
										<a href="javascript:;">
											<div class="text-center msg-footer">View All Notifications</div>
										</a>
									</div>
								</li>
								<li class="nav-item dropdown dropdown-large d-none">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
										<i class='bx bx-comment'></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="javascript:;">
											<div class="msg-header">
												<p class="msg-header-title">Messages</p>
												<p class="msg-header-clear ms-auto">Marks all as read</p>
											</div>
										</a>
										<div class="header-message-list">
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
													ago</span></h6>
														<p class="msg-info">The standard chunk of lorem</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
													sec ago</span></h6>
														<p class="msg-info">Many desktop publishing packages</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
													ago</span></h6>
														<p class="msg-info">Various versions have evolved over</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
													min ago</span></h6>
														<p class="msg-info">Making this the first true generator</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
													ago</span></h6>
														<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
													ago</span></h6>
														<p class="msg-info">The passage is attributed to an unknown</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
													ago</span></h6>
														<p class="msg-info">The point of using Lorem</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
													ago</span></h6>
														<p class="msg-info">It was popularised in the 1960s</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
													ago</span></h6>
														<p class="msg-info">Various versions have evolved over</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
													ago</span></h6>
														<p class="msg-info">If you are going to use a passage</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
													ago</span></h6>
														<p class="msg-info">All the Lorem Ipsum generators</p>
													</div>
												</div>
											</a>
										</div>
										<a href="javascript:;">
											<div class="text-center msg-footer">View All Messages</div>
										</a>
									</div>
								</li>
							</ul>
						</div>

						<!-- profile ขวาบน -->
						<div class="user-box dropdown">
							<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="{{ asset('/theme_cms//images/avatars/avatar-2.png') }}" class="user-img" alt="user avatar">
								<div class="user-info ps-3">
									<p class="user-name mb-0 text-white">Pauline Seitz</p>
									<p class="designattion mb-0 text-white">Web Designer</p>
								</div>
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
								</li>
								<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
								</li>
								<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
								</li>
								<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
								</li>
								<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
								</li>
								<li>
									<div class="dropdown-divider mb-0"></div>
								</li>
								<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
			<!--end header -->

			<!--navigation-->
			<div class="nav-container">
				<!-- LOGO mobile -->
				<div class="mobile-topbar-header bg-gradient-moonlit">
					<div>
						<img src="{{ asset('/theme_cms/images/logo/logo long.png') }}" class="logo-icon" alt="logo icon" style="width:120px;">
					</div>
					<div>
						<!-- <h4 class="logo-text">Synadmin</h4> -->
					</div>
					<div class="toggle-icon ms-auto">
						<i class="fa-solid fa-caret-left text-white"></i>
					</div>
				</div>

				<!-- เมนู -->
				<nav class="topbar-nav">
					<ul class="metismenu" id="menu">
						<li>
							<a href="{{ url('/dashboard') }}" class="">
								<div class="parent-icon">
									<i class='bx bx-home-circle'></i>
								</div>
								<div class="menu-title">Dashboard</div>
							</a>
						</li>
						<li>
							<a href="javascript:;" class="has-arrow">
								<div class="parent-icon">
									<i class="bx bx-category"></i>
								</div>
								<div class="menu-title">คลังสินค้า</div>
							</a>
							<ul>
								<li>
									<a href="app-emailbox.html">
										<i class="bx bx-right-arrow-alt"></i>รายการคงเหลือ
									</a>
								</li>
								<li>
									<a href="app-emailbox.html">
										<i class="bx bx-right-arrow-alt"></i>รายการเข้า
									</a>
								</li>
								<li>
									<a href="app-chat-box.html">
										<i class="bx bx-right-arrow-alt"></i>รายการออก
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="" href="{{ url('/expense_list') }}">
								<div class="parent-icon">
									<i class="bx bx-line-chart"></i>
								</div>
								<div class="menu-title">รายรับ-รายจ่าย</div>
							</a>
						</li>
						<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon">
									<i class='bx bx-bookmark-heart'></i>
								</div>
								<div class="menu-title">รายงาน</div>
							</a>
							<ul>
								<li> <a href="widgets.html"><i class="bx bx-right-arrow-alt"></i>Widgets</a>
								</li>
								<li> <a href="component-alerts.html"><i class="bx bx-right-arrow-alt"></i>Alerts</a>
								</li>
								<li> <a href="component-accordions.html"><i class="bx bx-right-arrow-alt"></i>Accordions</a>
								</li>
								<li> <a href="component-buttons.html"><i class="bx bx-right-arrow-alt"></i>Buttons</a>
								</li>
								<li> <a href="component-cards.html"><i class="bx bx-right-arrow-alt"></i>Cards</a>
								</li>
								<li> <a href="component-list-groups.html"><i class="bx bx-right-arrow-alt"></i>List Groups</a>
								</li>
								<li> <a href="component-media-object.html"><i class="bx bx-right-arrow-alt"></i>Media Objects</a>
								</li>
								<li> <a href="component-modals.html"><i class="bx bx-right-arrow-alt"></i>Modals</a>
								</li>
								<li> <a href="component-navs-tabs.html"><i class="bx bx-right-arrow-alt"></i>Navs & Tabs</a>
								</li>
								<li> <a href="component-navbar.html"><i class="bx bx-right-arrow-alt"></i>Navbar</a>
								</li>
								<li> <a href="component-popovers-tooltips.html"><i class="bx bx-right-arrow-alt"></i>Popovers & Tooltips</a>
								</li>
								<li> <a href="component-progress-bars.html"><i class="bx bx-right-arrow-alt"></i>Progress</a>
								</li>
								<li> <a href="component-spinners.html"><i class="bx bx-right-arrow-alt"></i>Spinners</a>
								</li>
								<li> <a href="component-notifications.html"><i class="bx bx-right-arrow-alt"></i>Notifications</a>
								</li>
								<li> <a href="component-avtars-chips.html"><i class="bx bx-right-arrow-alt"></i>Avatrs & Chips</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon">
									<i class="bx bx-lock"></i>
								</div>
								<div class="menu-title">การจัดการ</div>
							</a>
							<ul>
								<li> <a href="authentication-signin.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In</a>
								</li>
								<li> <a href="authentication-signup.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up</a>
								</li>
								<li> <a href="authentication-signin-with-header-footer.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In with Header & Footer</a>
								</li>
								<li> <a href="authentication-signup-with-header-footer.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up with Header & Footer</a>
								</li>
								<li> <a href="authentication-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Forgot Password</a>
								</li>
								<li> <a href="authentication-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Reset Password</a>
								</li>
								<li> <a href="authentication-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Lock Screen</a>
								</li>
							</ul>
						</li>
						<li class="d-none">
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon icon-color-6"> <i class="bx bx-donate-blood"></i>
								</div>
								<div class="menu-title">Pages</div>
							</a>
							<ul>
								<li> <a href="user-profile.html"><i class="bx bx-right-arrow-alt"></i>User Profile</a>
								</li>
								<li> <a href="timeline.html"><i class="bx bx-right-arrow-alt"></i>Timeline</a>
								</li>
								<li> <a href="pricing-table.html"><i class="bx bx-right-arrow-alt"></i>Pricing</a>
								</li>
								<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Errors</a>
									<ul>
										<li> <a href="errors-404-error.html"><i class="bx bx-right-arrow-alt"></i>404 Error</a>
										</li>
										<li> <a href="errors-500-error.html"><i class="bx bx-right-arrow-alt"></i>500 Error</a>
										</li>
										<li> <a href="errors-coming-soon.html"><i class="bx bx-right-arrow-alt"></i>Coming Soon</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="d-none">
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
								</div>
								<div class="menu-title">Forms</div>
							</a>
							<ul>
								<li> <a href="form-elements.html"><i class="bx bx-right-arrow-alt"></i>Form Elements</a>
								</li>
								<li> <a href="form-input-group.html"><i class="bx bx-right-arrow-alt"></i>Input Groups</a>
								</li>
								<li> <a href="form-layouts.html"><i class="bx bx-right-arrow-alt"></i>Forms Layouts</a>
								</li>
								<li> <a href="form-validations.html"><i class="bx bx-right-arrow-alt"></i>Form Validation</a>
								</li>
								<li> <a href="form-wizard.html"><i class="bx bx-right-arrow-alt"></i>Form Wizard</a>
								</li>
								<li> <a href="form-text-editor.html"><i class="bx bx-right-arrow-alt"></i>Text Editor</a>
								</li>
								<li> <a href="form-file-upload.html"><i class="bx bx-right-arrow-alt"></i>File Upload</a>
								</li>
								<li> <a href="form-date-time-pickes.html"><i class="bx bx-right-arrow-alt"></i>Date Pickers</a>
								</li>
								<li> <a href="form-select2.html"><i class="bx bx-right-arrow-alt"></i>Select2</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!--end navigation-->
		</div>
		<!--end header wrapper-->

		<div class="card page-wrapper">
			<div class="card-body page-content mt-3">
				@yield('content')
			</div>
		</div>

		<footer class="page-footer">
			<p class="mb-0">
				Power By <img src="{{ asset('/theme_cms/images/logo/logo BT 1.png') }}" class="user-img" style="width:20px;height: 20px;"> <u><b>BT AtOneGo</b><u>
				</p>
		</footer>
	</div>
	<!--end wrapper-->

	<!-- Bootstrap JS -->
	<script src="{{ asset('/theme_cms/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('/theme_cms/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/theme_cms/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('/theme_cms/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('/theme_cms/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('/theme_cms/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
	<script src="{{ asset('/theme_cms/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('/theme_cms/plugins/highcharts/js/highcharts.js') }}"></script>
	<script src="{{ asset('/theme_cms/plugins/highcharts/js/exporting.js') }}"></script>
	<script src="{{ asset('/theme_cms/plugins/highcharts/js/variable-pie.js') }}"></script>
	<script src="{{ asset('/theme_cms/plugins/highcharts/js/export-data.js') }}"></script>
	<script src="{{ asset('/theme_cms/plugins/highcharts/js/accessibility.js') }}"></script>
	<script src="{{ asset('/theme_cms/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script>
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
	<script src="{{ asset('/theme_cms/js/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('/theme_cms/js/app.js') }}"></script>
</body>

</html>