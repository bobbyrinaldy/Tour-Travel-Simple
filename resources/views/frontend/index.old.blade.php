@extends('layouts/frontend/master')

@section('content')
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
							<a href="/{{$item->id}}/{{urlencode($item->nama_paket)}}">View more</a>
						</figcaption>
					</figure>
				@endforeach


					<div class="clearfix"> </div>
					</div>
</div>
@endsection