@extends('layouts.backend.master')

@section('title')
Laporan
@endsection

@section('content')
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="{{asset('_admin/plugins/chart/code/highcharts.js')}}"></script>
<script src="{{asset('_admin/plugins/chart/code/modules/exporting.js')}}"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Pendapatan IQI Tour & Travel'
    },
    subtitle: {
        text: 'Per Bulan'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rupiah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>IDR {point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Pendapatan',
        data: [
        <?php if ($jan->total) {echo $jan->total;} else {echo 0;}  ?>,
        <?php if ($feb->total) {echo $feb->total;} else {echo 0;}  ?>,
        <?php if ($mar->total) {echo $mar->total;} else {echo 0;}  ?>,
        <?php if ($apr->total) {echo $apr->total;} else {echo 0;}  ?>,
     	<?php if ($may->total) {echo $may->total;} else {echo 0;}  ?>,
        <?php if ($jun->total) {echo $jun->total;} else {echo 0;}  ?>,
        <?php if ($jul->total) {echo $jul->total;} else {echo 0;}  ?>,
        <?php if ($aug->total) {echo $aug->total;} else {echo 0;}  ?>,
     	<?php if ($sep->total) {echo $sep->total;} else {echo 0;}  ?>,
        <?php if ($oct->total) {echo $oct->total;} else {echo 0;}  ?>,
        <?php if ($nov->total) {echo $nov->total;} else {echo 0;}  ?>,
        <?php if ($des->total) {echo $des->total;} else {echo 0;}  ?>,

    	]

    }]
});
		</script>
	</body>
</html>


@endsection