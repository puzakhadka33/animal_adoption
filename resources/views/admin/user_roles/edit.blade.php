@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit: {{$userRole->user_role}}
        </div>
        <div class="card-body">
            <form action="{{route('user-role.update', ['user_role' => $userRole->id])}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="userRole">User Role</label>
                    <input type="text" name="user_role" id="userRole" value="{{$userRole->user_role}}" class="form-control">
                </div>

                <div class="row mt-4">
                <h4 class="font-weight">Permissions</h4>
                    @foreach ($components as $component)
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <label for="">{{$component->component}} Section</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @foreach ($rules as $rule)
                                        @if ($rule->app_component_id == $component->id)
                                            <div class='checkbox'>
                                                <label for=""><input type='checkbox' name="rules[]" value="{{$rule->id}}"
                                                    @foreach ($userRole->rules as $access)
                                                        @if ($access->id == $rule->id)
                                                            checked
                                                        @endif
                                                    @endforeach
                                                    ><span class="mx-2">{{$rule->rule}}</span></label>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection