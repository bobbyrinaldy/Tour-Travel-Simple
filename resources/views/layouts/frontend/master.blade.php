<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 	 ]>    <html class="ie" lang="en"> <![endif]-->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="HandheldFriendly" content="True">
	<title>IQI TOUR & TRAVEL</title>

	<link rel="stylesheet" href="{{asset('_user/css/style.css')}}" type="text/css" media="screen,projection,print" />

	<link rel="stylesheet" href="{{asset('_user/css/prettyPhoto.css')}}" type="text/css" media="screen" />
	<link rel="shortcut icon" href="favicon.ico" />

</head>
<body>
	<!--header-->
	<header>
		<div class="wrap clearfix">
			<!--logo-->
			<h1 class="logo"><a href="/" title="Book Your Travel - home"><img src="{{asset('_user/images/iqi.png')}}" width="100px" alt="Book Your Travel"  /></a></h1>
			<!--//logo-->

			<!--ribbon-->
			<div class="ribbon">
				<nav>
					<ul class="profile-nav">
						<li class="active"><a href="#" title="My Account">My Account</a></li>
						@guest
							<li><a href="{{route('login')}}" title="Login">Login</a></li>
						@endguest

						@auth
							<li>
				                <a href="{{ route('logout') }}"
				                    onclick="event.preventDefault();
				                             document.getElementById('logout-form').submit();">
				                    <span class="fa fa-sign-out"> Logout</span>
				                </a>

				                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                    {{ csrf_field() }}
				                </form>
				            </li>
						@endauth
						<li><a href="/setting" title="Settings">Settings</a></li>
					</ul>
					@guest
					<ul class="lang-nav">
						<li class="active"><a href="/register" title="Merchant">Register</a></li>
					</ul>
					@endguest

				</nav>
			</div>
			<!--//ribbon-->

			<!--search-->
			<div class="search">
				<form id="search-form" method="get" action="search-form">
					<input type="search" placeholder="Search entire site here" name="site_search" id="site_search" />
					<input type="submit" id="submit-site-search" value="submit-site-search" name="submit-site-search"/>
				</form>
			</div>
			<!--//search-->

			<!--contact-->
			<div class="contact">
				<span>24/7 Support number</span>
				<span class="number">1- 555 - 555 - 555</span>
			</div>
			<!--//contact-->
		</div>

		<!--main navigation-->
		<nav class="main-nav" role="navigation" id="nav">
			<ul class="wrap">
				<li><a href="/" title="Home">Home</a></li>
				<li><a href="#paket" title="Home" id="menu_paket">Paket Tour & Travel</a></li>
				<li><a href="hotels.html" title="Home">About Us</a></li>
				<li><a href="hotels.html" title="Home">Contact Us</a></li>

			</ul>
		</nav>
		<!--//main navigation-->
	</header>
	<!--//header-->

	<!--slider-->
	@yield('slider')
	<!--//slider-->

	<!--search-->
	=

	<!--main-->
	<div class="main" role="main">
		@yield('content')
	</div>
	<!--//main-->

	<!--footer-->
	<footer>
		<div class="wrap clearfix">
			<!--column-->
			<article class="one-fourth">
				<h3>IQI TOUR AND TRAVEL</h3>
				<p>Jl.WastukencanaNo.05,Bandung, WestJava, Indonesia.</p>
				<p><em>P:</em> 24/7 customer support: 1-555-555-5555</p>
				<p><em>E:</em> <a href="#" title="booking@mail.com">booking@mail.com</a></p>
			</article>
			<!--//column-->

			<!--column-->
			<article class="one-fourth">
				<h3>Customer support</h3>
				<ul>
					<li><a href="#" title="Faq">Faq</a></li>
					<li><a href="#" title="How do I make a reservation?">How do I make a reservation?</a></li>
					<li><a href="#" title="Payment options">Payment options</a></li>
					<li><a href="#" title="Booking tips">Booking tips</a></li>
				</ul>
			</article>
			<!--//column-->

			<!--column-->
			<article class="one-fourth">
				<h3>Follow us</h3>
				<ul class="social">
					<li class="facebook"><a href="#" title="facebook">facebook</a></li>
					<li class="youtube"><a href="#" title="youtube">youtube</a></li>
					<li class="rss"><a href="#" title="rss">rss</a></li>
					<li class="linkedin"><a href="#" title="linkedin">linkedin</a></li>
					<li class="googleplus"><a href="#" title="googleplus">googleplus</a></li>
					<li class="twitter"><a href="#" title="twitter">twitter</a></li>
					<li class="vimeo"><a href="#" title="vimeo">vimeo</a></li>
					<li class="pinterest"><a href="#" title="pinterest">pinterest</a></li>
				</ul>
			</article>
			<!--//column-->

			<!--column-->
			<article class="one-fourth last">
				<h3>Don’t miss our exclusive offers</h3>
				<form id="newsletter" action="newsletter.php" method="post">
					<fieldset>
						<input type="email" id="newsletter_signup" name="newsletter_signup" placeholder="Enter your email here" />
						<input type="submit" id="newsletter_submit" name="newsletter_submit" value="Signup" class="gradient-button" />
					</fieldset>
				</form>
			</article>
			<!--//column-->

			<section class="bottom">
				<p class="copy">Copyright 2017. All rights reserved</p>
				<nav>
					<ul>
						<li><a href="#" title="About us">About us</a></li>
						<li><a href="contact.html" title="Contact">Contact</a></li>
						<li><a href="#" title="Partners">Partners</a></li>
						<li><a href="#" title="Customer service">Customer service</a></li>
						<li><a href="#" title="FAQ">FAQ</a></li>
						<li><a href="#" title="Careers">Careers</a></li>
						<li><a href="#" title="Terms & Conditions">Terms &amp; Conditions</a></li>
						<li><a href="#" title="Privacy statement">Privacy statement</a></li>
					</ul>
				</nav>
			</section>
		</div>
	</footer>
	<!--//footer-->

