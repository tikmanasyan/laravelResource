@extends("layouts.app")
@section("title")New Student
@endsection
@section("content")
    <div class="container">
        <h2 class="mt-2">CREATE NEW STUDENT</h2>
        <div class="w-25 mt-2">
            <form action="{{ route("students.store") }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="John Smith">
                </div>

                <div class="mb-2">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="37499887766">
                </div>

                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="example@mail.ru">
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
