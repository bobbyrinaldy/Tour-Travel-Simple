@extends('layouts.backend.master')

@section('title')
Kelola User Login
@endsection

@section('content')
  <div class="x_panel">
                    <div class="x_title">

                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <a href="/admin/user/create" class="btn btn-success"><span class="fa fa-plus"> Tambah User</span></a>

                      <hr>

                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Dibuat Tanggal</th>
                            <th style="text-align:center;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $no=1;
                          @endphp

                          @foreach ($u as $item)
                            <tr>
                              <td>{{$no++}}</td>
                              <td>{{$item->name}}</td>
                              <td>{{$item->username}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->status}}</td>
                              <td>{{$item->created_at}}</td>
                              <td>
                                <a href="/admin/user/{{$item->id}}/edit" class="btn btn-warning btn-xs"><span class="fa fa-edit"></span> </a>
                                <a href="/admin/user/{{$item->id}}/delete" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> </a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>


                    </div>
                  </div>
@endsection
