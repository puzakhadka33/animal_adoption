@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>edit category</h5>
<hr>
    <form method="POST" action="{{route('category.update',['category'=>$category->id])}}" >
        @csrf
        @method('put')
        <div class="form-group">
          <br>
          <br>
          <input name="category" type="text" class="form-control" id="category" placeholder="Add category" value="{{$category->category}}">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection