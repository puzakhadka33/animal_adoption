@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{route('category.create')}}" class="btn btn-primary btn-sm">Add category</a>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col">Category </th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($category_data as $category)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$category->category}}</td>
            <td>
                @can('category-edit')
                <form action="{{route('category.edit', ['category' => $category->id])}}">
                    <button  class="btn btn-sm btn-success">edit</button>
                </form>
            @endcan
                @can('category-delete')
                  <form action="{{route('category.destroy', ['category' => $category->id])}}" method="post">
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
            
            