@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Posts</h1>

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="p-4 bg-light m-3">
                <h3>
                    <a href="/posts/{{$post->id}}">
                        {{$post->title}}
                    </a>
                </h3>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach

        <div class="d-flex justify-content-center mt-5">
            {{$posts->links()}}
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection