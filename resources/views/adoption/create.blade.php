{{-- @extends('layouts.admin')
@section('content') --}}


{{-- @endsection --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
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
            <label for="name">Appointment date </label>
            <input name="date" type="date" class="form-control" id="animal "placeholder="">
          </div>
          <div class="form-group">
            <br>
            <label for="name">Why would you like to adopt ?</label>
            <textarea name="description" id="" cols="30" rows="10" class='form-control w-100' placeholder="Please write the reason why would you like to adopt this pet"></textarea>
            {{-- <input name="description" type="text" class="form-control" id="adoption"placeholder=" "> --}}
          </div>
          
          
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
  </body>
</html>