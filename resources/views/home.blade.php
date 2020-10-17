@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}

                </div>


                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary mb-4">Create post</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                    <br>
                    <h1>Your blog posts here!</h1>

                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>

                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action'=> ['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-right']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

                                        {!! Form::close() !!}
                                    </td>
                                </tr>

                            @endforeach
                        </table>

                    @else
                        <p>You have no posts yet!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
