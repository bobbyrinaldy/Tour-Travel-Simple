@extends('layouts.backend.master')

@section('content')
  <div class="x_panel">
           <div class="x_title">
             <h2>Form Paket</h2>
             <div class="clearfix"></div>
           </div>
           <div class="x_content">
             <br />
             <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/admin/paket/save" method="post" enctype="multipart/form-data">
               {{ csrf_field() }}
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Paket <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="nama" name="nama_paket" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tujuan">Kota Tujuan <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="tujuan" name="tujuan" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>
               <div class="form-group">
                 <label for="harga" class="control-label col-md-3 col-sm-3 col-xs-12">Harga (Rp.)</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="show_harga" class="form-control col-md-7 col-xs-12" type="text" name="" placeholder="0">
                   <input id="harga" class="form-control col-md-7 col-xs-12" type="hidden" name="harga" placeholder="0">
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Petugas <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="hidden" name="petugas" value="{{auth::user()->id}}">
                   <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="" value="{{auth::user()->name}}" readonly>
                 </div>
               </div>

               <div class="form-group">
                 <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="image" class="form-control col-md-7 col-xs-12" type="file" name="image">
                   <img id="prev" src="#" width="200px">
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
         <br><br>
@endsection

@section('js')
<script type="text/javascript">
  $("#show_harga").on('keyup', function(){

    if (this.value == "") {
      this.value = 0
    }
    var n = parseInt($(this).val().replace(/\D/g,''),10);
    $(this).val(n.toLocaleString());
  });

  $("#show_harga").on('change', function(){
    var val = this.value;
    var ch = val.replace(/\D+/g, "");
    document.getElementById('harga').value = ch;
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#prev').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
          }
      }

      $("#image").change(function(){
          readURL(this);
      });

</script>
@endsection
