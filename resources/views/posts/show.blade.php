@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    <a href="/posts" class="btn btn-outline-dark">Go Back</a>
    <h1>{{$posts->title}}</h1>
    <img style="width: 100%" src="/storage/cover_images/{{$posts->cover_image}}">

    <br><br>
    <div>
        {!! $posts->body !!}
    </div>
    <hr>

    <small>Written on {{$posts->created_at}} by <b>{{$posts->user->name}}</b></small>


    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $posts->user_id)
            <a href="/posts/{{$posts->id}}/edit" class="btn btn-secondary">Edit</a>
            {!! Form::open(['action'=> ['App\Http\Controllers\PostsController@destroy', $posts->id], 'method'=>'POST', 'class'=>'float-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

            {!! Form::close() !!}
        @endif
    @endif
@endsection
