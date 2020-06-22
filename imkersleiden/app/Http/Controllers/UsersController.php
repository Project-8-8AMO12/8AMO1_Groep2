<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    public function delete($id) {
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect('/users');
    }

}
