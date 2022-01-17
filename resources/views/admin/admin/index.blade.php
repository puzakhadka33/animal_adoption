@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{route('admin.create')}}" class="btn btn-primary btn-sm">Add admin</a>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col">name </th>
            <th scope="col">email </th>
            <th scope="col">contact </th>
            <th scope="col">address </th>
            <th scope="col">alt_email </th>
            <th scope="col">status </th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($admin_data as $admin)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$admin->user->name}}</td>
            <td>{{$admin->user->email}}</td>
            <td>{{$admin->user->contact}}</td>
            <td>{{$admin->user->address}}</td>
            <td>{{$admin->alt_email}}</td>
            <td>
                @if ($admin->status ==1)
                  Active
                @else
                  Inactive
                @endif
              {{$admin->status}}</td>


            <td>
              @can('admin-edit')
              <form action="{{route('admin.edit', ['admin' => $admin->id])}}">
                  <button  class="btn btn-sm btn-success">edit</button>
              </form>
          @endcan
              @can('admin-delete')
                <form action="{{route('admin.destroy', ['admin' => $admin->id])}}" method="post">
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