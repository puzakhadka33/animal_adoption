@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>Create client</h5>
<hr>
    <form method="POST" action="{{route('client.store')}}">
        @csrf
        <div class="form-group">
          <br>
          <br>
          <input name="client" type="text" class="form-control" id="client" aria-describedby="client" placeholder="Add  client">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection