@extends('layouts.app')

@section('content')

    <h3>Edit post</h3>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $posts->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title',$posts->title,['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body',$posts->body,['class' => 'form-control', 'placeholder' => 'Body text'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>

    {{Form::hidden('_method', 'PUT')}}

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection
