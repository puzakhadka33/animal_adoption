@extends('layouts.admin')
@section('content')
    
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">S.n</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Image</th>
        <th scope="col">Desc</th>
        <th scope="col">organization</th>
        <th scope="col">Location</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($message as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->client->user->name}}</td>
            <td>{{$item->client->user->email}}</td>
            <td><img src="{{url('images')}}/{{$item->image}}" alt="" srcset="" width="100"></td>
            <td>{{$item->description}}</td>
            <td>{{$item->organization->user->name}}</td>
            <td><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1381.8492260894789!2d{{$item->lng}}!3d{{$item->lat}}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1642328174921!5m2!1sen!2snp" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></td>
           
            
          </tr>
          @endforeach
      </tbody>
    </table>
  

@endsection