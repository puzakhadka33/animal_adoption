@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>Edit admin</h5>
<hr>
    <form method="POST" action="{{route('admin.update',['admin' => $admin->id])}}">
        @csrf
        @method('put')
        <div class="form-group">
          <br>
          <label for="name">name</label>
          <input name="name" type="text" class="form-control" id="animal"placeholder="Add name "value="{{$admin->name}}">
        </div>
        <div class="form-group">
          <br>
          <label for="name">email</label>
          <input name="email" type="email" class="form-control" id="animal "placeholder="Enter your email " value="{{$admin->email}}">
        </div>
        <div class="form-group">
          <br>
          <label for="name">contact</label>
          <input name="contact" type="text" class="form-control" id="animal "placeholder="Enter your contact "value="{{$admin->contact}}">
        </div>
        <div class="form-group">
          <br>
          <label for="name">address</label>
          <input name="address" type="text" class="form-control" id="animal"placeholder="Enter your address "value="{{$admin->address}}">
        </div>
        <div class="form-group">
          <br>
          <label for="name">password</label>
          <input name="password" type="password" class="form-control" id="animal"placeholder="Enter your password "value="{{$admin->password}}">
        </div>
        <div class="form-group">
          <br>
          <label for="name">alt_email</label>
          <input name="alt_email" type="email" class="form-control" id="animal"placeholder="Add email"value="{{$admin->alt_email}}">
        </div>
        <div>
          <input  type="text" name ="status" value="" id="flexCheckDefault"value="{{$admin->status}}">
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