@extends('layouts.app')
@section('subnav')
    <nav class="navbar navbar-white bg-white shadow-sm">
        <div class="container d-flex justify-content-between">
            <div class="navbar-brand">Employee</div>
            <a href="{{route('employees.create')}}" class="btn btn-primary">Upload</a>
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
            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row">{{$employee->id}}</th>
                <td>{{$employee->name}}</td>
                <td>{{$employee->contact}}</td>
                <td>{{$employee->address}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->employeeProfile->emergency_contact}}</td>
            </tr>
            </tbody>
        </table>


    </div>


    <div class="bg-white border container mt-5 p-5">
        <form action="{{route('images.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="customFile">

                <input type="hidden" name="imageable_id" value="{{$employee->id}}" class="custom-file-input"
                       id="custsomFile">
                <input type="hidden" name="imageable_type" value="Employee" class="custom-file-input"
                       id="cusstoasdfsdfmFile">

                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <input type="submit" class="btn btn-sm btn-primary">
        </form>

        <div class="row">
            @foreach($employee->images as $image)
                <div class="card col-sm-4">
                    <img src="/storage/{{$image->path}}" class="card-img-top" alt="...">
                </div>
            @endforeach
        </div>


    </div>
@endsection
