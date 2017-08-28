@extends('layouts.master')



@section('content')
@foreach ($posts as $post)
    <p>This is post {{ $post->title}}</p>

@endforeach

@endsection











