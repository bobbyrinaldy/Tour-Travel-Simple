<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>IQI TOUR AND TRAVEL</title>
<!--css-->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('/_user/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('/_user/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--/css-->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- js -->
<script src="{{asset('_user/js/jquery.min.js')}}"> </script>
<script src="{{asset('_user/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('_user/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('_user/js/easing.js')}}"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
<body>
<!--header-->
<div class="header">
<div class="header-nav">
	<div class="container">
		<div class="logo">
			<a href="index.html">
			<h1 style="text-shadow: -2px 3px yellow">IQI TOUR & TRAVEL</h1></a>
		</div>
		<div class="navigation">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					  </button>
					</div>
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#paket" id="menu_paket">Paket</a></li>
						<li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            @Auth
            <li><a href="/login"><span class="fa fa-shopping-cart"> Keranjang</span> </a></li>
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

            @guest
						<li><a href="/login"><span class="fa fa-sign-in"> Login</span></a></li>
            @endguest
					  </ul>
			  <div class="clearfix"> </div>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
	</div>
	</div>
</div>

<div>
	@yield('content')

</div>
			  <!-- script-for-menu -->
		 
<!--/effect-gird-->
<br><br>
<!--footer-->
 <div class="footer">
			 <div class="container">
				 <div class="col-md-3 ftr_navi ftr">
					 <h3>Navigation</h3>
					 <ul>
						 <li><a href="index.html">Home</a></li>
						 <li><a href="about.html">About</a></li>
						 <li><a href="gallery.html">Gallery</a></li>
						 <li><a href="blog.html">Blog</a></li>
						 <li><a href="contact.html">Contact</a></li>
					 </ul>
				 </div>
				 <div class="col-md-3 ftr_navi ftr">
					 <h3>Members</h3>
					 <ul>
						 <li><a href="#">Customer Support</a></li>
						 <li><a href="#">Platinum Support</a></li>
						 <li><a href="#">Gold Support</a></li>
						 <li><a href="#">Standard Support</a></li>
						 <li><a href="#">Training</a></li>
					 </ul>
				 </div>
				 <div class="col-md-3 get_in_touch ftr">
					  <h3>Get In Touch</h3>
					  <p>Ola-ola street jump,</p>
					  <p>260-14 City, Country</p>
					  <p>+62 000-0000-00</p>
					  <a href="mailto:mail@mlampah.com">www.example.com</a>
				 </div>
				 <div class="col-md-3 ftr-logo">
					 <a href="index.html"><h3>Travels</h3></a>
					  <p>© 2015 Travels. All rights  Reserved | Design by &nbsp;<a href="http://w3layouts.com">W3Layouts</a></p>
				 </div>
				<div class="clearfix"> </div>
			 </div>
		  </div>
<!--footer-->
		 <!---End-container---->
		 <!---->
<script type="text/javascript">
		$(document).ready(function() {

			$("#menu_paket").click(function() {
			    $('html, body').animate({
			        scrollTop: $("#paket").offset().top
			    }, 1000);
			});
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});

</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
</body>
</html>
