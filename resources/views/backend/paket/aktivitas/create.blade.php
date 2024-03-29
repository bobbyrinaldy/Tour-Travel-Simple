@extends('layouts.backend.master')

@section('content')
@include('backend/editor/header')

  <div class="x_panel">
           <div class="x_title">
             <h2>Form Aktivitas</h2>
             <div class="clearfix"></div>
           </div>
           <div class="x_content">
             <br />
             <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/admin/paket/aktivitas/save" method="post">
               {{ csrf_field() }}
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Paket <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="" name="" value="{{$paket->nama_paket}}" required="required" class="form-control col-md-7 col-xs-12" readonly>
                 </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="hidden" id="nama" name="paket_id" value="{{$paket->id}}" required="required" class="form-control col-md-7 col-xs-12" readonly>
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_aktivitas">Nama Aktivitas <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="nama_aktivitas" name="nama_aktivitas" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>
               <div class="form-group">
                 <label for="hari_ke" class="control-label col-md-3 col-sm-3 col-xs-12">Hari Ke</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="hari_ke" class="form-control col-md-7 col-xs-12" type="text" name="hari_ke" placeholder="0">
                 </div>
               </div>

               {{-- <div class="form-group">
                 <label for="jam" class="control-label col-md-3 col-sm-3 col-xs-12">Jam (WIB)</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="jam" class="form-control col-md-7 col-xs-12" type="text" name="jam" placeholder="0">
                 </div>
               </div> --}}



               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan / Aktivitas <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <textarea name="keterangan" class="date-picker form-control col-md-7 col-xs-12" rows="8" cols="80"></textarea>
                 </div>
               </div>
               <div class="ln_solid"></div>
               <div class="form-group">
                 <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    	             <button class="btn btn-primary" type="reset">Reset</button>
                   <button type="submit" class="btn btn-success">Save</button>
                 </div>
               </div>

             </form>
           </div>
         </div>

         <br><br><br>
@endsection

@section('js')
  @include('backend/editor/footer')
@endsection
