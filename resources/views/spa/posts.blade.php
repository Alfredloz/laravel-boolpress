@extends('layouts.app')
@section('title')
    Posts
@endsection
@section('main-content')
    <h1>Posts</h1>
    <a name="edit_post" id="" class="btn btn-primary btn-block" href="{{ route('posts.index') }}" role="button">Edit Posts</a>
   <div id="app">
    <posts-component>
        
    </posts-component>
   </div>
@endsection