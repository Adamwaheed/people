@extends('layouts.app')
@section('subnav')
    <nav class="navbar navbar-white bg-white shadow-sm">
        <div class="container d-flex justify-content-between">
        <div class="navbar-brand" >Allowances</div>
        <a class="btn btn-primary">Create</a>
        </div>
    </nav>
@endsection
@section('content')
<div class="container shadow-sm bg-white border">
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">name</th>
        <th scope="col">amount</th>
        <th scope="col">percent</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($allowances as $allowance)
      <tr>
        <th scope="row">{{$allowance->id}}</th>
        <td>{{$allowance->name}}</td>
        <td>{{$allowance->amount}}</td>
        <td>{{$allowance->percent}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{$allowances->links("pagination::bootstrap-4")}}
</div>
  @endsection
