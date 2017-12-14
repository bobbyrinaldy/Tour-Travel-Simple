@extends('layouts.app')

@section('content')
<center>
  @if (\Session::get('success'))
  <pre>{{\Session::get('success')}}</pre>
  @elseif (\Session::get('fail'))
  <pre>{{\Session::get('fail')}}</pre>
  @else
  <pre>@if ($errors->has('foto'))
      <span class="help-block">
          <strong>{{ $errors->first('foto') }}</strong>
      </span>
  @endif</pre>

  @endif
</center>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Form Upload Konfirmasi Pembayaran</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/konfirmasi/save/{{$book->id}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama Pemesan :</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{$book->user->name}}" readonly>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama_paket') ? ' has-error' : '' }}">
                            <label for="nama_paket" class="col-md-4 control-label">Nama Paket Pesanan :</label>

                            <div class="col-md-6">
                                <input id="nama_paket" type="text" class="form-control" name="nama_paket" value="{{$book->paket->nama_paket}}" readonly>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                            <label for="harga" class="col-md-4 control-label">Harga Paket Pesanan (Rp) :</label>

                            <div class="col-md-6">
                              <input id="" type="text" class="form-control" name="" value="{{number_format($book->paket->harga)}}" readonly>
                                <input id="harga" type="hidden" class="form-control" name="harga" value="{{$book->paket->harga}}" readonly>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jumlah') ? ' has-error' : '' }}">
                            <label for="jumlah" class="col-md-4 control-label">Jumlah Orang :</label>

                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{$book->jumlah_orang}}" readonly>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                            <label for="total" class="col-md-4 control-label">Harga Paket Pesanan (Rp) :</label>

                            <div class="col-md-6">
                              <input id="" type="text" class="form-control" name="" value="{{number_format(($book->paket->harga)*($book->jumlah_orang))}}" readonly>
                                <input id="total" type="hidden" class="form-control" name="total" value="{{($book->paket->harga)*($book->jumlah_orang)}}" readonly>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                            <label for="foto" class="col-md-4 control-label">Bukti Transfer Pembayaran :</label>

                            <div class="col-md-6">
                              <input id="foto" type="file" class="form-control" name="foto" required>
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                              <img id="blah" src="#" alt="your image will be here" width="350px" height="320px">
                            </div>

                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                              @if ($book->is_confirm == '1')
                                <input type="button" name="" class="btn btn-danger" value="Anda sudah mengkonfirmasi pembayaran ini" disabled>
                              @else
                                <button type="submit" class="btn btn-primary btn-block">
                                    Submit
                                </button>
                              @endif


                                <input type="hidden" name="_method" value="put">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$("document").ready(function(){

  function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#foto").change(function() {
  readURL(this);
});
});
</script>

@endsection
