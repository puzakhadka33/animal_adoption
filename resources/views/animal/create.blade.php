@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>add animal</h5>
<hr>
    <form method="POST" action="{{route('animal.store')}}" enctype="multipart/form-data">
        @csrf
        @if ($organizations != '')
        <div class="form-group">
          <label for="">Organization</label>
          <select name="organization_id" id="" class="form-control" required>
            <option value="">Select an Organization</option>
            @foreach($organizations as $organization)
              <option value="{{$organization->id}}">{{$organization->user->name}}</option>
            @endforeach
          </select>
        </div>
        @endif

        <br>
        <div class="form-group">
          <label for="">Animal Category</label>
          <select name="category_id" id="" class="form-control" required>
            <option value="">Select an animal category</option>
            @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
          </select>
        </div>
<br>

        <div class="form-group">
          
          <label for="name">name</label>
          <input name="name" type="text" class="form-control" id="animal" aria-describedby="animal" placeholder="Add name of animal">
        </div>
        <div class="form-group">
          <br>
            <label for="color"> color</label>
            <input name="color" type="text" class="form-control" id="animal" aria-describedby="animal" placeholder="Add color of animal">
          </div>
          <div class="form-group">
            <br>
            <label for="height">height</label>
            <input name="height" type="text" class="form-control" id="animal" aria-describedby="animal" placeholder="Add height of animal">
          </div>
          <div class="form-group">
            <br>
            <label for="weight">weight</label>
            <input name="weight" type="text" class="form-control" id="animal" aria-describedby="animal" placeholder="Add weight of animal">
          </div>
          <div class="form-group">
            <br>
            <label for="length">length</label>
            <input name="length" type="text" class="form-control" id="animal" aria-describedby="animal" placeholder="Add length of animal">
          </div>
          <div class="form-group">
            <br>
            <label for="breed">Breed</label>
            <input name="breed" type="text" class="form-control" id="animal" aria-describedby="animal" placeholder="Add animal breed ">
          </div>
          
          <div class="form-group">
            <label for="">Animal Image</label>
            <input type="file" name="image" id="" class="form-control">
          </div>

          <div>
            <label for="name">Description </label>  <br>
            <textarea name="description" id="" cols="138" rows="5"></textarea>
          </div>
          
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
@endsection