@extends('layout.main')

@section('content')
<div class="w-50 mx-auto my-5">
    <form method="POST" action="{{ url('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Login</button>
        </div>
    </form>
</div>
@endsection