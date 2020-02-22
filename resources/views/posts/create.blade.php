@extends('layouts.app')

@section('content')

<h1 class="text-center">Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="row justify-content-center mt-4">
            <div class="col-12">
                <div class="form-group row">
                    {{Form::label('title', 'Title', ['class' => 'col-sm-1 col-form-label'])}}
                    {{Form::text('title', '', ['class' => 'form-control col-sm-11'])}}
                </div>

                <div class="form-group row">
                    {{Form::label('body', 'Body', ['class' => 'col-sm-1 col-form-label'])}}
                    {{Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control col-sm-11'])}}
                </div>

                <div class="row">
                    {{Form::submit('Submit', ['class' => 'btn btn-primary mt-2 offset-6'])}}
                </div>
                
            </div>
        </div>
    {!! Form::close() !!}

@endsection