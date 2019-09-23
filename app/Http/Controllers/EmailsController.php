<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;

class EmailsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = auth()->user()->emails()->orderBy('id', 'DESC')->paginate(10);
        return view('emails.index', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $email = new Email;
        $email->body = null;
        return view('emails.create', compact('email'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'subject' => ['required', 'min:3', 'max:255'],
            'body' => ['required']
        ]);

        # Make sure the value will be saves as json not string
        $validated['body'] = json_decode($request->body);

        $emailId = $request->id;
        if ($emailId) {
            $email = Email::find($emailId);
            $this->authorize('update', $email);
            $email->update($validated);
        } else {
            $validated['owner_id'] = auth()->id();
            Email::create($validated);
        }

        return redirect('/emails');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        $this->authorize('update', $email);
        return view('emails.create', compact('email'));
    }
}
