@extends('layouts.app')
@section('subnav')
    <nav class="navbar navbar-white bg-white shadow-sm">
        <div class="container d-flex justify-content-between">
        <div class="navbar-brand" >Employee</div>
        <a href="{{route('employees.create')}}" class="btn btn-primary">Create</a>
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
        <th scope="col">Email</th>
        <th scope="col">Emergency Contact</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($employees as $employee)
      <tr>
        <th scope="row">{{$employee->id}}</th>
        <td>{{$employee->name}}</td>
        <td>{{$employee->contact}}</td>
        <td>{{$employee->address}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->employeeProfile->emergency_contact}}</td>
        <td>
            <a class="btn btn-sm btn-primary" href="{{route('employees.show',$employee->id)}}">Show</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{$employees->links("pagination::bootstrap-4")}}
</div>
  @endsection
