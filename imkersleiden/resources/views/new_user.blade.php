@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form class="form-group col-6" method="POST" action="{{ route('create_user') }}">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal">Create a new user</h1>
            <br />
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" value="">
            <br />

            <label for="password" class="">{{ __('Password') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <br />
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="">
            <br />
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email@email.com" value=""/>
            <br />
            <select class="form-control" name="role" class="form-control">
                <option>admin</option>
                <option>superadmin</option>
            </select>
            <br />
            <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Create User"></input>
        </form>
    </div>
</div>
@endsection
