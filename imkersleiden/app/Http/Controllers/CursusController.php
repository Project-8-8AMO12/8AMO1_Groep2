<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CursusController extends Controller
{
    public function index()
    {
        $cursussen = DB::table('cursus')->get();

        return view('cursussen', ['cursussen' => $cursussen]);
    }
}
