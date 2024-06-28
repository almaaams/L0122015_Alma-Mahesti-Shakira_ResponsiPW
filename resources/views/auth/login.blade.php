@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="mt-4">
    <h1 class="mb-4">Login</h1>
    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="{{ url('/register') }}" class="btn btn-secondary">Don't have an account?</a>
    </form>
</div>
@endsection