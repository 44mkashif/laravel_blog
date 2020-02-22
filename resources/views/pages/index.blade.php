@extends('layouts.app')

@section('content')
    <h1 class="text-center">{{$title}}</h1>
    <h3 class="text-center">Publish your passions, your way</h3>
    <p class="text-center mt-5">
        <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
        <a href="/register" class="btn btn-success btn-lg" role="button">Signup</a>
    </p>
@endsection
