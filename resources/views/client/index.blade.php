@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{route('client.create')}}" class="btn btn-primary btn-sm">Add client</a>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col"></th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($client_data as $client)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$client->client}}</td>
            <td>
                <a href="ckient/update" class="btn btn-sm btn-success">Edit</a>
                <a href="" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
</div>
@endsection