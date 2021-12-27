@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{route('organization.create')}}" class="btn btn-primary btn-sm">Add oranization</a>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col">name </th>
            <th scope="col">email </th>
            <th scope="col">contact </th>
            <th scope="col">email_verifired_at</th>
            <th scope="col">address </th>
            <th scope="col">password </th>
            <th scope="col">alt_email </th>
            <th scope="col">image </th>
            <th scope="col">status </th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($organization_data as $organization)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$organization->user->name}}</td>
            <td>{{$organization->user->email}}</td>
            <td>{{$organization->user->contact}}</td>
            <td>{{$organization->user->email_verified_at}}</td>
            <td>{{$organization->user->address}}</td>
            <td>{{$organization->user->password}}</td>
            <td>{{$organization->alt_email}}</td>
            <td><img src="{{url('images')}}/{{$organization->image}}" alt="" width="200"></td>
            <td>
                @if ($organization->status ==1)
                  Active
                @else
                  Inactive
                @endif
              {{$organization->status}}</td>


            <td>
              @can('organization-edit')
              <form action="{{route('organization.edit', ['organization' => $organization->id])}}">
                  <button  class="btn btn-sm btn-success">edit</button>
              </form>
          @endcan
              @can('organization-delete')
                <form action="{{route('organization.destroy', ['organization' => $organization->id])}}" method="post">
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