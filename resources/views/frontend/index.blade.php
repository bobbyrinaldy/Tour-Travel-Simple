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
			  <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(".top-nav ul").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
<div class="banner">
<script src="{{asset('_user/js/responsiveslides.min.js')}}"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="slider">

		   <div class="container">
			  <ul class="rslides" id="slider">
				 <li>
					<div class="banner-info">
						<h2>Liburan Murah</h2>
						<p>Paket liburan dengan biaya yang sangat terjangkau</p>
					</div>
				 </li>
				 <li>
					 <div class="banner-info">
						<h2>Fasilitas Lengkap</h2>
						<p>Fasilitas liburan yang sangat lengkap seperti transportasi, hotel dan makanannya.</p>
					</div>
				 </li>
				 <li>
					 <div class="banner-info">
						<h2>Pelayanan yang baik</h2>
						<p>Pelayanan selama 24Jam penuh melayani semua saran dan keluhan.</p>
					</div>
				 </li>
			  </ul>
		  </div>
</div>


</div>
<!--/header-->
<div class="banner-bottom-strip">
	<div class="container">
		<h3>IQI Tour & Travel</h3>
		<p>travel agent terdepan di Indonesia. Dengan kantor - kantor cabang yang tersebar di Indonesia , kami hadir untuk menjadi pintu gerbang Anda menuju destinasi yang luar biasa.
  memiliki berbagai layanan perjalanan dan wisata yang terpadu seperti: <br>Reservasi Hotel, Tiket penerbangan domestik dan internasional, tour, cruise, paket, corporate incentive and ticketing sampai Dokumen perjalanan.</p>
	</div>
</div>
<div class="welcome">
	<div class="container">
		<h3>Welcome</h3>
    <br>
	</div>
</div>
<!--works start here-->
<div class="work">
	<div class="container">
		<div class="work-main">
			   <div class="col-md-6 work-wrapper">
							<a href="{{asset('_user/images/a1.jpg')}}" class="b-link-stripe b-animate-go  swipebox"  title="Awesome Trip">
						     <img src="{{asset('_user/images/a1.jpg')}}" alt="" class="img-responsive"><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03"><i class="glyphicon glyphicon-zoom-in"> </i> </h2>
						  		</div></a>
						  									<a href="{{asset('_user/images/a3.jpg')}}" class="b-link-stripe b-animate-go  swipebox"  title="Awesome Trip">
						     <img src="{{asset('_user/images/a3.jpg')}}" alt="" class="img-responsive"><div class="b-wrapper1"><h2 class="b-animate b-from-left    b-delay03"><i class="glyphicon glyphicon-zoom-in"> </i></h2>
						  		</div></a>
			   </div>
			   <div class="col-md-6 work-wrapper">
							<a href="{{asset('_user/images/a2.jpg')}}" class="b-link-stripe b-animate-go  swipebox"  title="Awesome Trip">
						     <img src="{{asset('_user/images/a2.jpg')}}" alt="" class="img-responsive"><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03"><i class="glyphicon glyphicon-zoom-in"> </i></h2>
						  		</div></a>
						  					   <div class="work wrk1">
                         <div class="work-details wrk">
					   	  <h3><i class="glyphicon glyphicon-chevron-up"> </i>Mengapa IQI Tour & Travel ?</h3>
					   	 <p>"Komitmen dan dedikasi kami bertujuan untuk memberikan pengalaman perjalanan yang terbaik untuk anda."</p>
					   </div>
			   </div>
			   </div>

			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<link rel="stylesheet" href="{{asset('_user/css/swipebox.css')}}">
	<script src="{{asset('_user/js/jquery.swipebox.min.js')}}"></script>
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>
<!--works end here-->
<!--effect-gird-->
<div class="container">
<div class="grid">
	<h4 id="paket">Paket Travel</h4>
			@foreach ($paket as $item)
					<figure class="effect-julia">
						<img src="{{Storage::url('paket/'.$item->image)}}" alt="img21"/>
						<figcaption>
							<h2><span>{{$item->nama_paket}}</span></h2>
							<div>
								<p>Harga Mulai <span class="label label-success">Rp.{{number_format($item->harga)}}</span></p>
								<p>Hotel dan Transportasi</p>
                <p>Banyak Tempat Kunjungan</p>
                <p>Banyak Tempat Wisata</p>
							</div>
							<a href="#">View more</a>
						</figcaption>
					</figure>
				@endforeach


					<div class="clearfix"> </div>
					</div>
</div>
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
