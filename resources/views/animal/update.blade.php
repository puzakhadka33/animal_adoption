@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>add animal</h5>
<hr>
    <form method="POST" action="{{route('animal.update', ['animal' => $animal->id])}}">
        @csrf
        @method('put')
        <div class="form-group">
          <br>
          <br>
          <label for="name">name</label>
          <input name="name" type="text" class="form-control" id="animal" placeholder="Add name of animal" value="{{$animal->name}}">
        </div>
        <div class="form-group">
            <br>
            <label for="color"> color</label>
            <input name="color" type="text" class="form-control" id="animal" placeholder="Add color of animal" value="{{$animal->color}}">
          </div>
          <div class="form-group">
            <br>
            <label for="height">height</label>
            <input name="height" type="text" class="form-control" id="animal"  placeholder="Add height of animal" value="{{$animal->height}}">
          </div>
          <div class="form-group">
            <br>
            <label for="weight">weight</label>
            <input name="weight" type="text" class="form-control" id="animal"  placeholder="Add weight of animal" value="{{$animal->weight}}">
          </div>
          <div class="form-group">
            <br>
            <label for="length">length</label>
            <input name="length" type="text" class="form-control" id="animal"  placeholder="Add length of animal" value="{{$animal->length}}">
          </div>
          <div class="form-group">
            <br>
            <label for="breed">Breed</label>
            <input name="breed" type="text" class="form-control" id="animal" placeholder="Add animal breed " value="{{$animal->breed}}">
          </div>
  

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection