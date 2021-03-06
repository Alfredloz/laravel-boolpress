@extends('layouts.app')
@section('title')
    Posts Create
@endsection
@section('main-content')

{{-- il messaggio da far comparire in alto al form!!!! --}}
{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
<form  action="{{ route('posts.store') }}" class="form-group" method="post">
  @csrf

  @method('POST')

  <label for="title">Title</label>
  <input autocomplete="off" type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('title') }}">
  {{-- messaggio di error vicino al input --}}
    @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <small id="helpId" class="text-muted">Inserisci il titolo del tuo post</small>
  <h5>Seleziona la tua categoria</h5>
  <select name="category_id" id="category_create">
    <option value="">All</option>
    @foreach ($categories as $cat)
        <option  value="{{ $cat->id }}" >{{ $cat->title }}</option>
        @endforeach
  </select>
  <br>
  <div class="tag_title">
    <label for="tags">Tags</label>
  </div>
  <select name="tags[]" id="tags_create" multiple class="form-control">
    <option value="">All</option>
    @foreach ($tags as $tag)
        <option  value="{{ $tag->id }}" >{{ $tag->name }}</option>
        @endforeach
  </select>
  <br>
  <label for="body">Boby del Post</label>
  <textarea style="resize: none" name="body" id="body" cols="30" rows="10" class="form-control">{{ old('body') }}</textarea>
  {{-- messaggio di error vicino alla textarea --}}

    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <br>  
  <input type="submit" value="Invia" class="form-control btn-primary">
</form>
@endsection 

