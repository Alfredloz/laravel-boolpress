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