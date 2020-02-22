@extends('layout')
@section('content')

   <h1>  {{ $Posts->title }}  </h1>
   <p>{{ $Posts->content }}</p>
   <p> Added:  {{ $Posts->created_at->diffForHumans() }}</p>
   @if ( (new Carbon\Carbon() )->diffInMinutes($Posts->created_at) <5)
   <strong>!New Post.....</strong>
@endif



@endsection()