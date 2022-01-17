@extends('layouts.admin')
@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">S.N</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contact as $item)
            
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->subject}}</td>
            <td>{{$item->message}}</td>
            <td><button type="button" class="btn btn-danger"><a href="{{route('adInbox.destroy', [$item->id])}}" style="text-decoration: none; color:white;"> Delete</a></button></td>
        </tr>
        @endforeach
      
    </tbody>
  </table>
  
@endsection