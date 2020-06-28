@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form class="form-group col-6" method="POST" action="{{ route('edit_user', $user[0]->id) }}">
            @csrf
            <input type="hidden" name="id" value="{{ $user[0]->id }}"/>
            <h1 class="h3 mb-3 font-weight-normal">Edit user data</h1>
            <br />
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" value="{{ $user[0]->username }}">
            <br />
            <label>name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user[0]->name }}">
            <br />
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email@email.com" value="{{ $user[0]->email }}"/>
            <br />
            <select class="form-control" name="role" class="form-control">
                <option>admin</option>
                <option>superadmin</option>
            </select>
            <br />
            <input class="btn btn-lg btn-info btn-block" type="submit" name="submit" value="Edit User"></input>
        </form>
    </div>
</div>
@endsection
