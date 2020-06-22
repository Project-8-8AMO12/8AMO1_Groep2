@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
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
                    <td><button type="button" class="btn btn-primary">Edit</button></td>
                    @if($data->id != 1)
                        <td><a href="/users/delete/{{$data->id}}" role="button">Delete</a></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
