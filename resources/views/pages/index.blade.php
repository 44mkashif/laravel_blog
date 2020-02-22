@extends('layouts.app')

@section('content')
    <div class="container jumbotron text-center">
        <h1>{{$title}}</h1>
        <h2>Publish your passions, your way</h2>
        <p>
            <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
            <a href="/register" class="btn btn-success btn-lg" role="button">Signup</a>
        </p>
    </div>
@endsection
