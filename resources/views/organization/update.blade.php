@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>Edit organization</h5>
<hr>
    <form method="POST" action="{{route('organization.update',['organization' => $organization->id])}}" )}} enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
          <br>
          <label for="name">name</label>
          <input name="name" type="text" class="form-control" id="organization "placeholder="Add name "value="{{$organization->user->name}}">
        </div>
        <div class="form-group">
          <br>
          <label for="name">email</label>
          <input name="email" type="email" class="form-control" id="organization "placeholder="Enter your email " value="{{$organization->user->email}}">
        </div>
        <div class="form-group">
          <br>
          <label for="name">contact</label>
          <input name="contact" type="text" class="form-control" id="organization "placeholder="Enter your contact "value="{{$organization->user->contact}}">
        </div>
        <div class="form-group">
            <br>
            <label for="name">email_verified_at</label>
            <input name="email_verified_at" type="date" class="form-control" id="organization "placeholder="Enter your date "value="{{$organization->email_verified_at}}">
          </div>
        <div class="form-group">
          <br>
          <label for="name">address</label>
          <input name="address" type="text" class="form-control" id="organization "placeholder="Enter your address " value="{{$organization->user->address}}">
        </div>
        <div class="form-group">
          <br>
          <label for="name">alt_email</label>
          <input name="alt_email" type="email" class="form-control" id="organization" placeholder="Add email"value="{{$organization->alt_email}}">
        </div>
        <div class="form-group">
          <br>
          <label for="name">image</label>
          <input name="image" type="file" class="form-control" id="organization" placeholder="Add email"value="{{$organization->image}}">
        </div>
        <div>
          <input  type="checkbox" value="status" id="flexCheckDefault">
          <label  for="flexCheckDefault">
            Default checkbox
          </label>
        </div>
      
        <input type="hidden" name="user_role_id" value="1">
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection