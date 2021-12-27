@extends('layouts/master')
@section('content')
<div class="container">
    <h5>Animal List</h5>
    <div class="form-group">
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
                
              </tr>
              
              @foreach ($animalList as $item)
             
              <tr>
                  <th >{{$loop->iteration}}</th>
                  <td>{{$item->name}}</td>
                  <td><img src="{{url('images')}}/{{$item->image}}" alt="" width="100"></td>
                  <td>{{$item->color}}</td>
                  <td>{{$item->height}}</td>
                  <td>{{$item->weight}}</td>
                  <td>{{$item->length}}</td>
                  <td>{{$item->breed}}</td>

                  
                  
                  
                </tr>
                
                @endforeach
                
            </thead>
            </table>

    </div>

</div>
    
@endsection