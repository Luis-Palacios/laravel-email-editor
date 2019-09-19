<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class EmailsController extends Controller
{
    public function index()
    {
        $emails = Email::all();

        return view('emails.index', compact('emails'));
    }

    public function create()
    {
        return view('emails.create');
    }
}
