@extends('layouts.backend.master')

@section('title')
Dashboard
@endsection

@section('content')
	<div class="row top_tiles">
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-money"></i></div>
          <div class="count">{{$pesanan_baru}}</div>
          <h3>Pesanan Baru</h3>
        </div>
      </div>
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-user"></i></div>
          <div class="count">{{$user}}</div>
          <h3>User Baru</h3>
        </div>
      </div>
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-tasks"></i></div>
          <div class="count">{{$paket}}</div>
          <h3>Paket</h3>
        </div>
      </div>
    </div>

<div class="col-md-6">
	<div class="x_panel">
		<h2>List Pesanan Baru</h2>
    <div class="x_content">

      <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Nama Pemesan</th>
            <th>Nama Paket</th>
            <th>Kota Tujuan</th>
            <th>Total Harga</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($waiting as $item)
        	<tr>
        		<td>{{$item->user->name}}</td>
        		<td>{{$item->paket->nama_paket}}</td>
        		<td>{{$item->paket->tujuan}}</td>
        		@php
        			$total = (int)$item->paket->harga*(int)$item->jumlah_orang;
        		@endphp
        		<td>Rp.{{number_format($total)}}</td>
        	</tr>
        @endforeach
        </tbody>
      </table>


    </div>
  </div>
</div>

<div class="col-md-6">
	<div class="x_panel">
		<h2>Pesanan Terakhir di Approve</h2>
    <div class="x_content">

      <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Nama Pemesan</th>
            <th>Nama Paket</th>
            <th>Kota Tujuan</th>
            <th>Total Harga</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($approve as $item)
        	<tr>
        		<td>{{$item->user->name}}</td>
        		<td>{{$item->paket->nama_paket}}</td>
        		<td>{{$item->paket->tujuan}}</td>
        		@php
        			$total = (int)$item->paket->harga*(int)$item->jumlah_orang;
        		@endphp
        		<td>Rp.{{number_format($total)}}</td>
        	</tr>
        @endforeach
        </tbody>
      </table>


    </div>
  </div>
</div>
   
@endsection
