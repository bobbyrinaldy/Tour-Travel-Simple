<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="all">
  body {
background: rgb(204,204,204);
}
page {
background: white;
display: block;
margin: 0 auto;
margin-bottom: 0.5cm;
box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {
width: 21cm;
height: 29.7cm;
}
page[size="A4"][layout="portrait"] {
width: 29.7cm;
height: 21cm;
}
page[size="A3"] {
width: 29.7cm;
height: 42cm;
}
page[size="A3"][layout="portrait"] {
width: 42cm;
height: 29.7cm;
}
page[size="A5"] {
width: 14.8cm;
height: 21cm;
}
page[size="A5"][layout="portrait"] {
width: 21cm;
height: 14.8cm;
}
@media print {
body, page {
  margin: 0;
  box-shadow: 0;
}
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
  </style>
  <body onload="window.print();">
    <page size="A4">
      <br><br>
      <center>
        <h3>LAPORAN PAKET YANG SERING DI PESAN</h3>
        <h3>IQI TOUR & TRAVEL</h3>
      </center>

      <hr>

      <pre>      Tanggal: @php echo date('d-m-Y'); @endphp</pre>
      <div style="padding-left:20px;padding-right:20px">
        <table border="1" style="width:100%">
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

    </page>
  </body>
</html>
