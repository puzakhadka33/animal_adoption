@extends('layouts.admin')
@section('content')

<div class="container">
    <h5>Adopt</h5>
<hr>
<div class="animal-details">
  <div class="card">
    <div class="card-header">Animal Details</div>
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <img src="{{url('images')}}/{{$animal->image}}" alt="" style="width:100%">
        </div>
        <div class="col-6">
          <p>Animal Name: <b>{{$animal->name}}</b></p>
          <p>Animal Color: <b>{{$animal->color}}</b></p>
          <p>Animal Height: <b>{{$animal->height}}</b></p>
          <p>Animal Breed: <b>{{$animal->breed}}</b></p>
          <p>Animal Weight: <b>{{$animal->weight}}</b></p>
          <p>Animal Length: <b>{{$animal->length}}</b></p>
        </div>
      </div>
    </div>
  </div>
</div>
    <form method="POST" action="{{route('adoption.store')}}">
        @csrf
        <input type="hidden" name="animal_id" value="{{$animal->id}}">
        <input type="hidden" name="organization_id" value="{{$animal->organization->id}}">
        <div class="form-group">
          <br>
          <label for="name">Date </label>
          <input name="date" type="date" class="form-control" id="animal "placeholder="">
        </div>
        <div class="form-group">
          <br>
          <label for="name">Description</label>
          <textarea name="description" id="" cols="30" rows="10" class='form-control w-100'></textarea>
          {{-- <input name="description" type="text" class="form-control" id="adoption"placeholder=" "> --}}
        </div>
        
        
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection