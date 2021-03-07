@extends('report.main')

@section('report')
<div class="bg-white border container-fluid">
  <h1>{{$report->product_name}}</h1>
  <hr>
   <p>amount name : {{$report->amount}}</p>
   <p>gst name : {{$report->gst}}</p>
   <p>total name : {{$report->gst + $report->amount}}</p>
</div>
  @endsection