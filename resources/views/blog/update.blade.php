@extends('layouts.admin')

@section('content')
<div class="box">
  <div class="box-header">
      <h3 class="box-title">blog</h3>
  </div>
  <!--Box Body-->
  <div class="box-body">
      <!--Form Starts-->
      <form action="{{route('blog.update', ['blog' => $blog->id])}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
         
          <div class="form-group">
              <label for="user">Blog Title</label>
              <input type="text" id="" name="title" class="form-control" value="{{$blog->title}}">
          </div>
  
          <div class="form-group">
          <label for="user">Content</label>
          <br>
              <textarea id="" name="description"  rows="5" cols="145">
                  {{$blog->description}}
              
              </textarea>
          </div>
          <div class="form-group">
            <label for="user">Image</label>
            <input type="file" id="" name="image" class="form-control"value="{{$blog->image}}">
        </div>
         
          <div class="form-group">
              <button class="btn btn-primary" type="submit">Submit</button>
          </div>
         
      </form>
  </div>
</div>
@endsection