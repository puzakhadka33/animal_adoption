@extends('layouts.admin')


@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create new rule</h3>
        </div>
        <div class="card-body">
            <form action="{{route('rule.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="rule">Rule</label>
                    <input type="text" id="rule" name="rule" class="form-control">
                </div>
                <div class="form-group">
                    <label>App Component</label>
                    <select class="form-control" name="app_component_id">
                        @foreach ($app_components as $component)
                            <option value="{{$component->id}}">{{$component->component}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="" class='mr-3'>Assign rule to:</label>
                    <div>
                        @foreach($user_roles as $user_role)
                            <input type="checkbox" name="roles[]" id="" value="{{$user_role->id}}"><span class="mx-2">{{$user_role->user_role}}</span>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection