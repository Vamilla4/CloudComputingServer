<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Message;

public function showForm()
{
    return view('welcome');
}

public function store(Request $request)
{
    Message::create([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ]);

    return back()->with('success', 'Message saved successfully!');
}

abstract class Controller
{
    public function SendEmail(Request $request): void{
        Mail::to($request->email)->send(new TestMail($request))
    }
}
