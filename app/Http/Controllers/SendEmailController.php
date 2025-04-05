<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Blasting;

class SendEmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        Mail::to($request->input('email'))->send(new Blasting());

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}