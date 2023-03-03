<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request){
        $message=$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);

        Mail::to('marck_123456@hotmail.com')->queue(new MessageReceived($message));
        //return 'Mensaje enviado';

        return back()->with('status','Mensaje enviado exitosamente');
    }
}
