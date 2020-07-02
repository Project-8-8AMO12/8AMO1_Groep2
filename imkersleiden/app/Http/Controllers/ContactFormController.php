<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function mailing(Request $request) {
        Mail::send(new ContactMail($request));
        return redirect('/');
    }
}
