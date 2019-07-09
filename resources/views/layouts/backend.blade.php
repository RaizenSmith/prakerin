<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 02:21:35 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>QuantumPro | Dashboard</title>
	<!-- ================== GOOGLE FONTS ==================-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<!-- ======================= GLOBAL VENDOR STYLES ========================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/vendor/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/metismenu/dist/metisMenu.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/switchery-npm/index.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
	<!-- ======================= LINE AWESOME ICONS ===========================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/icons/line-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/icons/simple-line-icons.css')}}">
	<!-- ======================= DRIP ICONS ===================================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/icons/dripicons.min.css')}}">
	<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/icons/material-design-iconic-font.min.css')}}">
	<!-- ======================= PAGE VENDOR STYLES ===========================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
	<!-- ======================= GLOBAL COMMON STYLES ============================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/common/main.bundle.css')}}">
	<!-- ======================= LAYOUT TYPE ===========================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/layouts/vertical/core/main.css')}}">
	<!-- ======================= MENU TYPE ===========================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/layouts/vertical/menu-type/default.css')}}">
	<!-- ======================= THEME COLOR STYLES ===========================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/layouts/vertical/themes/theme-a.css')}}">
</head>
<body>
	<!-- START APP WRAPPER -->
	<div id="app">
		<!-- START MENU SIDEBAR WRAPPER -->
		@include('layouts.backend.sidebar')
		<!-- END MENU SIDEBAR WRAPPER -->
		<div class="content-wrapper">
			<!-- START LOGO WRAPPER -->
			@include('layouts.backend.navbar')
			<!-- END TOP TOOLBAR WRAPPER -->
			<div class="content">
			<!--START PAGE HEADER -->
            <!--END PAGE HEADER -->
			<!--START PAGE CONTENT -->
			<section class="page-content container-fluid">
            @yield('content')
            </section>
			<!--END PAGE CONTENT -->
			</div>
				<!-- SIDEBAR QUICK PANNEL WRAPPER -->
				@include('layouts.backend.quick')
				<!-- END SIDEBAR QUICK PANNEL WRAPPER -->
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
            <!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
			<script src="{{ asset('assets/backend/assets/vendor/modernizr/modernizr.custom.js')}}"></script>
            <script src="{{ asset('assets/backend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/js-storage/js.storage.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/js-cookie/src/js.cookie.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/pace/pace.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/metismenu/dist/metisMenu.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/switchery-npm/index.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
			<!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
			<script src="{{ asset('assets/backend/assets/vendor/countup.js/dist/countUp.min.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/chart.js/dist/Chart.bundle.min.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/flot/jquery.flot.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/flot/jquery.flot.resize.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/flot/jquery.flot.time.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/flot.curvedlines/curvedLines.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
			<!-- ================== GLOBAL APP SCRIPTS ==================-->
			<script src="{{ asset('assets/backend/assets/js/global/app.js')}}"></script>
			<!-- ================== PAGE LEVEL SCRIPTS ==================-->
			<script src="{{ asset('assets/backend/assets/js/components/countUp-init.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/js/cards/counter-group.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/js/cards/recent-transactions.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/js/cards/monthly-budget.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/js/cards/users-chart.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/js/cards/bounce-rate-chart.js')}}"></script>
			<script src="{{ asset('assets/backend/assets/js/cards/session-duration-chart.js')}}"></script>
			<script> (function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-46627904-1', 'authenticgoods.co');
		ga('send', 'pageview');
    </script>
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/kategori.js') }}"></script>
    <script src="{{ asset('js/tag.js') }}"></script>
    @stack('script')
</body>

<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 02:27:43 GMT -->
</html>
