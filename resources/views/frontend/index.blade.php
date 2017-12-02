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


			<section class="boxes clearfix">
				<!--column-->
				<article class="one-fourth">
					<h2>Handpicked Hotels</h2>
					<p>All Book Your Travel Hotels fulfil strict selection criteria. Each hotel is chosen individually and inclusion cannot be bought. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Detailed Descriptions</h2>
					<p>To give you an accurate impression of the hotel, we endeavor to publish transparent, balanced and precise hotel descriptions. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Exclusive Knowledge</h2>
					<p>We’ve done our research. Our scouts are always busy finding out more about our hotels, the surroundings and activities on offer nearby.</p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<h2>Passionate Service</h2>
					<p>Book Your Travels’s team will cater to your special requests. We offer expert and passionate advice for finding the right hotel. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Best Price Guarantee</h2>
					<p>We offer the best hotels at the best prices. If you find the same room category on the same dates cheaper elsewhere, we will refund the difference. Guaranteed, and quickly. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Secure Booking</h2>
					<p>Book Your Travel reservation system is secure and your credit card and personal information is encrypted.<br />We work to high standards and guarantee your privacy. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Benefits for Hoteliers</h2>
					<p>We provide a cost-effective model, a network of over 5000 partners and a personalised account management service to help you optimise your revenue.</p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<h2>Any Questions?</h2>
					<p>Call us on <em>1-555-555-555</em> for individual, tailored advice for your perfect stay or <a href="contact.html" title="Contact">send us a message</a> with your hotel booking query.<br /><br /></p>
				</article>
			<!--//info boxes-->
		</div>
@endsection