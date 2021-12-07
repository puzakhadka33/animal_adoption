@extends('layouts.admin')
@section('title')
    Create new component
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create New App Component</h3>
        </div>
        <form action="{{route('app-component.store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="component">App Component</label>
                    <input type="text" name="component" id="component" class="form-control">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </form>
    </div>
@endsection