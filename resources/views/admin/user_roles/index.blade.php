@extends('layouts.admin')
@section('title')
    User Roles
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title d-inline-block">Roles</h3>
                    <a href="{{route('user-role.create')}}" class="btn btn-info float-end">Create New</a>
                </div>
                <div class="card-body">
                    <table id="" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>User Role</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($user_roles->count() > 0)
                            @php($count  = 1)
                                @foreach ($user_roles as $user_role)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{{$user_role->user_role}}</td>
                                        <td>{{ \Carbon\Carbon::parse($user_role->created_at)->format('d/m/Y')}}</td>
                                        <td class="action d-flex" style='column-gap: 5px;'>
                                            @can('auth-edit')
                                                <a href="{{route('user-role.edit', $user_role->id)}}" class="btn btn-success btn-sm">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                            @endcan
                                            @can('auth-delete')
                                                <form action="{{route('user-role.destroy', ['user_role' => $user_role->id])}}" method="post" >
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm" >
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            @endcan
                                        </td>
                                    </tr>
                                    @php($count++)
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="4" class="text-center"><i>No Data in the table!!!</i></th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    
@endsection