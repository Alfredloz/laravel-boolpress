@extends('layouts.app')
@section('title')
    Posts
@endsection
@section('main-content')
    <h1>Post number: {{$post->id}} </h1>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Torna ai post</a>

    <h2>{{$post->title}}</h2>
    <p>{{$post->body}}</p>
    <p>{{$post->created_at}}</p>
    <p>{{$post->updated_at}}</p>    

@endsection