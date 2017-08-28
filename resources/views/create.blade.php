@extends('layouts.master')


@section('content')
<div class="container">
<h2>Publish a Blog Post</h2>

<form>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea name="body" id="body" class="form-control"></textarea>
  </div>

 
  <button type="submit" class="btn btn-primary">Publish</button>
</form>

</div>
<br>

@endsection