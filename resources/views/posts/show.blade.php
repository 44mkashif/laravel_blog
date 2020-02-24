@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary mb-3">Go Back</a>
    <h1>{{$post->title}}</h1>
    <p class="lead mt-3">{!!$post->body!!}</p>
    <hr class="mt-4 mb-4">
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>

    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <div class="d-flex">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'd-inline ml-auto'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>
        @endif
    @endif
@endsection
