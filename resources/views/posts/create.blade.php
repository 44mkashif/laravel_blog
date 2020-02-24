@extends('layouts.app')

@section('content')

<h1 class="text-center">Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="row justify-content-center mt-4">
            <div class="col-8">
                <div class="form-group row">
                    {{Form::label('title', 'Title', ['class' => 'col-sm-2 col-form-label'])}}
                    {{Form::text('title', '', ['class' => 'form-control col-sm-10'])}}
                </div>

                <div class="form-group row">
                    {{Form::label('body', 'Body', ['class' => 'col-sm-2 col-form-label'])}}
                    {{Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control col-sm-10'])}}
                </div>

                <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>

                <div class="row">
                    {{Form::submit('Submit', ['class' => 'btn btn-primary mt-2 offset-6'])}}
                </div>
                
            </div>
        </div>
    {!! Form::close() !!}

@endsection