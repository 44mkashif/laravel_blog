@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Posts</h1>

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="row mt-3">
                <div class="col-md-4 col-sm-4 p-0">
                    <img src="/storage/cover_images/{{$post->cover_image}}" alt="Cover Image" class="img-fluid" style="">
                </div>
                <div class="col-md-8 col-sm-8 p-4 bg-light">
                    <h3>
                        <a href="/posts/{{$post->id}}">
                            {{$post->title}}
                        </a>
                    </h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center mt-5">
            {{$posts->links()}}
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection