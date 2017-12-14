@extends('layouts.backend.master')

@section('title')
Konfirmasi Pembayaran
@endsection

@section('content')
  <div class="x_panel">
                    <div class="x_title">

                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Nama Paket</th>
                            <th>Total Bayar</th>
                            <th>Status Bayar</th>
                            <th>Foto Bukti Bayar</th>
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
                              <td>Rp. {{number_format(($item->paket->harga)*($item->jumlah_orang))}}</td>
                              @if ($item->is_confirm == '1')
                                <td><span class="label label-success">Sudah Dibayar</span> </td>
                              @else
                                <td><span class="label label-danger">Belum Dibayar</span> </td>
                              @endif
                              @if ($item->is_confirm == '1')
                                <td><center><img src="{{Storage::url('bukti/'.$item->foto)}}" width="100px"alt=""></center></td>
                              @else
                                <td><span class="label label-danger">Belum Dibayar</span> </td>
                              @endif

                            </tr>
                          @endforeach
                        </tbody>

                      </table>


                    </div>
                  </div>
@endsection
