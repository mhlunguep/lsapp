@extends('layouts.app')

@section('content')
<a href="http://localhost/lsapp/public/posts" class="btn btn-default"> Go back </a>
    <h1>{{ $post->title }}</h1>
    <div>
        {{ $post->body }}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    <hr>
    @if (!Auth::guest())
    <a href="http://localhost/lsapp/public/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a>

    {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete',['class'=>'btn btn danger']) }}
    {!! Form::close() !!}
@endsection