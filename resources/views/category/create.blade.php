@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>Create category</h5>
<hr>
    <form method="POST" action="{{route('category.store')}}">
        @csrf
        <div class="form-group">
          <br>
          <br>
          <label for="name">category</label>
          <input name="category" type="text" class="form-control" id="category" aria-describedby="category" placeholder="Add category">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection