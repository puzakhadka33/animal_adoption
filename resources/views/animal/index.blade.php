@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{route('animal.create')}}" class="btn btn-primary btn-sm">Add animal</a>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col">name</th>
            <th scope="col">Image</th>
            <th scope="col">color</th>
            <th scope="col">height</th>
            <th scope="col">weight</th>
            <th scope="col">length</th>
            <th scope="col">breed</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($animal as $animal)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$animal->name}}</td>
            <td><img src="{{url('images')}}/{{$animal->image}}" alt="" width="200"></td>
            <td>{{$animal->color}}</td>
            <td>{{$animal->height}}</td>
            <td>{{$animal->weight}}</td>
            <td>{{$animal->length}}</td>
            <td>{{$animal->breed}}</td>
            <td>{{$animal->description}}</td>
            
          

            <td>
              <a href="{{route('adopt', ['animal' => $animal->id])}}" class="btn btn-info btn-sm">
                Adopt
            </a>
              @can('animal-edit')
              <form action="{{route('animal.edit', ['animal' => $animal->id])}}" method='get'>
                  <button  class="btn btn-sm btn-success">edit</button>
              </form>
          @endcan
              @can('animal-delete')
                <form action="{{route('animal.destroy', ['animal' => $animal->id])}}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-sm btn-danger">Delete</button>
              </form>
          @endcan
              </form>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
</div>
@endsection