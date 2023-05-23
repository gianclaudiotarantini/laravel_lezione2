<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InfoMail;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function homepage () {

        return view('template.welcome');
    }

    public function form () {
        return view('template.form');
    }

    public function send(Request $request) {

        $request->validate([

        "nome" => "required|string",
        "email" => "required|email",
        "telefono" => "required|numeric",
        "messaggio" => "required|min:10",
        ]);

        $data = [
            "firstname" => $request->nome,
            "email" => $request->input('email'),
            "phone" => $request->telefono,
            "message" => $request->messaggio,
        ];

        Mail::to($request->input('email'))->send(new InfoMail($data));

        return redirect()
            ->route('homepage')
            ->with('success', 'Email inviata');
    }

}