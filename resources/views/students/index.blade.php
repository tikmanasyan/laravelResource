@extends("layouts.app")
@section("title")Students
@endsection
@section("content")
    <div class="container">
        <div class="mt-2">
            <a href="{{ route("students.create") }}">Create New Student</a>
        </div>
        <div class="mt-2">
            <h2>STUDENT LIST</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student['name']}}</td>
                            <td>{{$student['phone']}}</td>
                            <td>
                                <a href="{{ route("students.show", $student) }}" class="btn btn-warning"> Details </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
