@extends('layouts.app')
@section('title')
    Post EDIT
@endsection
@section('main-content')
<form  action="{{ route('posts.update', $post) }}" class="form-group" method="post">
  @csrf

  @method('PUT')

  <label for="title">Title</label>
  <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $post->title }}">
  @error('title')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <small id="helpId" class="text-muted">Inserisci il titolo del tuo post</small>
  <br>
  <label for="body">Boby del Post</label>
  <textarea style="resize: none" name="body" id="body" cols="30" rows="10" class="form-control">{{ $post->body }}</textarea>
  @error('body')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <br>  
  <input type="submit" value="Invia" class="form-control btn-primary">
</form>
@endsection 