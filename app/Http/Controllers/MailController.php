<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    function send(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = array(
            'email' => $request->email,
            'message' => $request->message,
        );

        Mail::to('kailashtuta2000@gmail.com')->send(new SendMail($data));
        return redirect('/')->with('success', 'Thanks for contacting us!');
    }
}
