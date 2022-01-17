@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{route('blog.create')}}" class="btn btn-primary btn-sm">Add blog</a>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col">title </th>
            <th scope="col">description </th>
            <th scope="col">image </th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($blog_data as $blog)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$blog->title}}</td>
            <td>{{$blog->description}}</td>
            <td><img src="{{url('images')}}/{{$blog->image}}" alt="" width="100"></td>

            <td>
                @can('blog-edit')
                <form action="{{route('blog.edit', ['blog' => $blog->id])}}">
                    <button  class="btn btn-sm btn-success">edit</button>
                </form>
            @endcan
                @can('blog-delete')
                  <form action="{{route('blog.destroy', ['blog' => $blog->id])}}" method="post">
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