@extends("master")
@section("title", "index")


@section("content")
{{-- Need to use AJAX to test for PUT, as data needs to be sent as a JSON payload.--}}
    <form action="/api/users" Method = "POST">
        <div class="form-group">
            <label for="firstName">First name:</label>
            <input type="text" name="firstName" class="form-control">
            <label for="lastName"> last name:</label>
            <input type="text" name="lastName" class="form-control">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control">
            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>
@endsection
