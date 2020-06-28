<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = DB::table('users')->get();

        return view('users', ['users' => $users]);
    }

    public function user($id) {
        $user = DB::table('users')->where('id', '=', $id)->get();
        return view('user', ['user' => $user]);
    }

    public function delete($id) {
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect('/users');
    }

    public function edit(Request $request) {
        DB::table('users')->where('id', '=', $request->id)->update(['username' => $request->username, 'name' => $request->name, 'email' => $request->email, 'role' => $request->role]);
        return redirect('/users');
    }

    public function newUser() {
        return view('new_user');
    }
    public function create(Request $request) {

        $User = new User;

        $User->username = $request->username;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->role = $request->role;
        $User->password = $request->password;

        $User->save();

        return redirect('/users');
    }
}
