@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>Create blog</h5>
<hr>
    <form method="POST" action="{{route('blog.store')}}">
        @csrf
        <div class="form-group">
          <br>
          <label for="name"> Blog title</label>
          <input name="title" type="text" class="form-control" id="blog"placeholder="Add blog title ">
        </div>
        <br>
        <div>
          <label for="name">Description </label>  <br>
          <textarea name="description" id="" cols="138" rows="5"></textarea>
        </div>
      <div class="form-group">
        <br>
        <label for="name">image</label>
        <input name="image" type="file" class="form-control" id="blog" placeholder="Enter your alternate email ">
      </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection