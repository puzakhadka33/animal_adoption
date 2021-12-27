@extends('layouts.admin')
@section('content')

<div class="container">
    <h5>Create organization</h5>
<hr>
    <form method="POST" action="{{route('organization.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <br>
          <label for="name">name</label>
          <input name="name" type="text" class="form-control" id="" aria-describedby=" "placeholder="Add name ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">email</label>
          <input name="email" type="email" class="form-control" id="" aria-describedby="organization "placeholder="Enter your email ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">contact</label>
          <input name="contact" type="text" class="form-control" id="" aria-describedby="organization "placeholder="Enter your contact ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">Email Verified</label>
          <input name="email_verified_at" type="date" class="form-control" id="" aria-describedby="organization "placeholder="Enter your contact ">
        </div>
        
        <div class="form-group">
          <br>
          <label for="name">address</label>
          <input name="address" type="text" class="form-control" id="" aria-describedby="organization "placeholder="Enter your address ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">password</label>
          <input name="password" type="password" class="form-control" id=""aria-describedby="organization "placeholder="Enter your password ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">alt_email</label>
          <input name="alt_email" type="email" class="form-control" id="" aria-describedby="animal" placeholder="Add email">
        </div>
        <div class="form-group">
          <br>
          <label for="name">image</label>
          <input name="image" type="file" class="form-control" id=" >
        </div>
        
        <div>
          <input  type="checkbox" value="status" id="flexCheckDefault">
          <label  for="status">
            Default checkbox
          </label>
          <textarea name="status" id="status" cols="30" rows="10"></textarea>
        </div>
      
        <input type="hidden" name="user_role_id" value="1">
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection