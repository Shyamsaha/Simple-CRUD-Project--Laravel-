@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Students Dashboard</div>

                    <div class="card-body">

                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->department}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->address}}</td>
                                <td>
                                    <a href="{{route('student.update',[$student->id])}}">
                                        <button class="btn btn-success">Edit</button>
                                    </a>
                                    <a href="{{route('student.delete',[$student->id])}}">
                                        <button class="btn btn-danger">X</button>
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
