@extends('layouts.admin')
@section('title')
    Edit {{$app_component->component}}
@endsection
@section('content')
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit: {{$app_component->component}}</h3>
            </div>
            <form action="{{route('app-component.update', ['app_component' => $app_component->id])}}" method="post" role="form" class="">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="component">App Component</label>
                        <input type="text" name="component" id="component" value="{{$app_component->component}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info mt-2">Update</button>
                </div>
            </form>
        </div>
@endsection