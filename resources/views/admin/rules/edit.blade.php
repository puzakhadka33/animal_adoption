@extends('layouts.admin')
@section('title')
    Edit {{$rule->rule}}
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Rule: {{$rule->rule}}</h3>
        </div>
        <div class="card-body">
            <form action="{{route('rule.update', ['rule' => $rule->id])}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="rule">Rule</label>
                    <input type="text" id="rule" name="rule" value="{{$rule->rule}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>App Component</label>
                    <select name="app_component_id" class="form-control">
                        <option value="{{$rule->app_component_id}}">{{$rule->app_component->component}}</option>
                        @foreach ($app_components as $component)
                            @if ($component->id != $rule->app_component_id)
                                <option value="{{$component->id}}">{{$component->component}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="" class='mr-3'>Assigned rules to:</label>
                    <div>
                        @foreach($user_roles as $user_role)
                            <input type="checkbox" name="roles[]" id="" value="{{$user_role->id}}"
                                @foreach ($rule->roles as $role)
                                    @if ($role->id == $user_role->id)
                                        checked
                                    @endif
                                @endforeach
                                                    
                            ><span class="mx-2">{{$user_role->user_role}}</span>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection