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
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Status</th>
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
                              <td style="text-align: center">{{$item->jumlah_orang}}</td>
                          		<td>Rp. {{number_format(($item->paket->harga)*($item->jumlah_orang))}}</td>
                              @if ($item->is_approve == 0)
                                <td><span class="label label-info">Pending</span></td>
                              @elseif ($item->is_approve == 1)
                                <td><span class="label label-success">Approved</span></td>
                              @else
                                <td><span class="label label-danger">Declined</span></td>
                              @endif
                          		<td style="text-align: center">
                              @if ($item->is_approve == 2)
                                <a href="/admin/booking/{{$item->id}}/approve" class="btn btn-success btn-xs"><span class="fa fa-check"></span></a>
                              @elseif ($item->is_approve == 1)
                          			<a href="/admin/booking/{{$item->id}}/decline" class="btn btn-danger btn-xs"><span class="fa fa-remove"></span></a>
                              @else
                              <a href="/admin/booking/{{$item->id}}/approve" class="btn btn-success btn-xs"><span class="fa fa-check"></span></a>
                              <a href="/admin/booking/{{$item->id}}/decline" class="btn btn-danger btn-xs"><span class="fa fa-remove"></span></a> 
                              @endif
                          		</td>

                          	</tr>
                          @endforeach
                        </tbody>
                      </table>


                    </div>
                  </div>
@endsection
