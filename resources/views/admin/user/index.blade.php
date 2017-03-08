
@extends('layouts.app')
@section('content')
    <div class="flt-left">
        <h1>All Users</h1>
    </div>

    <div class="flt-right mg-top-20">
        <a href="{{url(route('users.create'))}}" class="btn btn-info">Add User</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr id = "user-{{$user->id}}">
                <td class="user-id">{{$user->id}}</td>
                <td>{{$user->getFullName()}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role ? $user->role->name : 'No role'}}</td>
                <td>{{$user->is_active? 'Active': 'Not Active'}}</td>
                <td>{{$user->created_at ? $user->created_at->diffForHumans(): "Do not have info"}}</td>
                <td>{{$user->updated_at ? $user->updated_at->diffForHumans(): "Do not have info"}}</td>
                <td><a href="{{url(route('users.edit', $user->id))}}" class="btn btn-primary">Update</a></td>
                <td><button class="btn btn-danger btn-delete">Delete</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


