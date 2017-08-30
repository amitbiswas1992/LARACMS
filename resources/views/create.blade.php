@extends('layouts.master')


@section('content')
<div class="container">
<h2>Publish a Blog Post</h2>

<form method="POST" action="/post">
  <div class="form-group">
  {{ csrf_field() }}
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea name="body" id="body" class="form-control"></textarea>
  </div>

 
  <button type="submit" class="btn btn-primary">Publish</button>
</form>

@include('layouts.errors')
</div>
<br>

@endsection