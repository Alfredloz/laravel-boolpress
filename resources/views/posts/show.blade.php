@extends('layouts.app')
@section('title')
    Posts
@endsection
@section('main-content')
    <h1>Post number: {{$post->id}} </h1>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Torna ai post</a>

    <div class="card card_box">
        <div class="card-header">
          <h3>{{ $post->title }}</h3>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $post->body }}</p>
            <p>Creato il: {{$post->created_at}}</p>
            <p>Aggiornato il: {{$post->updated_at}}</p>    
            <footer class="blockquote-footer">
              <p>Categoria: {{ $post->category->title }}</p>
              <p>
                @if (count($post->tags) > 0)
                <p>Tags: </p>
                  @foreach ($post->tags as $tag)
                      <span> {{  $tag->name  }}</span>
                  @endforeach  
                  @else
                  <span>nessun tag</span>
                @endif

              </p>
            </footer>
          </blockquote>
        </div>
      </div>

@endsection