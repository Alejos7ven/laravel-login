@extends('layouts.auth-master')
@section('content')
    <form action="/register" method="post">
        @csrf
        <h1>Creat account</h1>
        @include('layouts.partials.messages')
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input  type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div> 
        <div class="form-group">
            <label for="password_confirmation">Re enter Password</label>
            <input  type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div> 
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <center>Already have account? <a href="/login">Login here</a>.</center>
@endsection 