@extends('layouts.app')

@section('content')
<a href="/public" class="btn btn-default"> Go back </a>
    <h1>{{ $post->title }}</h1>
    <div>
        {{ $post->body }}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
    <hr>
    <a href="/posts/{{  $ }}post->id }}/edit" clas></a>
@endsection