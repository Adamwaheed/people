@extends('report.main')

@section('report')
<div class="bg-white border container-fluid">
    <table class="table ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product</th>
        <th scope="col">Amount</th>
        <th scope="col">GST</th>
        <th scope="col">Total</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($reports as $report)
        <tr>
            <th scope="row">1</th>
            <td><a href="{{route('reports.single',$report->id)}}">{{$report->product_name}}</a> </td>
            <td>{{$report->amount}}</td>
            <td>{{$report->gst}}</td>
            <td>mvr {{$report->gst + $report->amount}}</td>
          </tr>
        @endforeach

        <tr class="bg-danger text-white">
            <th scope="row">1</th>
            <td>Total</td>
            <td>{{$amount =$reports->sum('amount')}}</td>
            <td>{{$gst =$reports->sum('gst')}}</td>
            <td>{{$amount + $gst}}</td>
          </tr>
        </tr>
    </tbody>
  </table>
</div>
  @endsection