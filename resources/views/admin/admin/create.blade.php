@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>Create admin</h5>
<hr>
    <form method="POST" action="{{route('admin.store')}}">
        @csrf
        <div class="form-group">
          <br>
          <label for="name">name</label>
          <input name="name" type="text" class="form-control" id="animal"aria-describedby="admin "placeholder="Add name ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">email</label>
          <input name="email" type="email" class="form-control" id="animal"aria-describedby="admin "placeholder="Enter your email ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">contact</label>
          <input name="contact" type="text" class="form-control" id="animal"aria-describedby="admin "placeholder="Enter your contact ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">address</label>
          <input name="address" type="text" class="form-control" id="animal"aria-describedby="admmin "placeholder="Enter your address ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">password</label>
          <input name="password" type="password" class="form-control" id="animal"aria-describedby="admin "placeholder="Enter your password ">
        </div>
        <div class="form-group">
          <br>
          <label for="name">alt_email</label>
          <input name="alt_email" type="email" class="form-control" id="animal" aria-describedby="admin" placeholder="Add email">
        </div>
        <div>
          <input  type="text" name ="status" value="" id="flexCheckDefault">
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