@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>edit category</h5>
<hr>
    <form method="POST" action="{{route('client.update')}}">
        @csrf
        <div class="form-group">
          <br>
          <br>
          <input type="file">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection