@extends('layouts.app-master')
@section('content')
    <h1>Home</h1>

    @auth
        <p>Welcome back {{auth()->user()->username}}</p>

        <p><a href="/logout">Logout</a></p>
    @endauth
    @guest
        <p>To see this please <a href="/login">log in</a>.</p>
    @endguest
@endsection

    