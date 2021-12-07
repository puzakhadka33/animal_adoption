@extends('layouts.admin')
@section('title')
    App Rules
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title d-inline-block">App Components</h3>
                    <a href="{{route('rule.create')}}" class="btn btn-success float-end">Create New</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($app_components as $component)
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="component-title">{{$component->component}} Section</h5>
                                    </div>
                                    <div class="card-body">
                                        <table id="" class="table table-bordered table-hover table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>SN</th>
                                                    <th>Rule</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($rules->count() > 0)
                                                    @php($count = 1)
                                                    @foreach ($rules as $rule)
                                                        @if ($component->id == $rule->app_component_id)
                                                            <tr>
                                                                <td>{{$count}}</td>
                                                                <td>{{$rule->rule}}</td>
                                                                <td>{{$rule->created_at}}</td>
                                                                <td class="action d-flex" style="column-gap: 5px;">
                                                                    @can('auth-edit')
                                                                        <a href="{{route('rule.edit', ['rule' => $rule->id])}}" class="btn btn-info btn-sm">
                                                                            <i class="far fa-edit"></i>
                                                                        </a>
                                                                    @endcan
                                                                    @can('auth-delete')
                                                                        <form action="{{route('rule.destroy', ['rule' => $rule->id])}}" method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                                <i class="far fa-trash-alt"></i>
                                                                            </button>
                                                                        </form>
                                                                    @endcan
                                                                </td>
                                                            </tr>
                                                            @php($count++)
                                                        @endif
                                                        
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <th colspan="4" class="text-center"><i>No Entries in the table!!!</i></th>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection