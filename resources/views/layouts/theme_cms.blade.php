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

						<!-- icon บนขวา -->
						<div class="top-menu ms-auto">
							<ul class="navbar-nav align-items-center">
								<li class="nav-item dropdown dropdown-large d-none">
									<div class="dropdown-menu dropdown-menu-end">
										<div class="header-notifications-list">
											<!--  -->
										</div>
									</div>
								</li>
								<li class="nav-item dropdown dropdown-large d-none">
									<div class="dropdown-menu dropdown-menu-end">
										<div class="header-message-list">
											<!--  -->
										</div>
									</div>
								</li>
							</ul>
						</div>

						<!-- profile ขวาบน -->
						<div class="user-box dropdown">
							<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								@if( !empty(Auth::user()->photo) )
									<img src="{{ url('storage')}}/{{ Auth::user()->photo }}" class="user-img" alt="user avatar">
								@else
									<img src="{{ asset('/theme_cms/images/icons/user.png') }}" class="user-img" alt="user avatar">
								@endif
								<div class="user-info ps-3">
									<p class="user-name mb-0 text-white">{{ Auth::user()->name }}</p>
									@php
										$role_status = "";
										if(Auth::user()->role == "member"){
											$role_status = "พนักงาน";
										}
										else if(Auth::user()->role == "host-member"){
											$role_status = "เจ้าของกิจการ";
										}
									@endphp
									<p class="designattion mb-0 text-white">
										{{ $role_status }}
									</p>
								</div>
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="javascript:;">
										<i class="bx bx-user"></i><span>โปรไฟล์</span>
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:;">
										<i class="fa-duotone fa-repeat"></i><span>เปลี่ยนกิจการ</span>
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:;">
										<i class="fa-solid fa-plus"></i><span>เพิ่มกิจการใหม่</span>
									</a>
								</li>
								<li>
									<div class="dropdown-divider mb-0"></div>
								</li>
								<li>
									<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class='bx bx-log-out-circle'></i><span>ออกจากระบบ</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
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
						            <i id="icon_menu_1" class='bx bx-home-circle'></i>
						        </div>
						        <div id="name_menu_1" class="menu-title">Dashboard</div>
						    </a>
						</li>
						<li>
							<a class="" href="{{ url('/expense_list') }}">
								<div class="parent-icon">
									<i id="icon_menu_2" class="bx bx-line-chart"></i>
								</div>
								<div id="name_menu_2" class="menu-title">รายรับ-รายจ่าย</div>
							</a>
						</li>
						<li>
							<a href="javascript:;" class="has-arrow">
								<div class="parent-icon">
									<i id="icon_menu_3" class="bx bx-category"></i>
								</div>
								<div id="name_menu_3" class="menu-title">คลังสินค้า</div>
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
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon">
									<i id="icon_menu_4" class="fa-solid fa-file-excel"></i>
								</div>
								<div id="name_menu_4" class="menu-title">รายงาน (Export Excel)</div>
							</a>
							<ul>
								<li>
									<a href="widgets.html">
										<i class="bx bx-right-arrow-alt"></i>รายงานคลังสินค้า
									</a>
								</li>
								<li>
									<a href="widgets.html">
										<i class="bx bx-right-arrow-alt"></i>รายงานรายรับ-รายจ่าย
									</a>
								</li>
								<li>
									<a href="widgets.html">
										<i class="bx bx-right-arrow-alt"></i>รายงานข้อมูลสมาชิก
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon">
									<i id="icon_menu_5" class="fa-regular fa-users-gear"></i>
								</div>
								<div id="name_menu_5" class="menu-title">การจัดการ</div>
							</a>
							<ul>
								<li>
									<a href="authentication-signin.html">
										<i class="bx bx-right-arrow-alt"></i>แก้ไขข้อมูลกิจการ
									</a>
								</li>
								<li>
									<a href="authentication-signin.html">
										<i class="bx bx-right-arrow-alt"></i>การจัดการสมาชิก
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!--end navigation-->
		</div>
		<!--end header wrapper-->

		<div class="page-wrapper">
			<div class="page-content mt-3">
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


	<script>
		document.addEventListener('DOMContentLoaded', (event) => {
	        // console.log("START");
	        check_url_menu();
	    });

	    function check_url_menu() {
	    	
	    	document.querySelector('#icon_menu_1').classList.remove('bold-gold');
	    	document.querySelector('#name_menu_1').classList.remove('bold-gold');
	    	document.querySelector('#icon_menu_2').classList.remove('bold-gold');
	    	document.querySelector('#name_menu_2').classList.remove('bold-gold');
	    	document.querySelector('#icon_menu_3').classList.remove('bold-gold');
	    	document.querySelector('#name_menu_3').classList.remove('bold-gold');
	    	document.querySelector('#icon_menu_4').classList.remove('bold-gold');
	    	document.querySelector('#name_menu_4').classList.remove('bold-gold');
	    	document.querySelector('#icon_menu_5').classList.remove('bold-gold');
	    	document.querySelector('#name_menu_5').classList.remove('bold-gold');

	    	let full_url = "{{ url()->full() }}";
	    	let sp_url = full_url.split('/');
	    	let url_menu = sp_url[sp_url.length - 1];
	    	// console.log(url_menu);

	    	let menu_1 = ['dashboard'];
	    	let menu_2 = ['aa','ss'];
	    	let menu_3 = ['sscs','ss'];
	    	let menu_4 = ['dd','ss'];
	    	let menu_5 = ['nhn','ss'];

	    	if(menu_1.includes(url_menu)){
	    		document.querySelector('#icon_menu_1').classList.add('bold-gold');
	    		document.querySelector('#name_menu_1').classList.add('bold-gold');
	    	}
	    	if(menu_2.includes(url_menu)){
	    		document.querySelector('#icon_menu_1').classList.add('bold-gold');
	    		document.querySelector('#name_menu_1').classList.add('bold-gold');
	    	}
	    	if(menu_3.includes(url_menu)){
	    		document.querySelector('#icon_menu_1').classList.add('bold-gold');
	    		document.querySelector('#name_menu_1').classList.add('bold-gold');
	    	}
	    	if(menu_4.includes(url_menu)){
	    		document.querySelector('#icon_menu_1').classList.add('bold-gold');
	    		document.querySelector('#name_menu_1').classList.add('bold-gold');
	    	}
	    	if(menu_5.includes(url_menu)){
	    		document.querySelector('#icon_menu_1').classList.add('bold-gold');
	    		document.querySelector('#name_menu_1').classList.add('bold-gold');
	    	}

	    }
	</script>

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