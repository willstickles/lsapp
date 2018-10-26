@extends('layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron text-center">
        <div class="container">
            <h1>{{ $title }}</h1>
            <p>This is the laravel application from the "laravel from Scratch" Youtube series</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
    </div>
@endsection
