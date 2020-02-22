@extends('layout')
@section('content')
<form method="POST"
      action="{{ route('posts.update',['post'=>$post->id]) }}">
    @csrf
    @method('PUT')
    @include('posts._form')
    <button type="submit" class="btn-primary btn-block">update!</button>

</form>
@endsection