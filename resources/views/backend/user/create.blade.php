@extends('layouts.backend.master')

@section('title')
Form tambah user
@endsection

@section('content')

  <div class="x_panel">
           <div class="x_title">
             <div class="clearfix"></div>
           </div>
           <div class="x_content">
             <br />
             <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/admin/user/save" method="post">
               {{ csrf_field() }}

               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama User <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Email User <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Username<span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Password<span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Password Confirmation<span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="password" id="password_confirmation" name="password_confirmation" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Hak Akses<span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <select class="form-control" name="status">
                     <option value="" disabled selected>--Pilih Status--</option>
                     <option value="admin">admin</option>
                     <option value="user">user</option>
                   </select>
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
