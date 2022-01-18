@extends('layouts.admin')
@section('content')
    {{$client->user->name}}

    <form action="{{ route('update.profile', ['client'=>$client ->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{$client->user->name}}" >

            </div>
        </div>

        <div class="row mb-3">
            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

            <div class="col-md-6">
                <input id="contact" type="text" class="form-control" name="contact" value="{{$client->user->contact}}" autofocus>

            </div>
        </div>
        <div class="row mb-3">
            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

            <div class="col-md-6">
                <input id="address" type="text" class="form-control" name="address" value="{{$client->user->address}}">

            </div>
        </div>
            
        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{$client->user->email}}">

              
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

             
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
            </div>
        </div>
        <div class="row mb-3">
            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

            <div class="col-md-6">
                <input id="image" type="file" class="form-control" name="image">

              
            </div>
        </div>


        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form>
@endsection