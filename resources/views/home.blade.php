@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Your Blog Posts</h1>

    @if (count($posts) > 0)
        <div class="container row">
            <table class="table table-striped col-8 offset-2">
                <tr class="thead-dark">
                    <th>Title</th>
                    <th></th>
                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td class="d-flex justify-content-end">
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary mr-1">Edit</a>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'd-inline'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection
