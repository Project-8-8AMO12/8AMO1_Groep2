@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-success" href="{{ route('new_user') }}">New User</a>
    <table class="table mt-3">
        <thead>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($users as $key => $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->role }}</td>
                    <td><a href="{{ route('user', $data->id ) }}" role="button">Edit</a></td>
                    @if($data->id != 1)
                        <td><a href="{{ route('delete_user', $data->id ) }}" role="button">Delete</a></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
