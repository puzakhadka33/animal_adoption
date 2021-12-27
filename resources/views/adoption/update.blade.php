@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>Create adoption</h5>
<hr>
    <form method="POST" action="{{route('adoption.store')}}">
        @csrf
        <div class="form-group">
          <br>
          <label for="name">client name</label>
          <input name="name" type="text" class="form-control" id="animal"aria-describedby="organization "placeholder="Add name ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">client email</label>
          <input name="email" type="email" class="form-control" id="animal"aria-describedby="organization "placeholder="Enter your email ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">client contact</label>
          <input name="contact" type="text" class="form-control" id="animal"aria-describedby="organization "placeholder="Enter your contact ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">client address</label>
          <input name="address" type="text" class="form-control" id="animal"aria-describedby="organization "placeholder="Enter your address ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">client alt_email</label>
          <input name="alt_email" type="email" class="form-control" id="animal" aria-describedby="animal" placeholder="Add email">
        </div>
        <div class="form-group">
          <br>
          <label for="name">date of adoption</label>  <br>
          <textarea name="description" id="" cols="135" rows="5"></textarea>
        </div>
        <div class="form-group">
          <br>
          <label for="name">reason to adopt</label>
          <input name="description" type="text-area" class="form-control" id="adoption"aria-describedby="organization "placeholder="Enter description ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">status</label>
          <input name="status" type="radio" class="form-control" id="adoption"aria-describedby="organization "placeholder="Enter status ">
        </div>
        <div class="form-group">
          <br>
          <br>
          <label for="name">Animal name</label>
          <input name="name" type="text" class="form-control" id="animal" aria-describedby="animal" placeholder="Add name of animal">
        </div>
        <div class="form-group">
            <br>
            <label for="color"> Animal color</label>
            <input name="color" type="text" class="form-control" id="animal" aria-describedby="animal" placeholder="Add color of animal">
          </div>
         
          <div class="form-group">
            <br>
            <label for="breed">Animal Breed</label>
            <input name="breed" type="text" class="form-control" id="animal" aria-describedby="animal" placeholder="Add animal breed ">
          </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection