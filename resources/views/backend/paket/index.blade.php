@extends('layouts.backend.master')

@section('title')
Kelola Paket Liburan
@endsection

@section('content')
  <div class="x_panel">
                    <div class="x_title">

                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <a href="/admin/paket/create" class="btn btn-success"><span class="fa fa-plus"> Tambah Paket</span></a>

                      <hr>

                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Kota Tujuan</th>
                            <th>Harga</th>
                            <th>Foto Sampul</th>
                            <th>Petugas yang menginput</th>
                            <th style="text-align:center;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $no=1;
                          @endphp

                          @foreach ($p as $item)
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->nama_paket }}</td>
                              <td>{{ $item->tujuan }}</td>
                              <td>Rp. {{ number_format($item->harga) }}</td>
                              <td><center><img src="{{Storage::url('paket/'.$item->image)}}" width="100px"alt=""></center></td>
                              <td>{{ $item->user->name }}</td>
                              <td width="15%" style="text-align:center;">
                                <a href="/admin/paket/aktivitas/{{$item->id}}" class="btn btn-primary btn-xs btn-simple" data-toggle="tooltip" data-placement="top" title="Lihat Aktivitas"><span class="fa fa-calendar-times-o"></span></a>
                                <a href="/admin/paket/hotel/{{$item->id}}" class="btn btn-info btn-xs btn-simple" data-toggle="tooltip" data-placement="top" title="Lihat Hotel"><span class="fa fa-home"></span></a>
                                <a href="/admin/paket/{{$item->id}}/edit" class="btn btn-warning btn-xs btn-simple" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fa fa-pencil"></span></a>
                                <a href="/admin/paket/{{$item->id}}/delete" class="btn btn-danger btn-xs btn-simple" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fa fa-trash"></span></a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>


                    </div>
                  </div>
@endsection
