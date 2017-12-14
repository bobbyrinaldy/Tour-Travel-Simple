<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Book My Travel</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Book My Trip web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="{{asset('book/js/jquery-1.11.1.min.js')}}"></script>
<!-- stylesheet -->
<link href="{{asset('book/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,700,700i')}}" rel="stylesheet">
<!-- //stylesheet -->
</head>
<body class="bg agileinfo">
   <h1 class="agile_head text-center">IQI Tour & Travel Book Page</h1>
     <div class="container w3">
		<form class="agile_form" id='form-book'>
			 {{ csrf_field() }}
			<div class="clear"></div>
			<h2 style="color: white">Keterangan Paket :</h2>
			<input type="hidden" placeholder="Nama Paket" name="id_paket" class="name agileits" required="" value="{{$paket->id}}" readonly="" />
			<input type="text" placeholder="Nama Paket" name="paket" class="name agileits" required="" value="{{$paket->nama_paket}}" readonly="" />
			<input type="text" placeholder="Nama Paket" name="" class="name agileits" required="" value="Rp. {{number_format($paket->harga)}}" readonly="" />
			<input type="hidden" placeholder="Nama Paket" name="harga" id="harga" class="name agileits" required="" value="{{$paket->harga}}" readonly="" />
			<input type="text" placeholder="Nama Paket" name="tujuan" class="name agileits" required="" value="{{$paket->tujuan}}" readonly="" />

			<hr>
			<h2 style="color: white">Pemesan :</h2>
			<input type="text" placeholder="Your Name" name="name" class="name agileits" required="" value="{{Auth::user()->name}}" />
			<input type="hidden" placeholder="Your Name" name="id_user" class="name agileits" required="" value="{{Auth::user()->id}}" />
			<div class="list_agileits_w3layouts">

			<input placeholder="Date" class="date" id="datepicker" type="text" name="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""/>	
					<input type="text" placeholder="Jumlah Pemesanan" name="jumlah" onkeypress="return n(event)" id="jumlah" class="name agileits" required="" value="" />
				
				<div class="clear"></div>
            </div>
            <hr>
            <label style="color:white">Total Bayar</label>
            <label style="position: relative;left: 210px; color: white">Rp. <span id="total"></span></label>				
			<div class="submit">
			  <input type="submit" value="submit" id='submit'>
			</div>  
		</form>	
	</div>	
	<div class="agileits_w3layouts_copyright text-center">
			<p>© 2017 Book My Trip. All rights reserved | Design by <a href="//w3layouts.com/">W3layouts</a></p>
	</div>
<!--start-date-piker-->
		<link rel="stylesheet" href="{{asset('book/css/jquery-ui.css')}}" />
		<script src="{{asset('book/js/jquery-ui.js')}}"></script>
		<script src="{{asset('https://unpkg.com/sweetalert2@7.0.7/dist/sweetalert2.all.js')}}"></script>
			<script>

				function n(evt) {
				    var charCode = (evt.which) ? evt.which : event.keyCode
				    if (charCode>57 || charCode==45 || charCode==32 || (charCode>32 && charCode<=47)){
				        return false;        
				    }
				    return true;
				}

				$("#jumlah").keyup(function(){
					var harga = $('#harga').val();
					var val = $(this).val();
					var total = harga*val;
				    $('#total').html(total.toLocaleString());
				});

				$(function() {
					$( "#datepicker,#datepicker1" ).datepicker({
						dateFormat: "yy-mm-dd",
						minDate : 0,
						todayBtn : true,
						todayHighlight : true
					});
				});

				$('#form-book').submit( function(event) {
				    event.preventDefault();

				    $.ajax({
				               type: "POST",
				               url: '{{route('saveBooking')}}',
				               data: $(this).serialize(),
				               beforeSend : function(){
				               		swal({
				               		  title: 'Pesanan anda sedang di proses!',
				               		  text: 'Please Wait...',
				               		  timer: 5000,
				               		  onOpen: () => {
				               		    swal.showLoading()
				               		  }
				               		}).then((result) => {
				               		  if (result.dismiss === 'timer') {
				               		    swal({
				               		      position: 'middle',
				               		      type: 'success',
				               		      title: 'Good!',
				               		      showConfirmButton: false,
				               		      timer: 2000
				               		    })
				               		  }
				               		})
				               },
				               success: function( data ) {
				                   swal({
				               		      position: 'middle',
				               		      type: 'success',
				               		      title: 'Your reservation has been saved, please check email for 3x24 hour',
				               		      showConfirmButton: false,
				               		      timer: 2000
				               		    })
				                   setTimeout(function(){ location.replace('/') }, 3000);
				               }
				           });
				}); 

			</script>
<!-- /End-date-piker -->		
</body>
</html>