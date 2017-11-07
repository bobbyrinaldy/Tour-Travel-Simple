@extends('layouts.backend.master')

@section('title','Aktifitas Pada Paket '.$paket->nama_paket)

@section('content')
@if ($status == 0)
    <div class="x_panel">
      <div class="x_title">
        <h2>Tidak Ada Aktivitas pada paket liburan ini</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a href="/admin/paket/aktivitas/{{$paket->id}}/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Aktivitas</span></a>
        <hr>
      </div>
    </div>
@else
  <div class="x_panel">
    <div class="x_title">
      {{-- <h2>Aktifitas Pada Paket {{$paket->nama_paket}}</h2> --}}
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      Nama Paket : <strong style="color:red">{{$paket->nama_paket}}</strong>
      <br><br>
      <a href="/admin/paket/aktivitas/{{$paket->id}}/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Aktivitas</span></a>

      <hr>
      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Aktivitas</th>
            <th>Hari Ke</th>
            <th>Jam</th>
            <th>Aktivitas</th>
            <th style="text-align:center;">Action</th>
          </tr>
        </thead>
        <tbody>
          @php
            $no=1;
          @endphp

          @foreach ($aktivitas as $item)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $item->nama_aktivitas }}</td>
              <td>{{ $item->hari_ke }}</td>
              <td>{{ $item->jam }}</td>
              <td>{!! $item->keterangan !!}</td>
              <td width="10%" style="text-align:center;">
                <a href="/admin/paket/aktivitas/{{$paket->id}}/{{$item->id}}/edit" class="btn btn-warning btn-xs btn-simple" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fa fa-pencil"></span></a>
                <a href="/admin/paket/aktivitas/{{$paket->id}}/{{$item->id}}/delete" class="btn btn-danger btn-xs btn-simple" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fa fa-trash"></span></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>


@endif
@endsection
