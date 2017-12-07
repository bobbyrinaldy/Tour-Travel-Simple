@extends('layouts.backend.master')

@section('title')
Kelola Pemesanan
@endsection

@section('content')
  <div class="x_panel">
                    {{-- <div class="x_title">

                      <div class="clearfix"></div>
                    </div> --}}
                    <div class="x_content">
                      {{-- <a href="/admin/book/create" class="btn btn-success"><span class="fa fa-plus"></span></a> --}}

                      {{-- <hr> --}}

                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Nama Paket</th>
                            <th>Kota Tujuan</th>
                            <th>Harga</th>
                            <th>Tanggal</th>
                            <th>Jumlah Orang</th>
                            <th style="text-align:center;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @php
                        	$no=1;
                        @endphp
                          @foreach ($book as $item)
                          	<tr>
                          		<td>{{$no++}}</td>
                          		<td>{{$item->user->name}}</td>
                          		<td>{{$item->paket->nama_paket}}</td>
                          		<td>{{$item->paket->tujuan}}</td>
                          		<td>Rp. {{number_format($item->paket->harga)}}</td>
                          		<td>{{$item->date}}</td>
                          		<td>{{$item->jumlah_orang}}</td>
                          		<td>
                          			<a href="/admin/book/{{$item->id}}/view" class="btn btn-info btn-xs"><span class="fa fa-eye"></span></a>
                          			<a href="" class="btn btn-success btn-xs"><span class="fa fa-check"></span></a>
                          			<a href="" class="btn btn-danger btn-xs"><span class="fa fa-remove"></span></a>
                          		</td>

                          	</tr>
                          @endforeach
                        </tbody>
                      </table>


                    </div>
                  </div>
@endsection
