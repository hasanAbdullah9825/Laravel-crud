@extends('layout')

@section('content')
@foreach ($comments  as $comment)
<p>{{ $comment->content }}</p>
    
@endforeach
@endsection('content')