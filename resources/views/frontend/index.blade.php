@extends('layouts.frontend.master')

@section('slider')
	<section class="slider clearfix">
		<div id="sequence">
			<ul>
				<li>
					<div class="info animate-in" style="position: relative;top: 500px">
						<h2>Last minute Winter escapes</h2><br />
						<p>January 2013 holidays 40% off! An unique opportunity to realize your dreams</p>
					</div>
					<img class="main-image animate-in" src="{{asset('_user/images/slider/image1.jpg')}}" alt="" />
				</li>
				<li>
					<div class="info animate-in" style="position: relative;top: 500px">
						<h2>Check out our top weekly deals</h2><br />
						<p>Save Now. Book Later.</p>
					</div>
					<img class="main-image animate-in" src="{{asset('_user/images/slider/image2.jpg')}}" alt="" />
				</li>
				<li>
					<div class="info animate-in" style="position: relative;top: 500px">
						<h2>Check out last minute flight, hotel &amp; vacation offers!</h2><br />
						<p>Save up to 50%!</p>
					</div>
					<img class="main-image animate-in" src="{{asset('_user/images/slider/image3.jpg')}}" alt="" />
				</li>
			</ul>
		</div>
	</section>
@endsection

@section('content')
	<div class="wrap clearfix">
			<!--top destinations-->
			<section class="full" id="paket">
			<h1>Most popular Flights</h1>
			<div class="deals clearfix">
				<!--deal-->
				@foreach ($paket as $item)
					{{-- expr --}}
					<article class="one-fourth">
						<figure><a href="#" title=""><img src="{{Storage::url('paket/'.$item->image)}}" alt="" width="270" height="152" /></a></figure>
						<div class="details">
							<h1>{{$item->tujuan}}</h1>
							<span class="price"><p>{{$item->nama_paket}}</p> <em style="font-size: 15px">IDR {{number_format($item->harga)}}</em>  </span>
							<a href="/post/detail/{{$item->id}}" title="Book now" class="gradient-button">Book now</a>
						</div>
					</article>
				@endforeach

			</section>


			<!--//info boxes-->
		</div>
@endsection