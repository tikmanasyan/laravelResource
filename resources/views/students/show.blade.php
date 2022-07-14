@extends("layouts.app")
@section("title")Student
@endsection
@section("content")
    <div class="container">
        <div class="mt-2 details">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{$student['name']}}</h3>
                    <p class="card-text">Phone: {{$student['phone']}}</p>
                    <p class="card-text">Email: {{$student['email']}}</p>
                    <a href="{{ route("students.edit", $student) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route("students.destroy", $student) }}" class="btn btn-danger">Delete</a>

                </div>
            </div>
        </div>
    </div>
@endsection
