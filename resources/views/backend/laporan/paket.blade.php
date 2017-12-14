@extends('layouts.backend.master')

@section('title')
Paket liburan yang sering di pesan
@endsection

@section('content')
  <div class="x_panel">
                    <div class="x_title">

                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <a href="/admin/print" class="btn btn-success" target="_blank"><span class="fa fa-print"> Print</span> </a>
                      <hr>
                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Kota Tujuan</th>
                            <th>Harga</th>
                            <th>Jumlah Booking</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $no=1;
                          @endphp

                          @foreach ($paket as $item)
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->nama_paket }}</td>
                              <td>{{ $item->tujuan }}</td>
                              <td>Rp. {{ number_format($item->harga) }}</td>
                              <td>@php echo \App\Model\Booking::where('package_id',$item->id)->count().' x';@endphp</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>


                    </div>
                  </div>
@endsection
