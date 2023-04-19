@extends('layouts.auth-master')
@section('content')
    <form action="/login" method="post">
        @csrf
        <h1>Login</h1>
        @include('layouts.partials.messages')
        <div class="form-group">
            <label for="username">Username or email</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter username or email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input  type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div> 
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <center>Not account yet? <a href="/register">Register here</a>.</center>
@endsection 