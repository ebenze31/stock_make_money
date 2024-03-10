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
	    background-image: radial-gradient(ellipse farthest-corner at right bottom, #D1B464 0%, #FFFAF0 8%, #D1B464 30%, #FFFAF0 40%, transparent 80%), radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFFF 8%, #D1B464 25%, #D1B464 62.5%, #FFFFFF 100%);
	    background-size: cover;
	    -webkit-background-clip: text;
	    background-clip: text;
	    color: transparent;
	}

	.bold-gold {
	    font-weight: bold; /* ทำให้ตัวอักษรหนาขึ้น */
	    background-image: radial-gradient(ellipse farthest-corner at right bottom, #D1B464 0%, #D1B464 8%, #D1B464 30%, #D1B464 40%, transparent 80%), radial-gradient(ellipse farthest-corner at left top, #000000 0%, #000000 8%, #000000 25%, #D1B464 62.5%, #000000 100%);
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
							<h5 class="mt-2 gold_color_text">
								<b id="name_Business">ระบบการจัดการคลังสินค้า</b>
							</h5>
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

					</nav>
				</div>
			</header>
			<!--end header -->
		</div>
		<!--end header wrapper-->

		<div style="margin-top: 40px;" class="p-5">
			@yield('content')
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
    
    <script>
		// new PerfectScrollbar('.dashboard-top-countries');
	</script>
	<!-- <script src="{{ asset('/theme_cms/js/index.js') }}"></script> -->
	<!--app JS-->
	<script src="{{ asset('/theme_cms/js/app.js') }}"></script>
</body>

</html>