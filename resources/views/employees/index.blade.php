@extends('layouts.app')
@section('subnav')
    <nav class="navbar navbar-white bg-white shadow-sm">
        <div class="container d-flex justify-content-between">
        <div class="navbar-brand" >Employee</div>
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
        <th scope="col">contact</th>
        <th scope="col">address</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($employees as $employee)
      <tr>
        <th scope="row">{{$employee->id}}</th>
        <td>{{$employee->name}}</td>
        <td>{{$employee->contact}}</td>
        <td>{{$employee->address}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{$employees->links("pagination::bootstrap-4")}}
</div>
  @endsection