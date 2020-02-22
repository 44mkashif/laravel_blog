@extends('layouts.app')

@section('content')
    <div class="container jumbotron">
        <a href="/posts" class="btn btn-primary mb-3">Go Back</a>
        <h1>{{$post->title}}</h1>
        <p class="lead mt-3">{{$post->body}}</p>
        <hr class="mt-4 mb-4">
        <small>Written on {{$post->created_at}}</small>
    </div>
@endsection
