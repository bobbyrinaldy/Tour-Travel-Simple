@extends('layouts.frontend.master')

@section('content')
	<div class="wrap clearfix">
			<!--main content-->
			<div class="content clearfix">
				<!--breadcrumbs-->
				
				<!--hotel three-fourth content-->
				<section class="three-fourth">
					<!--gallery-->
					<section class="gallery" id="crossfade">
						<img src="{{Storage::url('paket/'.$p->image)}}" alt="" width="850" height="531" />
						<img src="{{Storage::url('paket/'.$p->image)}}" alt="" width="850" height="531" />
						<img src="{{Storage::url('paket/'.$p->image)}}" alt="" width="850" height="531" />
						<img src="{{Storage::url('paket/'.$p->image)}}" alt="" width="850" height="531" />
					</section>
					<!--//gallery-->
				
					<!--inner navigation-->
					<nav class="inner-nav">
						<ul>
							<li class="availability"><a href="#availability" title="Availability">Availability</a></li>
							<li class="description"><a href="#description" title="Description">Description</a></li>
							<li class="facilities"><a href="#facilities" title="Facilities">Facilities</a></li>
							<li class="things-to-do"><a href="#things-to-do" title="Things to do">Schedule</a></li>
						</ul>
					</nav>
					<!--//inner navigation-->
					
					<!--availability-->
					<section id="availability" class="tab-content">
						<article>
							<h1>{{$p->nama_paket}}</h1>
							<div class="text-wrap">
								@auth
									<a href="/book/{{$p->id}}" class="gradient-button right" title="Book Now">Book Now</a>
								@endauth
								<p>Anda dapat memesan kapanpun dengan tanggal dan waktu sesuai keinginan.</p>

								<h3>6 Keuntungan Menggunakan Jasa Travel Agent</h3>
								<ol>
									<li>Kemudahan Transportasi dan akomodasi</li><br>
									<p>Transportasi dan Akomodasi merupakan hal yang sangat penting dalam sebuah perjalanan wisata, apalagi jika tempat wisata tersebut jauh dan anda belum pernah ke sana. Dengan menggunakan jasa biro wisata, anda tidak perlu buang-buang waktu dan pusing memikirkan alat transportasi maupun akomodasi seperti hotel dan tempat makan, karena itu sudah termasuk dalam Paket Wisata yang ditawarkan. Kebutuhan berbelanja dan mencari souvenir pun biasanya sudah dipilihkan di tempat yang terbaik oleh Travel Organizer.</p>

									<li>Pemandu Wisata</li><br>
									<p>Dengan adanya pemandu wisata, perjalanan wisata anda akan menjadi terarah dan lebih bermakna. Anda akan diberikan informasi lengkap mengenai tempat wisata yang anda kunjungi, karena biasanya di sebuah tempat pariwisata terdapat keistimewaan dan sejarah besar di dalamnya. Anda pun tidak akan pulang dengan membawa banyak tanda tanya, karena anda bisa bertanya kapan saja pada pemandu wisata yang lebih mengetahui seluk beluk mengenai tempat wisata.</p>

									<li>Penggunaan waktu yang lebih efektif</li><br>
									<p>Waktu berwisata adalah waktu yang spesial, kita harus benar-benar menikmati setiap detik perjalanan wisata kita. Seringkali ada hal-hal tak terduga yang menghambat kegiatan wisata kita, misalnya saja hotel dan tempat penginapan habis, kesulitan mencari tempat makan, atau transportasi menuju objek wisata yang terlambat sehingga kita kehilangan momen yang istimewa, melihat sunset misalnya. Dengan menggunakan jasa travel organizer, anda akan mengunjungi objek wisata di saat yang tepat, karena pemandu wisata tau kapan waktu terbaik untuk mengunjungi suatu objek wisata. Dan anda akan mendapatkan semua momen spesial dan kegembiraan berwisata yang sebenarnya.</p>

									<li>Lebih Bankyak Objek Wisata yang Bisa Dikunjungi</li><br>
									<p>Dengan menggunakan travel organizer, selain mengunjungi tempat wisata yang anda idam-idamkan, ada banyak lagi tempat wisata yang bisa anda kunjungi, bahkan mungkin ada tujuan wisata yang belum pernah anda dengar sama sekali. Hal ini tentu sangat menyenangkan, bahkan mungkin akan memberikan kejutan tak terlupakan untuk anda.</p>

									<li>Biaya yang Lebih Murah</li><br>
									<p>Tanpa menggunakan Travel Organizer, anda harus menggunakan layanan yang terpisah-pisah: hotel, transportasi, biaya masuk objek wisata, tempat makan, dan lain sebagainya. Biasanya biaya yang digunakan untuk berwisata pun akan membengkak, belum lagi jika ada hal-hal yang diluar rencana. Selain itu anda akan membuang banyak waktu anda untuk mencari informasi. Dengan menggunakan Travel Organizer, semua kebutuhan sudah jadi satu, pengeluaran jadi terkendali, dan waktu anda yang berharga pun tidak hilang sia-sia.</p>

									<li>Kenyamanan Terjamin</li><br>
									<p>Jika anda merencanakan sendiri perjalanan wisata anda, biasanya anda akan kerepotan dalam menjalankan rencana tersebut karena belum mengenal daerah yang dituju. Belum lagi jika anda bersama rombongan atau keluarga yang sangat anda cintai. Anda pasti tidak mau jika mereka mengalami kerepotan dan kesulitan saat berwisata. Dengan menggunakan jasa agen wisata, kenyamanan anda terjamin mulai dari kedatangan, menginap, dan di objek wisata. Tidak ada yang perlu repot, anda tinggal menikmati wisata bersama keluarga dan rombongan dengan nyaman.</p>
								</ol>
							</div>
						</article>
					</section>
					<!--//availability-->
					
					<!--description-->
					<section id="description" class="tab-content">
						<article>
							<h1>Keterangan</h1>
							<div class="text-wrap">	
								<p>{!! $p->keterangan !!}</p>
							</div>
							
							
							<h1>Pets</h1>
							<div class="text-wrap">	
								<p>Pets are allowed. Charges may be applicable.</p>
							</div>
							
							<h1>Accepted credit cards</h1>
							<div class="text-wrap">	
								<p>American Express, Visa, Euro/Mastercard, Diners Club<br />The hotel reserves the right to pre-authorise credit cards prior to arrival.</p>
							</div>
						</article>
					</section>
					<!--//description-->
					
					<!--facilities-->
					<section id="facilities" class="tab-content">
						<article>
							<h1>Include</h1>
							<div class="text-wrap">	
								<ul class="three-col">
									<li>Elf long 15-20 Seat</li>
									<li>Toll &amp; Parkir</li>
									<li>Driver yang sudah handal</li>
									<li>Tour Leader bersertifikat HPI</li>
									<li>Hotspots</li>
									<li>Hotel</li>
									<li>Air Mineral perhari</li>
									<li>Tiket Masuk Objek Wisata</li>
								</ul>
							</div>

							<h1>Not Include</h1>
							<div class="text-wrap">	
								<ul class="three-col">
									<li>Pengeluaran Pribadi di luar Program Tour</li>
									<li>Minibar di Hotel dan Laundry</li>
								</ul>
							</div>
							
							<h1>Internet</h1>
							<div class="text-wrap">	
								<p><strong>Free!</strong> WiFi is available in all areas and is free of charge. </p>
							</div>

							<h1>Hotel</h1>
							<div class="text-wrap">	
								<table>
									<thead>
										<th>Nama Hotel</th>
										<th>Harga (/Pax)</th>
									</thead>
								<tbody>
									@foreach ($p->hotel as $item)
										<tr>
											<td>{{$item->nama}}</td>
											<td>Rp. {{number_format($item->harga)}}</td>
										</tr>
									@endforeach
								</tbody>
								</table>

							</div>
							
						</article>


					</section>
					<!--//facilities-->
					
					<!--location-->
					<section id="location" class="tab-content">
						<article>
							<!--map-->
								<div class="gmap" id="map_canvas"></div>
							<!--//map-->
						</article>
					</section>
					<!--//location-->
					
					<!--reviews-->
					<section id="reviews" class="tab-content">
						<article>
							<h1>Hotel Score and Score Breakdown</h1>
							<div class="score">
								<span class="achieved">8 </span>
								<span> / 10</span>
								<p class="info">Based on 782 reviews</p>
								<p class="disclaimer">Guest reviews are written by our customers <strong>after their stay</strong> at Hotel Best Ipsum.</p>
							</div>
							
							<dl class="chart">
								<dt>Clean</dt>
								<dd><span id="data-one" style="width:80%;">8&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Comfort</dt>
								<dd><span id="data-two" style="width:60%;">6&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Location</dt>
								<dd><span id="data-three" style="width:80%;">8&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Staff</dt>
								<dd><span id="data-four" style="width:100%;">10&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Services</dt>
								<dd><span id="data-five" style="width:70%;">7&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Value for money</dt>
								<dd><span id="data-six" style="width:90%;">9&nbsp;&nbsp;&nbsp;</span></dd>
							</dl>
						</article>
						
						<article>
							<h1>Guest reviews</h1>
							<ul class="reviews">
								<!--review-->
								<li>
									<figure class="left"><img src="images/uploads/avatar.jpg" alt="avatar" /></figure>
									<address><span>Anonymous</span><br />Solo Traveller<br />Norway<br />22/06/2012</address>
									<div class="pro"><p>It was a warm friendly hotel. Very easy access to shops and underground stations. Staff very welcoming.</p></div>
									<div class="con"><p>noisy neigbourghs spoilt the rather calm environment</p></div>
								</li>
								<!--//review-->
								
								<!--review-->
								<li>
									<figure class="left"><img src="images/uploads/avatar.jpg" alt="avatar" /></figure>
									<address><span>Anonymous</span><br />Solo Traveller<br />Norway<br />22/06/2012</address>
									<div class="pro"><p>It was a warm friendly hotel. Very easy access to shops and underground stations. Staff very welcoming.</p></div>
									<div class="con"><p>noisy neigbourghs spoilt the rather calm environment</p></div>
								</li>
								<!--//review-->
								
								<!--review-->
								<li>
									<figure class="left"><img src="images/uploads/avatar.jpg" alt="avatar" /></figure>
									<address><span>Anonymous</span><br />Solo Traveller<br />Norway<br />22/06/2012</address>
									<div class="pro"><p>It was a warm friendly hotel. Very easy access to shops and underground stations. Staff very welcoming.</p></div>
									<div class="con"><p>noisy neigbourghs spoilt the rather calm environment</p></div>
								</li>
								<!--//review-->
								
								<!--review-->
								<li>
									<figure class="left"><img src="images/uploads/avatar.jpg" alt="avatar" /></figure>
									<address><span>Anonymous</span><br />Solo Traveller<br />Norway<br />22/06/2012</address>
									<div class="pro"><p>It was a warm friendly hotel. Very easy access to shops and underground stations. Staff very welcoming.</p></div>
									<div class="con"><p>noisy neigbourghs spoilt the rather calm environment</p></div>
								</li>
								<!--//review-->
								
								<!--review-->
								<li>
									<figure class="left"><img src="images/uploads/avatar.jpg" alt="avatar" /></figure>
									<address><span>Anonymous</span><br />Solo Traveller<br />Norway<br />22/06/2012</address>
									<div class="pro"><p>It was a warm friendly hotel. Very easy access to shops and underground stations. Staff very welcoming.</p></div>
									<div class="con"><p>noisy neigbourghs spoilt the rather calm environment</p></div>
								</li>
								<!--//review-->
							</ul>
						</article>
					</section>
					<!--things to do-->
					<section id="things-to-do" class="tab-content">
						@foreach ($p->aktivitas as $item)
							{{-- expr --}}
							<article>
							<h1>{{$item->nama_aktivitas}} - Hari ke {{$item->hari_ke}}</h1>
							
							<p>{!! $item->keterangan !!}</p>
							
						</article>
						@endforeach
						
					</section>
					<!--//things to do-->
				</section>
				<!--//hotel content-->
				
				<!--sidebar-->
				<aside class="right-sidebar">
					<!--hotel details-->
					
					<!--//hotel details-->
					
					<!--testimonials-->
					@auth
					<article class="default" style="padding-top: 10px;padding-bottom: 20px ">
						<a href="/book/{{$p->id}}" class="gradient-button" title="Book This Travel" style="padding: 0 80px;">Book Now</a>
					</article>
					@endauth
					<!--//testimonials-->
					
					<!--Need Help Booking?-->
					<article class="default clearfix">
						<h2>Need Help Booking?</h2>
						<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your holiday needs.</p>
						<p class="number">1- 555 - 555 - 555</p>
					</article>
					<!--//Need Help Booking?-->
					
					<!--Why Book with us?-->
					<article class="default clearfix">
						<h2>Why Book with us?</h2>
						<h3>Low rates</h3>
						<p>Get the best rates, or get a refund.<br />No booking fees. Save money!</p>
						<h3>Largest Selection</h3>
						<p>140,000+ hotels worldwide<br />130+ airlines<br />Over 3 million guest reviews</p>
						<h3>We’re Always Here</h3>
						<p>Call or email us, anytime<br />Get 24-hour support before, during, and after your trip</p>
					</article>
				</aside>
				<!--//sidebar-->
			</div>
			<!--//main content-->
		</div>
	</div>
@endsection