<!-- include summernote css/js-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
<script src="{{asset('_admin/moment.min.js')}}"></script>
<script src="{{asset('_admin/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('textarea').summernote({
      placeholder:'Masukan Aktifitas per jam nya saja' ,
      height: 400
    });

    $('#jam').datetimepicker({
      format : 'HH:mm'
    });
  });
</script>

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

</script>
