@extends('layouts.app')
@section('subnav')
    <nav class="navbar navbar-white bg-white shadow-sm">
        <div class="container d-flex justify-content-between">
            <div class="navbar-brand" >Create New Employee</div>
            <a href="{{route('employees.index')}}" class="btn btn-primary">Employee Lists</a>
        </div>
    </nav>
@endsection
@section('content')
    <div class="container shadow-sm bg-white border p-5">
        <form method="post" action="{{route('employees.store')}}">

            <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Contact</label>
                <input type="text" name="contact" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            @csrf
        </form>
    </div>
@endsection