</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{{asset('_user/js/css3-mediaqueries.js')}}"></script>
	<script type="text/javascript" src="{{asset('_user/js/sequence.jquery-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('_user/js/jquery.uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('_user/js/jquery.prettyPhoto.js')}}"></script>
	<script type="text/javascript" src="{{asset('_user/js/infobox.js')}}"></script>
	<script type="text/javascript" src="{{asset('_user/js/sequence.js')}}"></script>
	<script type="text/javascript" src="{{asset('_user/js/selectnav.js')}}"></script>
	<script type="text/javascript" src="{{asset('_user/js/scripts.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			function initialize() {
		var secheltLoc = new google.maps.LatLng(49.47216, -123.76307);

		var myMapOptions = {
			 zoom: 15
			,center: secheltLoc
			,mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);


		var marker = new google.maps.Marker({
			map: theMap,
			draggable: true,
			position: new google.maps.LatLng(49.47216, -123.76307),
			visible: true
		});

		var boxText = document.createElement("div");
		boxText.innerHTML = "<strong>Best ipsum hotel</strong><br />1400 Pennsylvania Ave,<br />Washington DC<br />www.bestipsumhotel.com";

		var myOptions = {
			 content: boxText
			,disableAutoPan: false
			,maxWidth: 0
			,pixelOffset: new google.maps.Size(-140, 0)
			,zIndex: null
			,closeBoxURL: ""
			,infoBoxClearance: new google.maps.Size(1, 1)
			,isHidden: false
			,pane: "floatPane"
			,enableEventPropagation: false
		};

		google.maps.event.addListener(marker, "click", function (e) {
			ib.open(theMap, this);
		});

		var ib = new InfoBox(myOptions);
		ib.open(theMap, marker);
	}

			$("#menu_paket").click(function() {
			    $('html, body').animate({
			        scrollTop: $("#paket").offset().top
			    }, 1500);
			});
			$(".form").hide();
			$(".form:first").show();
			$(".f-item:first").addClass("active");
			$(".f-item:first span").addClass("checked");
		});
	</script>

	<script>
		// Initiate selectnav function
		selectnav();
	</script>
</html>
