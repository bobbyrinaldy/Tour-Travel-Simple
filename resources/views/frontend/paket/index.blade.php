@extends('layouts/frontend/master')

@section('content')
	<div class="banner-bottom-strip" style="min-height: 100px;">
		<div class="container">
			<h3>{{$p->nama_paket}}</h3>
		</div>

	</div>
		{!!$p->keterangan!!}

@endsection