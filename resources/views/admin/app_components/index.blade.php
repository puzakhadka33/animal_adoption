@extends('layouts.admin')
@section('title')
   App Components
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title d-inline-block">App Component</h3>
                    <a href="{{route('app-component.create')}}" class="btn btn-success float-end">Create New</a>
                </div>
                <div class="card-body">
                    <table id="" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>App Component</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($app_components->count() > 0)
                                @php ($count = 1)
                                @foreach ($app_components as $component)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{{$component->component}}</td>
                                        <td class="action d-flex" style="column-gap: 5px">
                                            <a href="{{route('app-component.edit', ['app_component' => $component->id])}}" class="btn btn-info btn-sm">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <form action="{{route('app-component.destroy', ['app_component' => $component->id])}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php ($count++)
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="3" class="text-center font-italic"><i>No Entries in the table!!!</i></th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection