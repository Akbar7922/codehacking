@extends('layouts.admin')


@section('content')

    @if(Session::has('deleted user'))

        <div class="alert alert-danger">
            <p>{{session('deleted user')}}</p>
        </div>

    @endif

    <h1>Users List</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->photo ? $user->photo->path : 'https://i.stack.imgur.com/l60Hf.png'}}" alt=""></td>
                <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role_id ==0 ? 'No Role' : $user->role->name}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'No Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection