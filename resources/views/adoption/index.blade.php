@extends('layouts.admin')

@section('content')

<style>
  #adpt-btn{
    color: white;
    text-decoration: none;
  }
  button{
    margin-bottom: 12px;
  }
</style>
<div class="container">
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col">Image</th>
            <th scope="col">Animal name </th>
            <th scope="col">breed</th>
            <th scope="col">Reason to adopt </th>
            <th scope="col">Client Name </th>
            <th scope="col">Client Email </th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($adoption_data as $adoption)
          <tr>
            <th >{{$loop->iteration}}</th>
            <td><img src="{{url('images')}}/{{$adoption->animal->image}}" alt="" width="100"></td>
            <td >{{$adoption->animal->name}}</td>
            
            <td>{{$adoption->animal->breed}}</td>
            <td>{{$adoption->description}}</td>
            <td>{{$adoption->client->user->name}}</td>
            <td>{{$adoption->client->user->email}}</td>
            
            
          
          
           
           
            {{-- <td>
              @if ($adoption->status ==1)
                Active
              @else
                Inactive
              @endif
            {{$adoption->status}}</td>
            </td> --}}
            
            <td>
              @can('adoption-edit')
              <button class="btn btn-sm btn-primary"> <a href="" id="adpt-btn">Approve</a></button>
            
          @endcan
    
              @can('adoption-delete')
                <form action="{{route('adoption.destroy', ['adoption' => $adoption->id])}}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-sm btn-danger">Delete</button>
              </form>
          @endcan
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
</div>
@endsection