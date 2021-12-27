@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{route('adoption.create')}}" class="btn btn-primary btn-sm">add to adopt</a>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col">name </th>
            <th scope="col">email </th>
            <th scope="col">contact </th>
            <th scope="col">email_verified_at</th>
            <th scope="col">address </th>
            <th scope="col">alt_email</th>
            <th scope="col">date </th>
            <th scope="col">description </th>
            <th scope="col">name </th>
            <th scope="col">breed</th>
            <th scope="col">status </th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($adoption_data as $adoption)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            
           
            <td>
              @if ($adoption->status ==1)
                Active
              @else
                Inactive
              @endif
            {{$adoption->status}}</td>
          <td>
            
            <td>
              @can('adoption-edit')
              <form action="{{route('adoption.edit', ['adoption' => $adoption->id])}}">
                  <button  class="btn btn-sm btn-success">edit</button>
              </form>
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