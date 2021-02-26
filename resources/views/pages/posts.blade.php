@extends('layouts.app')
@section('title')
    Posts
@endsection
@section('main-content')
<button type="button" class="btn btn-primary btn-block"><a class="text-white" href="{{ route('posts.index') }}">Vai a pannello amministrazione posts</a></button>
@foreach ($posts as $post)
<div class="card card_box">
    <div class="card-header">
      <h3>{{ $post->title }}</h3>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>{{ $post->body }}</p>
        <footer class="blockquote-footer">Categoria: {{ $post->category->title }}</footer>
      </blockquote>
    </div>
  </div>
    
@endforeach
@endsection