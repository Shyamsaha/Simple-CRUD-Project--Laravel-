@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Insert Student Information</div>

                    <div class="card-body">
                        <div class="card-body">
                            <form action="{{route('student.store')}}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Student Name</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="dept">Department</label>
                                    <input type="text" name="department" class="form-control" id="department">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" id="phone">
                                </div>

                                <div class="form-group">
                                    <label for="address">Student Address:</label>
                                    <input type="text" name="address" class="form-control" id="address">
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
